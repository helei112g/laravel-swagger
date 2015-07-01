<?php

namespace Riverslei\Swaggervel;

use Illuminate\Support\ServiceProvider;

class SwaggervelServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/swagger.php' => config_path('swagger.php'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/swagger'),
        ], 'public');


        $this->loadViewsFrom(__DIR__.'/../resources/views', 'swagger');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/swagger'),
        ]);
		
	require_once __DIR__ .'/routes.php';
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/swagger.php', 'swagger'
        );
    }
	
	/**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }

}
