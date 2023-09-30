<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/kontak-kami', 'Home::Kontak');
$routes->get('/login', 'Login::index');