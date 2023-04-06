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
// $routes->get('/link', 'ControllerName::functionName');




if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
