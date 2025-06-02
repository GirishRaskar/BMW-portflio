<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home\Home::index');

$routes->get('prices', 'Prices\pricesController::index');

$routes->get('features', 'Features\featuresController::index');

$routes->get('about', 'About\aboutController::index');

