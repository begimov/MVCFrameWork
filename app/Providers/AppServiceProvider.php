<?php

namespace App\Providers;

use Zend\Diactoros\Response;
use League\Route\RouteCollection;
use League\Container\ServiceProvider\AbstractServiceProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        RouteCollection::class,
        'response'
    ];

    public function register()
    {
        $container = $this->getContainer();
        
        $container->share(RouteCollection::class, function () use ($container) {
            return new RouteCollection($container);
        });

        $container->share('response', Response::class);
    }
}
