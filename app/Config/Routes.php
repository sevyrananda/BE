<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('mahasiswa', ['controller' => 'MahasiswaController']);

$routes->get('user', 'UserController::index', ['filter' => 'cors']);
$routes->post('user', 'UserController::create', ['filter' => 'cors']);
// Tambahkan rute lain di sini
// $routes->match(['post', 'options', 'api/login', 'UserController::create']);
// $routes->match(['post', 'options', 'api/mahasiswa', 'MahasiswaController::create']);

$routes->get('user', 'UserController::index', ['filter' => 'cors']);
$routes->match(['post', 'options'], 'user', 'UserController::create', ['filter' => 'cors']);

$routes->get('mahasiswa', 'MahasiswaController::index', ['filter' => 'cors']);
$routes->match(['post', 'options'], 'mahasiswa', 'MahasiswaController::create', ['filter' => 'cors']);


