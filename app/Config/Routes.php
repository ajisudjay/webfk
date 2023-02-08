<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// WEBSITE //
$routes->get('/', 'Home::index');
$routes->get('/prodi/(:any)', 'ProgramStudi::detail/$1');
$routes->get('/informasi', 'Informasi::index');
$routes->get('/informasi-detail/(:any)', 'Informasi::detail/$1');
$routes->get('/laboratorium', 'Laboratorium::index/$1');
$routes->get('/laboratorium-detail/(:any)', 'Laboratorium::detail/$1');
$routes->get('/profil/(:any)', 'Profil::detail/$1');
$routes->get('/profil-sdm/(:any)', 'Profil::sdm/$1');
$routes->get('/mitra', 'Mitra::index');
$routes->get('/mitra-detail/(:any)', 'Mitra::detail/$1');
$routes->get('/menu', 'Menu::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
