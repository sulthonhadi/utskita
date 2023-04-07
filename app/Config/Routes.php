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


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
<<<<<<< Updated upstream
$routes->get('/detail_jurnal','Layanan_app::djurnal');
$routes->get('/jurnal','Layanan_app::jurnal');
=======
$routes->get('/jurnal', 'jurnal::jurnal');
$routes->get('/detailjurnal/dinamika', 'jurnal::dinamika');
$routes->get('/d_dosen', 'Home::d_dosen');
>>>>>>> Stashed changes



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
