<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Login::auth');
$routes->get('/logout', 'Login::logout');
$routes->get('/booking', 'Client::book_list');
$routes->get('/vendor', 'Setting_vendor::index');
$routes->get('/dashboard', 'Dashboard::index');

//$routes->match(['get', 'post'], '/users/(:any)', 'User::index');
$routes->match(['get', 'post'], '/users/(:any)/(:any)', 'User::index/$1/$2');

//Category service
$routes->match(['get', 'post'], '/vservices/(:any)/(:any)', 'Admin::setup_category_service/$1/$2');

//Service
$routes->match(['get', 'post'], '/services/(:any)/(:any)', 'Admin::setup_service/$1/$2');

// Setting vendor
$routes->match(['get', 'post'], '/vendor', ' Setting_::index/$1/$2');

//Booking list
$routes->get('/booking', 'Client::book_list');

//Category service
$routes->match(['get', 'post'], '/vendor', ' Admin::setup_vendor/$1/$2');
















// Users 
$routes->get('/users-add', 'User::create');
// Service
$routes->get('/services', 'Service_tbl::index');
// Service
$routes->get('/vservice', 'Vendor_service_tbl::index');

// Booking Hostel 
$routes->get('/hostel', 'Booking_hostel::index');
// Setting Hostel 
$routes->get('/shostel', 'Setting_hostel::index');
// Setting Canopy 
$routes->get('/scanopy', 'Setting_canopy::index');
// Setting Hall 
$routes->get('/shall', 'Setting_hall::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
