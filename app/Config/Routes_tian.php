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
$routes->setDefaultController('Ukm');
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
$routes->get('/', 'Ukm::index');
$routes->get('/pramuka', 'Ukm::pramuka');
$routes->get('/seni', 'Ukm::seni');
$routes->get('/bulutangkis', 'Ukm::bulutangkis');
$routes->get('/banjari', 'Ukm::banjari');
$routes->get('/qiroah', 'Ukm::qiroah');
$routes->get('/desain_grafis', 'Ukm::desain_grafis');
$routes->get('/etnika_nusantara', 'Ukm::etnika_nusantara');
$routes->get('/futsal', 'Ukm::futsal');
$routes->get('/kewirausahaan', 'Ukm::kewirausahaan');
$routes->get('/penalaran', 'Ukm::penalaran');
$routes->get('/pn', 'Ukm::pn');
$routes->get('/teater', 'Ukm::teater');
$routes->get('/volly', 'Ukm::volly');
$routes->get('/dashboard_mhs', 'Ukm::dashboard_mhs');

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
