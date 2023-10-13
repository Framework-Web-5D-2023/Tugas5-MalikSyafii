<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/pertemuan', 'Home::pertemuan');
$routes->put('/about', 'About::index');
$routes->get('/about/(:num)/(:any)', 'About::create/$1/$2');
