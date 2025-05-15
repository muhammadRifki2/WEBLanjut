<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);
<<<<<<< HEAD

$routes->get('/faq', 'Home::faq', ['filter' => 'auth']);
$routes->get('profil', 'profil::index', ['filter' => 'auth']);
=======
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
