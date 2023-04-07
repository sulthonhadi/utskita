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

// FASILITAS 
$routes->get('/perpus', 'Fasilitas::perpus');


// LAYANAN APLIKASI 
$routes->get('/f_alumni', 'C_alumni::f_alumni');
$routes->get('/alumni', 'C_alumni::index');

$routes->get('/koperasi', 'Koperasi::index');
$routes->get('/mahasiswa_aktif', 'Mhs::m_aktif');

$routes->get('/', 'Home::index');
$routes->get('/jurnal', 'jurnal::jurnal');
$routes->get('/detailjurnal', 'jurnal::d_jurnal');
$routes->get('/d_dosen', 'Home::d_dosen');


$routes->get('/admin', 'C_dashboard::index');
$routes->get('/afrizal', 'C_dashboard::p_afrizal');
$routes->get('/kiwil', 'Mhs_aktif::m_aktif');
$routes->get('/brgkoperasi', 'ControllerKoperasi::index');
//CMIIW T_T
// $routes->get('/link', 'ControllerName::functionName');

//tian
$routes->get('/ukm', 'Ukm::index');

// end tian


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
