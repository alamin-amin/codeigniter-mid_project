<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Deshbord::login');
$routes->get('/dashboard', 'Deshbord::deshbord');
// $routes->get('product', 'Home::pd');
$routes->get('dashboard', 'Deshbord::ab');
$routes->get('/all_Customers', 'Deshbord::all_Customers');
$routes->get('/add_Customers', 'Deshbord::add_Customers');
$routes->get('/all_Products', 'Deshbord::all_Products');

$routes->get('/add_Product', 'Deshbord::add_Product');
$routes->get('/creat_order', 'Deshbord::creat_order');




// CRUD RESTful user details Routes users 2
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');
$routes->get('user/add-user', 'UserCrud::create');