<?php namespace Anomaly\Streams\Platform\Asset;

use Anomaly\Streams\Platform\Addon\Theme\ThemeCollection;
use Anomaly\Streams\Platform\Application\Application;
use Anomaly\Streams\Platform\Routing\UrlGenerator;
use Anomaly\Streams\Platform\Support\Template;
use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Collective\Html\HtmlBuilder;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use League\Flysystem\MountManager;

/**
 * Class Asset
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class Asset
{

    /**
     * The public base directory.
     *
     * @var null
     */
    protected $directory = null;

    /**
     * Groups of assets. Groups can
     * be single files as well.
     *
     * @var array
     */
    protected $collections = [];

    /**
     * Loaded provisions. When tagging
     * assets using "as:*" they will be
     * added to the loaded array.
     *
     * @var array
     */
    protected $loaded = [];

    /**
     * The URL generator.
     *
     * @var UrlGenerator
     */
    protected $url;

    /**
     * The HTML utility.
     *
     * @var HtmlBuilder
     */
    protected $html;

    /**
     * The files system.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Asset path hints by namespace.
     *
     * 'module.users' => 'the/resources/path'
     *
     * @var AssetPaths
     */
    protected $paths;

    /**
     * The asset parser utility.
     *
     * @var AssetParser
     */
    protected $parser;

    /**
     * The theme collection.
     *
     * @var ThemeCollection
     */
    protected $themes;

    /**
     * The mount manager.
     *
     * @var MountManager
     */
    protected $manager;

    /**
     * The HTTP request.
     *
     * @var Request
     */
    protected $request;

    /**
     * The template utility.
     *
     * @var Template
     */
    protected $template;

    /**
     * The stream application.
     *
     * @var Application
     */
    protected $application;

    /**
     * The asset filters.
     *
     * @var AssetFilters
     */
    protected $filters;

    /**
     * The config repository.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Create a new Application instance.
     *
     * @param Application $application
     * @param ThemeCollection $themes
     * @param MountManager $manager
     * @param AssetParser $parser
     * @param Repository $config
     * @param Template $template
     * @param Filesystem $files
     * @param AssetPaths $paths
     * @param Request $request
     * @param HtmlBuilder $html
     * @param UrlGenerator $url
     */
    public function __construct(
        Application $application,
        ThemeCollection $themes,
        MountManager $manager,
        AssetFilters $filters,
        AssetParser $parser,
        Repository $config,
        Template $template,
        Filesystem $files,
        AssetPaths $paths,
        Request $request,
        HtmlBuilder $html,
        UrlGenerator $url
    ) {
        $this->url         = $url;
        $this->html        = $html;
        $this->files       = $files;
        $this->paths       = $paths;
        $this->config      = $config;
        $this->themes      = $themes;
        $this->parser      = $parser;
        $this->filters     = $filters;
        $this->manager     = $manager;
        $this->request     = $request;
        $this->template    = $template;
        $this->application = $application;
    }

    /**
     * Add an asset or glob pattern to an asset collection.
     *
     * This should support the asset being the collection
     * and the asset (for single files) internally
     * so asset.links / asset.scripts will work.
     *
     * @param             $collection
     * @param             $file
     * @param  array $filters
     * @param bool $internal        A flag telling the system
     *                              this is an internal request
     *                              and should be processed differently.
     * @return $this
     * @throws \Exception
     */
    public function add($collection, $file, array $filters = [], $internal = false)
    {
        if (!isset($this->collections[$collection])) {
            $this->collections[$collection] = [];
        }

        /**
         * Check for named asset tags
         * and mark as loaded if found.
         */
        $names = array_map(
            function ($filter) {
                return strtolower(preg_replace('/^as:/', '', $filter));
            },
            array_filter(
                $filters,
                function ($filter) {
                    return starts_with($filter, 'as:');
                }
            )
        );

        /**
         * Required assets should clear
         * any that may already be loaded.
         */
        if ($internal == false && in_array('required', $filters)) {
            $this->removeLoaded($names);
        }

        /**
         * Check that we don't have any
         * named assets that are loaded
         * already unless it's a glob file.
         */
        if (
            $internal == false
            && !in_array('required', $filters)
            && array_intersect_key(array_flip($names), $this->getLoaded())
        ) {
            return $this;
        }

        foreach ($names as $name) {
            $this->addLoaded($name, $collection . '@' . $file);
        }

        /**
         * Guess some common
         * sense filters.
         */
        $filters = array_unique(array_merge($filters, AssetGuesser::guess($file)));

        /**
         * Determine the actual
         * path of the file.
         */
        $file = $this->paths->realPath($file);

        /*
         * If this is a remote or single existing
         * file then add it normally.
         */
        if (starts_with($file, ['http', '//']) || file_exists($file)) {

            $this->collections[$collection][$file] = $filters;

            return $this;
        }

        /*
         * If this is a valid glob pattern then add
         * it to the collection and add the glob filter.
         */
        if (count(glob($file)) > 0) {

            $this->collections[$collection][$file] = array_merge($filters, ['glob']);

            return $this;
        }

        if (
            $this->config->get('app.debug') &&
            !$this->collectionHasFilter($collection, 'ignore') &&
            !in_array('ignore', $filters)
        ) {
            \Log::error("Asset [{$file}] requested by [{$collection}] does not exist!");
        }
    }

    /**
     * Download a file and return it's path.
     *
     * @param              $url
     * @param  int $ttl
     * @param  null $path
     * @return null|string
     */
    public function download($url, $ttl = 3600, $path = null)
    {
        $path = $this->paths->downloadPath($url, $path);

        if (!$this->files->isDirectory($directory = dirname($path = public_path(ltrim($path, '/\\'))))) {
            $this->files->makeDirectory($directory, 0777, true);
        }

        if (!$this->files->exists($path) || filemtime($path) < (time() - $ttl)) {
            $this->files->put($path, file_get_contents($url));
        }

        return 'public::' . ltrim(str_replace(public_path(), '', $path), '/\\');
    }

    /**
     * Return the contents of a collection.
     *
     * @param         $collection
     * @param  array $filters
     * @return string
     */
    public function inline($collection, array $filters = [])
    {
        return file_get_contents(
            $this->paths->realPath('public::' . ltrim($this->path($collection, $filters), '/\\'))
        );
    }

    /**
     * Return the URL to a compiled asset collection.
     *
     * @param         $collection
     * @param  array $filters
     * @return string
     */
    public function url($collection, array $filters = [], array $parameters = [], $secure = null)
    {
        if (!isset($this->collections[$collection])) {
            $this->add($collection, $collection, $filters, true);
        }

        if (!$path = $this->getPath($collection, $filters)) {
            return null;
        }

        return $this->url->asset($path, $parameters, $secure);
    }

    /**
     * Return the path to a compiled asset collection.
     *
     * @param         $collection
     * @param  array $filters
     * @return string
     */
    public function path($collection, array $filters = [])
    {
        if (!isset($this->collections[$collection])) {
            $this->add($collection, $collection, $filters, true);
        }

        return $this->request->getBasePath() . $this->getPath($collection, $filters);
    }

    /**
     * Return the asset path to a compiled asset collection.
     *
     * @param         $collection
     * @param  array $filters
     * @return string
     */
    public function asset($collection, array $filters = [])
    {
        if (!isset($this->collections[$collection])) {
            $this->add($collection, $collection, $filters, true);
        }

        return $this->path($collection, $filters);
    }

    /**
     * Return the script tag for a collection.
     *
     * @param         $collection
     * @param  array $filters
     * @param  array $attributes
     * @return string
     */
    public function script($collection, array $filters = [], array $attributes = [])
    {
        $attributes['src'] = $this->path($collection, $filters);

        return '<script' . $this->html->attributes($attributes) . '></script>';
    }

    /**
     * Return the style tag for a collection.
     *
     * @param         $collection
     * @param  array $filters
     * @param  array $attributes
     * @return string
     */
    public function style($collection, array $filters = [], array $attributes = [])
    {
        $defaults = ['media' => 'all', 'type' => 'text/css', 'rel' => 'stylesheet'];

        $attributes = $attributes + $defaults;

        $attributes['href'] = $this->asset($collection, $filters);

        return '<link' . $this->html->attributes($attributes) . '>';
    }

    /**
     * Return an array of script tags.
     *
     * @param        $collection
     * @param  array $filters
     * @param  array $attributes
     * @return array
     */
    public function scripts($collection, array $filters = [], array $attributes = [])
    {
        return array_map(
            function ($path) use ($attributes) {
                $attributes['src'] = $path;

                return '<script' . $this->html->attributes($attributes) . '></script>';
            },
            $this->paths($collection, $filters)
        );
    }

    /**
     * Return an array of style tags.
     *
     * @param        $collection
     * @param  array $filters
     * @param  array $attributes
     * @return array
     */
    public function styles($collection, array $filters = [], array $attributes = [])
    {
        return array_map(
            function ($path) use ($attributes) {
                $defaults = ['media' => 'all', 'type' => 'text/css', 'rel' => 'stylesheet'];

                $attributes = $attributes + $defaults;

                $attributes['href'] = $path;

                return '<link' . $this->html->attributes($attributes) . '>';
            },
            $this->paths($collection, $filters)
        );
    }

    /**
     * Return an array of paths to an asset collection.
     *
     * This instead of combining the collection contents
     * just returns an array of individual processed
     * paths instead.
     *
     * @param        $collection
     * @param  array $additionalFilters
     * @return array
     */
    public function paths($collection, array $additionalFilters = [])
    {
        if (!isset($this->collections[$collection])) {
            return [];
        }

        return array_filter(
            array_map(
                function ($file, $filters) use ($additionalFilters) {
                    $filters = array_filter(array_unique(array_merge($filters, $additionalFilters)));

                    return $this->asset($file, $filters);
                },
                array_keys($this->collections[$collection]),
                array_values($this->collections[$collection])
            )
        );
    }

    /**
     * Return an array of style URLs.
     *
     * @param        $collection
     * @param  array $filters
     * @param  array $attributes
     * @param null $secure
     * @return array
     */
    public function urls($collection, array $filters = [], array $attributes = [], $secure = null)
    {
        return array_map(
            function ($path) use ($attributes, $secure) {
                return $this->url->to($path, $attributes, $secure);
            },
            $this->paths($collection, $filters)
        );
    }

    /**
     * Return an array of inline assets from a collection.
     *
     * Instead of combining the collection contents into a single
     * dump, returns an array of individual processed dumps instead.
     *
     * @param        $collection
     * @param  array $additionalFilters
     * @return array
     */
    public function inlines($collection, array $additionalFilters = [])
    {
        if (!isset($this->collections[$collection])) {
            return [];
        }

        return array_filter(
            array_map(
                function ($file, $filters) use ($additionalFilters) {

                    $filters = array_filter(array_unique(array_merge($filters, $additionalFilters, ['noversion'])));

                    return file_get_contents(
                        $this->paths->realPath('public::' . ltrim($this->path($file, $filters), '/\\'))
                    );
                },
                array_keys($this->collections[$collection]),
                array_values($this->collections[$collection])
            )
        );
    }

    /**
     * @param $collection
     * @param $filters
     * @return string
     */
    protected function getPath($collection, $filters)
    {
        /*
         * If the asset is remote just return it.
         */
        if (starts_with($collection, ['http', '//'])) {
            return $collection;
        }

        $path = $this->paths->outputPath($collection);

        if ($this->shouldPublish($path, $collection, $filters)) {
            $this->publish($path, $collection, $filters);
        }

        if (
            !in_array('noversion', $filters) &&
            ($this->config->get('streams::assets.version') || in_array('version', $filters))
        ) {
            $path .= '?v=' . filemtime(public_path(trim($path, '/\\')));
        }

        return $path;
    }

    /**
     * Return the collection path. This
     * is primarily used to determine paths
     * to single assets.
     *
     * @deprecated Deprecated in 1.4 - remove in 1.5+
     * @param $collection
     * @return string
     */
    public function getCollectionPath($collection)
    {
        return ($this->request->segment(1) == 'admin' ? 'admin' : 'public') . '/' . ltrim(
                str_replace(base_path(), '', $this->paths->realPath($collection)),
                '/\\'
            );
    }

    /**
     * Publish the collection of assets to the path.
     *
     * @param $path
     * @param $collection
     * @param $additionalFilters
     */
    protected function publish($path, $collection, $additionalFilters)
    {
        $path = ltrim($path, '/\\');

        if (str_contains($collection, public_path())) {
            return;
        }

        $hint    = $this->paths->hint($collection);
        $filters = $this->collectionFilters($collection, $additionalFilters);
        $assets  = $this->getAssetCollection($collection, $additionalFilters);

        $path = $this->directory . DIRECTORY_SEPARATOR . $path;

        $this->files->makeDirectory((new \SplFileInfo($path))->getPath(), 0777, true, true);

        /**
         * Process the contents with Assetic.
         */
        $contents = $assets->dump();

        /**
         * Parse the content. Always parse CSS.
         */
        if (in_array('parse', $filters) || $hint == 'css') {
            try {
                $contents = $this->template
                    ->render($contents)
                    ->render();
            } catch (\Exception $e) {

                if ($this->config->get('app.debug')) {
                    dd($e->getMessage());
                }

                \Log::error($e->getMessage());
            }
        }

        /**
         * Minify CSS separately because of the
         * issue with filter ordering in Assetic.
         */
        if (in_array('min', $filters) && $hint == 'css') {
            $contents = \CssMin::minify($contents);
        }

        /**
         * Minify JS separately because of the
         * issue with filter ordering in Assetic.
         */
        if (in_array('min', $filters) && $hint == 'js') {
            $contents = preg_replace("/\;{2,}$/", ';', \JSMin::minify($contents));
        }

        /**
         * Save the processed content.
         */
        $this->files->put(
            $path,
            $contents
        );
    }

    /**
     * Decide whether we need to publish the file
     * to the path or not.
     *
     * @param        $path
     * @param        $collection
     * @param  array $filters
     * @return bool
     */
    protected function shouldPublish($path, $collection, array $filters = [])
    {
        $path = ltrim($path, '/\\');

        if (starts_with($path, 'http')) {
            return false;
        }

        if (!$this->files->exists($path)) {
            return true;
        }

        if (in_array('force', $this->collectionFilters($collection, $filters))) {
            return true;
        }

        $debug = $this->config->get('streams::assets.live', false);

        $live = in_array('live', $this->collectionFilters($collection, $filters));

        if ($debug === true && $live) {
            return true;
        }

        if ($debug == 'public' && $live && $this->request->segment(1) !== 'admin') {
            return true;
        }

        if ($debug == 'admin' && $live && $this->request->segment(1) === 'admin') {
            return true;
        }

        /**
         * If we're busting cache and have watched
         * files that have been modified then publish.
         */
        if ($this->request->isNoCache() && array_filter(
                $filters,
                function ($filter) use ($path) {

                    if (!starts_with($filter, 'watch@')) {
                        return false;
                    }

                    return $this->lastModifiedAt(substr($filter, 6)) > filemtime($path);
                }
            )
        ) {
            return true;
        }

        // Merge filters from collection files.
        foreach ($this->collections[$collection] as $fileFilters) {
            $filters = array_filter(array_unique(array_merge($filters, $fileFilters)));
        }

        $assets = $this->getAssetCollection($collection);

        /**
         * If any of the files are more recent
         * than the cache file then publish.
         */
        if ($assets->getLastModified() > filemtime($path)) {
            return true;
        }

        return false;
    }

    /**
     * Get the last modified time.
     *
     * @return integer
     */
    public function lastModifiedAt($path)
    {
        $files = array_map(
            function (\SplFileInfo $file) {
                return $file->getMTime();
            },
            $this->files->allFiles(rtrim($this->paths->realPath($path), DIRECTORY_SEPARATOR))
        );

        arsort($files);

        return array_shift($files);
    }

    /**
     * Add a namespace path hint.
     *
     * @param  $namespace
     * @param  $path
     * @return $this
     */
    public function addPath($namespace, $path)
    {
        $this->paths->addPath($namespace, $path);

        return $this;
    }

    /**
     * Set the public base directory.
     *
     * @param  $directory
     * @return $this
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Create asset collection from collection array
     *
     * @param                  $collection
     * @param  array $additionalFilters
     * @return AssetCollection
     */
    protected function getAssetCollection($collection, $additionalFilters = [])
    {
        $assets = new AssetCollection();

        foreach ($this->collections[$collection] as $file => $filters) {

            $filters = array_filter(array_merge($filters, $additionalFilters));

            $filters = $this->filters->transform($filters);

            $asset = FileAsset::class;

            if (in_array('glob', $filters)) {
                $asset = GlobAsset::class;
            }

            $file = new $asset(
                $file, array_filter(
                    $filters,
                    function ($value) {
                        return !is_string($value);
                    }
                )
            );

            $assets->add($file);
        }

        return $assets;
    }

    /**
     * Return the filters used in a collection.
     *
     * @param        $collection
     * @param  array $filters
     * @return array
     */
    protected function collectionFilters($collection, array $filters = [])
    {
        return array_merge($filters, array_flatten($this->collections[$collection]));
    }

    /**
     * Return the if a collection has a filters.
     *
     * @param        $collection
     * @param        $filter
     * @return boolean
     */
    protected function collectionHasFilter($collection, $filter)
    {
        foreach ($this->collections[$collection] as $file => $filters) {
            if (in_array($filter, $filters)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Mark an named asset as loaded.
     *
     * @param $name
     * @param $asset
     * @return $this
     */
    public function addLoaded($name, $asset)
    {
        $this->loaded[strtolower($name)] = $asset;

        return $this;
    }

    /**
     * Remove loaded names from collections.
     *
     * @param array $names
     * @return $this
     */
    public function removeLoaded(array $names)
    {
        foreach ($names as $name) {

            if ($this->isLoaded($name)) {

                list($collection, $path) = explode('@', $this->loaded[$name]);

                unset($this->collections[$collection][$this->paths->realPath($path)]);
            }
        }

        return $this;
    }

    /**
     * Return if a named asset is loaded or not.
     *
     * @param $name
     * @return bool
     */
    public function isLoaded($name)
    {
        return isset($this->loaded[strtolower($name)]);
    }

    /**
     * Get the named and loaded assets.
     *
     * @return array
     */
    public function getLoaded()
    {
        return $this->loaded;
    }

    /**
     * Return the real path
     * for a prefixed one.
     *
     * @param $path
     * @return string
     */
    public function realPath($path)
    {
        return $this->paths->realPath($path);
    }

    /**
     * Necessary for plugin methods.
     *
     * @return string
     */
    function __toString()
    {
        return '';
    }


}
