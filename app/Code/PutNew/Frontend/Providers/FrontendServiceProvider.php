<?php

namespace PutNew\Frontend\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = 'PutNew\Frontend\Http\Controllers';

    /**
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerRouter($router);
        $this->loadViewsFrom(__DIR__.'/../resources/views/template', 'frontend');
    }

    public function register()
    {

    }

    /**
     * @return void
     */
    public function registerRouter(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'prefix' => ''], function ($router) {
            require __DIR__.'/../Http/routes.php';
        });
    }
}
