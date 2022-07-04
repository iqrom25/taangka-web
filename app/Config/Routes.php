<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->delete('/admin/delete/slideshow/(:num)', 'admin::hapusGaleri/$1');
$routes->get('/admin/hapusGaleri/(:any)', 'Error::index');
$routes->delete('/admin/delete/paket/(:num)', 'admin::hapusPaket/$1');
$routes->get('/admin/hapusPaket/(:any)', 'Error::index');
$routes->delete('/admin/delete/pelayanan/(:num)', 'admin::hapusPelayanan/$1');
$routes->get('/admin/hapusPelayanan/(:any)', 'Error::index');
$routes->delete('/admin/delete/portofolio/(:num)', 'admin::hapusPortofolio/$1');
$routes->get('/admin/hapusPortofolio/(:any)', 'Error::index');
$routes->delete('/admin/delete/kategori/(:num)', 'admin::hapusKategori/$1');
$routes->get('/admin/hapusKategori/(:any)', 'Error::index');
$routes->delete('/admin/delete/tim/(:num)', 'admin::hapusTim/$1');
$routes->get('/admin/hapusTim/(:any)', 'Error::index');
$routes->delete('/admin/delete/testimoni/(:num)', 'admin::hapusTestimoni/$1');
$routes->get('/admin/hapusTestimoni/(:any)', 'Error::index');
$routes->delete('/admin/delete/artikel/(:num)', 'admin::hapusArtikel/$1');
$routes->get('/admin/hapusArtikel/(:any)', 'Error::index');
$routes->delete('/admin/delete/administrator/(:num)', 'admin::hapusAdministrator/$1');
$routes->get('/admin/hapusAdministrator/(:any)', 'Error::index');
/**
 * --------------------- -----------------------------------------------
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
