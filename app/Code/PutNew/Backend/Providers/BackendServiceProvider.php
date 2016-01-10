<?php

namespace PutNew\Backend\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = 'PutNew\Backend\Http\Controllers';

    /**
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerRouter($router);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'backend');
    }

    public function register()
    {

    }

    /**
     * @return void
     */
    public function registerRouter(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'prefix' => 'pa-admin'], function ($router) {
            require __DIR__.'/../Http/routes.php';
        });
    }
}
