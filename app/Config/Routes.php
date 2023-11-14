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

// Routing authorization
$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::register');
$routes->get('/penduduk-login', 'AuthController::PendudukLogin');


// routing dashboard
$routes->get('/home', 'Home::home');

$routes->get('/layout', 'Home::layout');


// routing kelola user 
$routes->get('/user', 'UserController::index');
$routes->get('/user/tambah', 'UserController::add_user');

// routing kelola surat

$routes->get('surat/editor', 'EditorController::index');


// routing kelola kecamatan
$routes->get('/kecamatan', 'KecamatanController::index');
$routes->get('/kecamatan/tambah', 'KecamatanController::add_kecamatan');


// routing kelola desa
$routes->get('/desa', 'DesaController::index');
$routes->get('/desa/tambah', 'DesaController::add_desa');


// routing  kelola penduduk 

// routing penduduk 

// Routing logout


