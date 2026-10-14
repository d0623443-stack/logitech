<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Newsletter subscription routes (dedicated pages & conversion)
$routes->get('subscribe', 'Home::subscribePage');
$routes->post('subscribe', 'Home::processSubscribe');
$routes->get('subscribed', 'Home::subscribedSuccess');

// Download Bio PDF (Anchor tag direct download)
$routes->get('download-bio-pdf', 'Home::downloadBioPdfFile');
$routes->get('download-bio', 'Home::downloadBioPdf'); // HTML / Legacy fallback

// API Endpoints
$routes->post('api/subscribe', 'Home::subscribe');
$routes->post('api/contact', 'Home::contact');
$routes->get('api/dispatch/(:segment)', 'Home::getDispatch/$1');
