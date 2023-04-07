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
$routes->get('/fakultas','Home::fakultas');
$routes->get('/ukm', 'Ukm::index');







//PROFIL
$routes->get('/pegawai_staff', 'Profil::pegawai');
$routes->get('/struktur', 'Profil::struktur');
$routes->get('/visimisi', 'Profil::visi_misi');
$routes->get('/data_dosen', 'Profil::data_dosen');
$routes->get('/sejarah', 'Profil::sejarah');


//JURNAL
$routes->get('/detailjurnal/dinamika', 'Layanan_app::djurnal');
$routes->get('/jurnal', 'Layanan_app::jurnal');



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
