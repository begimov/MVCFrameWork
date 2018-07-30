<?php

use App\Providers\{
    ConfigServiceProvider
};

$container = new League\Container\Container;

$container->delegate(
    new League\Container\ReflectionContainer
);

$container->addServiceProvider(new ConfigServiceProvider());