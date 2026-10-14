<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('api/subscribe', 'Home::subscribe');
$routes->post('api/contact', 'Home::contact');
$routes->get('api/dispatch/(:segment)', 'Home::getDispatch/$1');
$routes->get('download-bio', 'Home::downloadBioPdf');
