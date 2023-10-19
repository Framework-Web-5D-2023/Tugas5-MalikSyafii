<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about/(:num)/(:any)', 'About::create/$1/$2');

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login/signin', 'Login::signin');
