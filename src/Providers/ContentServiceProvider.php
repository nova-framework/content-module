<?php

namespace Content\Providers;

use Nova\Support\ServiceProvider;


class ContentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
	//
    }

    /**
     * Register the Content module Service Provider.
     *
     * This service provider is a convenient place to register your modules
     * services in the IoC container. If you wish, you may make additional
     * methods or service providers to keep the code more focused and granular.
     *
     * @return void
     */
    public function register()
    {
        // Register additional Service Providers.
        //$this->app->register('Content\Providers\AuthServiceProvider');
        //$this->app->register('Content\Providers\EventServiceProvider');
    }

}
