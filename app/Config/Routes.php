<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home'); // Ganti 'Home' dengan controller default Anda
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
// $routes->set404Override('CustomController::show404');
$routes->get('/', 'Home::index');


// routing dashboard
$routes->get('/home', 'Home::home');


// Routing authorization
$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::register');
$routes->get('/penduduk-login', 'AuthController::PendudukLogin');



$routes->get('/layout', 'Home::layout');
$routes->get('/editor', 'EditorController::index');


// Routing logout
