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



$routes->get('/', 'Home::index');


//AKADEMIK
$routes->get('/kalenderakademik', 'Akademik::page2');
$routes->get('/kalender', 'Akademik::kalender');

//ORGANISASI
$routes->get('/ukm', 'Ukm::index');

// FAKULTAS
$routes->get('/fakultas', 'Home::fakultas');


//PROFIL
$routes->get('/pegawai_staff', 'Profil::pegawai');
$routes->get('/struktur', 'Profil::struktur');
$routes->get('/visimisi', 'Profil::visi_misi');
$routes->get('/data_dosen', 'Profil::data_dosen');
$routes->get('/sejarah', 'Profil::sejarah');


//JURNAL
$routes->get('/detailjurnal/dinamika', 'Layanan_app::dinamika_jurnal');
$routes->get('/detailjurnal/eduscope', 'Layanan_app::eduscope_jurnal');
$routes->get('/detailjurnal/saintekbu', 'Layanan_app::saintekbu_jurnal');
$routes->get('/detailjurnal/newton', 'Layanan_app::newton_jurnal');
$routes->get('/detailjurnal/schoolar', 'Layanan_app::schoolar_jurnal');
$routes->get('/detailjurnal/income', 'Layanan_app::income_jurnal');
$routes->get('/detailjurnal/jumat_keagamaan', 'Layanan_app::keagamaan_jurnal');
$routes->get('/detailjurnal/jumat_ekonomi', 'Layanan_app::ekonomi_jurnal');
$routes->get('/detailjurnal/jumat_pertanian', 'Layanan_app::pertanian_jurnal');
$routes->get('/detailjurnal/jumat_pendidikan', 'Layanan_app::pendidikan_jurnal');
$routes->get('/detailjurnal/multidicipline', 'Layanan_app::multidicipline_jurnal');
$routes->get('/jurnal', 'Layanan_app::jurnal');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
