<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Deshbord::deshbord');
// $routes->get('product', 'Home::pd');
$routes->get('dashboard', 'Deshbord::deshbord');
$routes->get('/all_Customers', 'Deshbord::all_Customers');
$routes->get('/add_Customers', 'Deshbord::add_Customers');
$routes->get('/all_Products', 'Deshbord::all_Products');
$routes->get('/all_Products', 'Deshbord::all_Products');

$routes->get('/add_Product', 'Deshbord::add_Product');
// $routes->get('loginController', 'LoginController::loging');

// $routes->get('/login', 'Deshbord::login');


/*--------------login---------------------*/

$routes->get('', 'Register::index');
$routes->get('/signup', 'Register::index');
$routes->match(['get', 'post'], 'Register/store', 'Register::store');
$routes->match(['get', 'post'], 'Login/loginAuth', 'Login::loginAuth');
$routes->get('logout', 'Login::logout');
$routes->get('/', 'Login::index');
$routes->get('/dashboard', 'Home::index',['filter' => 'authGuard']);


/*---------------cetagory---------*/

$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');
$routes->get('add-user', 'UserCrud::create');


/*------------------product----------------------*/

$routes->get('products-list', 'ProductCrud::index');
$routes->get('products-form', 'ProductCrud::create');
$routes->post('submit-pform', 'ProductCrud::store');
$routes->get('product-edit/(:num)', 'ProductCrud::singleUser/$1');
$routes->post('updatep', 'ProductCrud::update');
$routes->get('deletep/(:num)', 'ProductCrud::delete/$1');
$routes->get('add_product', 'ProductCrud::create');


/*----------------------category----------------------*/

$routes->get('categorys-list', 'CategoryCrud::index');
$routes->get('categorys-form', 'CategoryCrud::create');
$routes->post('submit-cform', 'CategoryCrud::store');
$routes->get('category-edit/(:num)', 'CategoryCrud::singleUser/$1');
$routes->post('updatec', 'CategoryCrud::update');
$routes->get('deletec/(:num)', 'CategoryCrud::delete/$1');
$routes->get('add_categorys', 'CategoryCrud::create');

/*-------------------unit----------------------*/
$routes->get('units-list', 'UnitCrud::index');
$routes->get('units-form', 'UnitCrud::create');
$routes->post('submit-uform', 'UnitCrud::store');
$routes->get('unit-edit/(:num)', 'UnitCrud::singleUser/$1');
$routes->post('updateu', 'UnitCrud::update');
$routes->get('deleteu/(:num)', 'UnitCrud::delete/$1');
$routes->get('add_units', 'UnitCrud::create');

/*------------------------brand-----------------------*/
 
$routes->get('brands-list', 'BrandCrud::index');
$routes->get('brands-form', 'BrandCrud::create');
$routes->post('submit-bform', 'BrandCrud::store');
$routes->get('brand-edit/(:num)', 'BrandCrud::singleUser/$1');
$routes->post('updateb', 'BrandCrud::update');
$routes->get('deleteb/(:num)', 'BrandCrud::delete/$1');
$routes->get('add_brands', 'BrandCrud::create');

/*-----------------------------purchases-------------*/

$routes->get('purchases-list', 'PurchasesCrud::index');
$routes->get('purchases-form', 'PurchasesCrud::create');
$routes->post('submit-puform', 'PurchasesCrud::store');
$routes->get('purchases-edit/(:num)', 'PurchasesCrud::singleUser/$1');
$routes->post('updatepu', 'PurchasesCrud::update');
$routes->get('deletepu/(:num)', 'PurchasesCrud::delete/$1');
$routes->get('add_purchases', 'PurchasesCrud::create');

/*------------------sale-------------------------*/
$routes->get('sales-list', 'SalesCrud::index');
$routes->get('sales-form', 'SalesCrud::create');
$routes->post('submit-sform', 'SalesCrud::store');
$routes->get('sale-edit/(:num)', 'SalesCrud::singleUser/$1');
$routes->post('updates', 'SalesCrud::update');
$routes->get('deletes/(:num)', 'SalesCrud::delete/$1');
$routes->get('add_sales', 'SalesCrud::create');


