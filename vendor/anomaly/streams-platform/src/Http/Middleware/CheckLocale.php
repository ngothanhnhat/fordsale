<?php namespace Anomaly\Streams\Platform\Http\Middleware;

use Closure;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;

/**
 * Class CheckLocale
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class CheckLocale
{

    /**
     * The config config.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Create a new CheckLocale instance.
     *
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Look for locale=LOCALE in the query string.
     *
     * @param  Request  $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        /**
         * If there is no defined locale
         * from the kernel then we've
         * absolutely nothing to do.
         */
        if (!defined('LOCALE')) {
            return $next($request);
        }

        /**
         * Check and see if the locale
         * that's defined from the kernel
         * is present in our enabled locales.
         */
        if (!in_array(strtolower(LOCALE), $this->config->get('streams::locales.enabled'))) {
            abort(404);
        }

        return $next($request);
    }
}
