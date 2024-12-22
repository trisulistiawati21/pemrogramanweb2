<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->post('submit', 'Home::submit');
$routes->get('images/(:segment)', 'Home::images/$1');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('databuku', 'AdminController::databuku');
    $routes->get('datatransaksi', 'AdminController::datatransaksi');
    $routes->get('datapelanggan', 'AdminController::datapelanggan');
    $routes->post('databuku', 'AdminController::create_buku');
    $routes->get('databuku/(:segment)/edit', 'AdminController::edit_buku/$1');
    $routes->post('databuku/(:segment)/update', 'AdminController::update_buku/$1');
});
