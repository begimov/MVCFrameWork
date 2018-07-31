<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

require_once 'container.php';

$route = $container->get(League\Route\RouteCollection::class);

require_once __DIR__ . '/../routes/web.php';