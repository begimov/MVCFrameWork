<?php

namespace App\Providers;

use App\Views\View;
use Twig_Environment;
use Twig_Extension_Debug;
use Twig_Loader_Filesystem;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        View::class
    ];

    public function register()
    {
        $container = $this->getContainer();

        $config = $container->get('config');

        $router = $container->get(\League\Route\RouteCollection::class);
        
        $container->share(View::class, function() use ($config, $router) {

            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../../views');

            $twig = new Twig_Environment($loader, []);

            return new View($twig);
        });

    }
}