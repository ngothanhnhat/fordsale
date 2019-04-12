<?php namespace Anomaly\Streams\Platform\Asset\Filter;

use Anomaly\Streams\Platform\Asset\Command\LoadThemeVariables;
use Anomaly\Streams\Platform\Support\Collection;
use Assetic\Asset\AssetInterface;
use Assetic\Filter\Sass\ScssFilter;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Leafo\ScssPhp\Compiler;

class RubyScssFilter extends ScssFilter
{

    use DispatchesJobs;

    /**
     * Create a new LessFilter instance.
     */
    public function __construct()
    {
        parent::__construct(env('SASS_PATH', '/usr/bin/sass'), null);
    }

    /**
     * Filters an asset after it has been loaded.
     *
     * @param AssetInterface $asset
     */
    public function filterLoad(AssetInterface $asset)
    {
        //
    }

    /**
     * Filters an asset just before it's dumped.
     *
     * @param AssetInterface $asset
     */
    public function filterDump(AssetInterface $asset)
    {
        $this->dispatch(new LoadThemeVariables($variables = new Collection()));

        $compiler = new Compiler();

        if ($dir = $asset->getSourceDirectory()) {
            $compiler->addImportPath($dir);
        }

        $compiler->setVariables($variables->all());

        $asset->setContent($compiler->compile($asset->getContent()));
    }
}
