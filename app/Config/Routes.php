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

// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/perpus', 'Home::perpus');
$routes->get('/jurnal', 'Home::jurnal');
$routes->get('/detailjurnal', 'Home::d_jurnal');


$routes->get('/admin', 'C_dashboard::index');
$routes->get('/afrizal', 'C_dashboard::p_afrizal');
$routes->get('/kiwil', 'Mhs_aktif::m_aktif'); //CMIIW T_T
// $routes->get('/link', 'ControllerName::functionName');

//tian
$routes->get('/ukm', 'Ukm::index');
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
// end tian


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
