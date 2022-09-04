<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('BaseController',);
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');

$routes->get('/Admin/edit/(:num)', 'Admin::edit/$1');
$routes->delete('/Admin/(:num)', 'Admin::delete/$1');
$routes->get('/Admin/(:num)', 'Admin::detail/$1');

$routes->get('/Profile/edit/(:num)', 'Profile::edit/$1');
$routes->delete('/Profile/(:num)', 'Profile::delete/$1');
$routes->get('/Profile/(:num)', 'Profile::index/$1');

$routes->get('/Masyarakat/edit/(:num)', 'Masyarakat::edit/$1');
$routes->delete('/Masyarakat/(:num)', 'Masyarakat::delete/$1');
$routes->get('/Masyarakat/(:num)', 'Masyarakat::detail/$1');

$routes->get('/Masyarakat/acc/(:num)', 'Masyarakat::acc/$1');
$routes->get('/Masyarakat/reject/(:num)', 'Masyarakat::formReject/$1');
$routes->post('/Masyarakat/reject/(:num)', 'Masyarakat::reject/$1');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
