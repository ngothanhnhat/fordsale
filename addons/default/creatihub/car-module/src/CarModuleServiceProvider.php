<?php namespace Creatihub\CarModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Creatihub\CarModule\Type\Contract\TypeRepositoryInterface;
use Creatihub\CarModule\Type\TypeRepository;
use Anomaly\Streams\Platform\Model\Car\CarTypesEntryModel;
use Creatihub\CarModule\Type\TypeModel;
use Creatihub\CarModule\Car\Contract\CarRepositoryInterface;
use Creatihub\CarModule\Car\CarRepository;
use Anomaly\Streams\Platform\Model\Car\CarCarsEntryModel;
use Creatihub\CarModule\Car\CarModel;
use Creatihub\CarModule\Category\Contract\CategoryRepositoryInterface;
use Creatihub\CarModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Car\CarCategoriesEntryModel;
use Creatihub\CarModule\Category\CategoryModel;
use Illuminate\Routing\Router;

class CarModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/car/types'           => 'Creatihub\CarModule\Http\Controller\Admin\TypesController@index',
        'admin/car/types/create'    => 'Creatihub\CarModule\Http\Controller\Admin\TypesController@create',
        'admin/car/types/edit/{id}' => 'Creatihub\CarModule\Http\Controller\Admin\TypesController@edit',
        'admin/car/cars'           => 'Creatihub\CarModule\Http\Controller\Admin\CarsController@index',
        'admin/car/cars/create'    => 'Creatihub\CarModule\Http\Controller\Admin\CarsController@create',
        'admin/car/cars/edit/{id}' => 'Creatihub\CarModule\Http\Controller\Admin\CarsController@edit',
        'admin/car'           => 'Creatihub\CarModule\Http\Controller\Admin\CategoriesController@index',
        'admin/car/create'    => 'Creatihub\CarModule\Http\Controller\Admin\CategoriesController@create',
        'admin/car/edit/{id}' => 'Creatihub\CarModule\Http\Controller\Admin\CategoriesController@edit',
        'san-pham' => [
            'as' => 'creatihub.module.car::categories.index',
            'uses' => 'Creatihub\CarModule\Http\Controller\Category\IndexController@execute'
        ],
        'san-pham/{slug}' => [
            'as' => 'creatihub.module.car::type.index',
            'uses' => 'Creatihub\CarModule\Http\Controller\Type\IndexController@execute'
        ]
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Creatihub\CarModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Creatihub\CarModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Creatihub\CarModule\Event\ExampleEvent::class => [
        //    Creatihub\CarModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Creatihub\CarModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        CarTypesEntryModel::class => TypeModel::class,
        CarCarsEntryModel::class => CarModel::class,
        CarCategoriesEntryModel::class => CategoryModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TypeRepositoryInterface::class => TypeRepository::class,
        CarRepositoryInterface::class => CarRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
