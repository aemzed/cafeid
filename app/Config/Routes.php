<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/index', 'Home::index_new');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');