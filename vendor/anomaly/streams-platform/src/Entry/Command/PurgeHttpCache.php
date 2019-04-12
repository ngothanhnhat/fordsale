<?php namespace Anomaly\Streams\Platform\Entry\Command;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Http\HttpCache;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Illuminate\Contracts\Config\Repository;

/**
 * Class PurgeHttpCache
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class PurgeHttpCache
{

    /**
     * The entry object.
     *
     * @var EntryInterface
     */
    protected $entry;

    /**
     * Create a new PurgeHttpCache instance.
     *
     * @param EloquentModel $entry
     */
    public function __construct(EntryInterface $entry)
    {
        $this->entry = $entry;
    }

    /**
     * Handle the command.
     *
     * @param Repository $config
     */
    public function handle(Repository $config)
    {
        if (!env('INSTALLED') || PHP_SAPI == 'cli' || !$config->get('streams::httpcache.enabled')) {
            return;
        }

        /* @var HttpCache $cache */
        $cache = app(HttpCache::class);

        array_map(
            function ($route) use ($cache) {
                $cache->purge(parse_url($route, PHP_URL_PATH));
            },
            array_filter(
                [
                    $this->entry->route('view'),
                    $this->entry->route('index'),
                    $this->entry->route('preview'),
                ]
            )
        );
    }

}
