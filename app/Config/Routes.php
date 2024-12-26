<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// user

$routes->get('/', 'Home::index');
$routes->get('/home','Home::home');
$routes->get('/delivery','Home::delivery');

service('auth')->routes($routes);

// admin
$routes->group('admin', ['filter' => 'group:admin'], function($routes) {
    $routes->get('produk','AdminController::produk');
    $routes->post('produk', "AdminController::create_produk");
    $routes->get('produk/(:segment)/edit', 'AdminController::edit_produk/$1');
    $routes->post('produk/(:segment)/update', 'AdminController::update_produk/$1');
    $routes->post('hapus', 'AdminController::delete_produk');
});
