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
$routes->setDefaultController('Client');
$routes->setDefaultMethod('test_me');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(true);
$routes->set404Override(function()
{
	echo view('errors/custom_error');
});

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Layout
//$routes->get('/site', 'Client::site');
$routes->get('/logins', 'Login::index');
$routes->get('/login', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// Admin Route
$routes->get('/dashboard', 'Admin::index');
$routes->get('/dash', 'Admin::dashboard');
$routes->match(['get', 'post'], '/users/(:any)/(:any)', 'Admin::user/$1/$2');
$routes->match(['get', 'post'], '/cservice/(:any)/(:any)', 'Admin::categoryService/$1/$2');
$routes->match(['get', 'post'], '/subservice/(:any)/(:any)', 'Admin::subcategoryService/$1/$2');
$routes->match(['get', 'post'], '/services/(:any)/(:any)', 'Admin::service/$1/$2');
$routes->match(['get', 'post'], '/svendor/(:any)/(:any)', 'Admin::settingVendor/$1/$2');
$routes->match(['get', 'post'], '/vservice/(:any)/(:any)', 'Admin::vendorService/$1/$2');
$routes->match(['get', 'post'], '/vendor', 'Admin::setup_vendor/$1/$2');
$routes->match(['get', 'post'], '/payment-detail', 'Admin::payment_detail');

// Client Route
$routes->get('/booking', 'Client::book_list');
$routes->get('/approved_book', 'Client::approved_book_list');
$routes->match(['get', 'post'], '/approved-list/(:any)', 'Client::approved_list/$1');
$routes->match(['get', 'post'], '/cancel-booked/(:any)', 'Client::cancel_book/$1');
$routes->match(['get', 'post'], '/payment_confirm/(:any)', 'Client::payment_confirm/$1');
$routes->get('/cancel_list', 'Client::cancel_list');
$routes->get('/sites', 'Client::site');
$routes->get('/about', 'Client::about');
$routes->get('/contact', 'Client::contact');
$routes->get('/faq', 'Client::faq');
$routes->get('/services', 'Client::services');

// Social Gathering
$routes->get('/chairs', 'Client::site_chairs');
$routes->get('/mattress', 'Client::site_mattress');
$routes->get('/canopies', 'Client::site_canopies');
$routes->get('/tables', 'Client::site_tables');

//   Cleaning 
$routes->get('/gardening-tools', 'Client::site_gardening_tools');
$routes->get('/gardening-tools', 'Client::site_gardening_tools');

//   Music Ent




$routes->get('/products', 'SiteController::index');

$routes->match(['get', 'post'], '/savecanopies', 'Client::saveCanopies');
$routes->match(['get', 'post'], '/payment-detail', 'Admin::payment_detail');
$routes->match(['get', 'post'], '/canopy/(:any)/(:any)', 'Client::canopies/$1/$2');



// Users 
$routes->get('/users-add', 'User::create');

$routes->match(['get', 'post'], '/dynamic_dependent', 'Dynamic_dependent::vendor_service_dependant');

$routes->match(['get', 'post'], '/dynamic_dependent_cat', 'Dynamic_dependent::vendor_getcategory_dependant');

$routes->match(['get', 'post'], '/book/(:any)', 'Client::book/$1');

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