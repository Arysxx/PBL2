<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// routing dashboard
$routes->get('/home', 'Home::home');


// Routing authorization
$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::register');