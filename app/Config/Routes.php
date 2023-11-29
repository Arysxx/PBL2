<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);

// Routing authorization
$routes->group('/', function ($routes) {
    $routes->get('', 'AuthController::index');
    $routes->post('', 'AuthController::index');
    $routes->get('login', 'AuthController::login');
    $routes->get('register', 'AuthController::register');
    $routes->post('register_add', 'UserController::register');
    $routes->get('penduduk-login', 'AuthController::PendudukLogin');
    $routes->get('lupa-password', 'AuthController::LupaPassword');
    $routes->get('logout', 'AuthController::logout');
});

// Routing dashboard
$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('layout', 'Home::layout');
});

// Routing kelola user
$routes->group('user', function ($routes) {
    $routes->get('/', 'UserController::index');
    $routes->get('tambah', 'UserController::add_user');
    $routes->post('insert', 'UserController::insert');
    $routes->get('edit/(:num)', 'UserController::edit/$1');
    $routes->post('update', 'UserController::update');
    $routes->get('delete/(:num)', 'UserController::delete/$1');
});

// Routing kelola surat
$routes->group('surat', function ($routes) {
    $routes->get('editor', 'EditorController::index');
});

// Routing kelola kecamatan
$routes->group('kecamatan', function ($routes) {
    $routes->get('/', 'KecamatanController::index');
    $routes->get('tambah', 'KecamatanController::tambah_kecamatan');
    $routes->post('insert', 'KecamatanController::insert');
    $routes->get('edit/(:num)', 'KecamatanController::edit/$1');
    $routes->post('update', 'KecamatanController::update');
    $routes->get('delete/(:num)', 'KecamatanController::delete/$1');
});

// Routing kelola desa
$routes->group('desa', function ($routes) {
    $routes->get('/', 'DesaController::index');
    $routes->get('tambah', 'DesaController::add_desa');
    $routes->post('getDesa', 'AuthController::getDesa');
    $routes->post('insert', 'DesaController::insert');
    $routes->get('edit/(:num)', 'DesaController::edit/$1');
    $routes->post('update', 'DesaController::update');
    $routes->get('delete/(:num)', 'DesaController::delete/$1');
});

// Routing kelola penduduk
$routes->group('penduduk', function ($routes) {
    $routes->get('/', 'PendudukController::index');
    $routes->get('tambah', 'PendudukController::add_penduduk');
    $routes->post('insert', 'PendudukController::insert');
    $routes->get('edit/(:num)', 'PendudukController::edit/$1');
    $routes->post('update', 'PendudukController::update');
    $routes->get('delete/(:num)', 'PendudukController::delete/$1');
});

// Routing logout

// $routes->group('logout', function ($routes) {
//     $routes->get('/', 'LogoutController::index');
// });
