<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Deshbord::deshbord');
// $routes->get('product', 'Home::pd');
$routes->get('dashboard', 'Deshbord::ab');
$routes->get('/all_Customers', 'Deshbord::all_Customers');
$routes->get('/add_Customers', 'Deshbord::add_Customers');
$routes->get('/all_Products', 'Deshbord::all_Products');

$routes->get('/add_Product', 'Deshbord::add_Product');
$routes->get('/creat_order', 'Deshbord::creat_order');

$routes->get('/login', 'Deshbord::login');


