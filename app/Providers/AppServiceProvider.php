<?php

namespace App\Providers;

use League\Route\RouteCollection;
use League\Container\ServiceProvider\AbstractServiceProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        RouteCollection::class
    ];

    public function register()
    {
        $container = $this->getContainer();
        
        $container->share(RouteCollection::class, function () use ($container) {
            return new RouteCollection($container);
        });
    }
}
