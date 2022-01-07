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
$routes->setDefaultController('Home');
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
$routes->add('/', 'Home::index');
$routes->post('/daftar', 'Home::daftar');

$routes->group('admin',function($routes){
    $routes->add('login','Account::login/admin',['as'=>'login','filter'=>'auth']);
    $routes->get('logout','Account::logout/admin',['as'=>'logout']);
    $routes->get('/', 'Administrator::index',['as'=>'admin','filter'=>'auth']);
    $routes->add('peserta/(:segment)', 'Administrator::peserta/$1',['filter'=>'auth']);
    $routes->add('peserta/detail/(:num)', 'Administrator::detail_peserta/$1',['filter'=>'auth']);
    $routes->addRedirect('peserta','admin/peserta/terdaftar');
});

$routes->group('peserta',function($routes){
    $routes->get('/','Pendaftar::index',['as'=>'dashboard_peserta','filter'=>'authpeserta']);
    $routes->get('data_pendaftaran','Pendaftar::data_pendaftaran',['as'=>'data_pendaftaran','filter'=>'authpeserta']);
    $routes->get('konfirmasi_pembayaran','Pendaftar::konfirmasi_pendaftaran',['as'=>'data_pendaftaran','filter'=>'authpeserta']);
    $routes->add('login','Account::login/peserta',['as'=>'login_peserta','filter'=>'authpeserta']);
    $routes->get('logout','Account::logout/peserta',['as'=>'logout_peserta']);
});
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
