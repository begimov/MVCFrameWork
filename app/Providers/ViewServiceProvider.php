<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        //
    ];
    
    public function register()
    {
        $container = $this->getContainer();

        $config = $container->get('config');

        $router = $container->get(\League\Route\RouteCollection::class);
        
        //
    }
}