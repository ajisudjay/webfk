<?php

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
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// WEBSITE //
$routes->get('/', 'Pages::index');
$routes->get('/writable/(:any)', 'Pages::showFile');

$routes->get('/pages/(:any)', 'Pages::pages/$1');
$routes->get('/pages-dosen', 'Pages::dosen');
$routes->get('/pages-tendik', 'Pages::tendik');
$routes->get('/sdm/(:any)', 'Pages::sdm/$1');
$routes->get('/informasi', 'Pages::informasi');
$routes->get('/informasi-lengkap', 'Pages::informasi_lengkap');
$routes->get('/informasi-detail/(:any)', 'Pages::informasi_detail/$1');
$routes->get('/informasi-kategori/(:any)', 'Pages::informasi_kategori/$1');
// $routes->get('/laboratorium', 'Pages::laboratorium/$1');
$routes->get('/laboratorium-detail/(:any)', 'Pages::laboratorium_detail/$1');
$routes->get('/tentangkami/(:any)', 'Pages::tentangkami/$1');
// $routes->get('/mitra', 'Pages::mitra');
$routes->get('/mitra-lengkap', 'Pages::mitra_lengkap');
$routes->get('/menu', 'Pages::menu');

// BACKEND
$routes->get('/login', 'Pages::login');
$routes->get('/beranda', 'Pages::beranda');
$routes->get('/berita-edit/(:any)', 'Berita::editform/$1');
