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


$routes->post('auth', 'UserController::auth');

$routes->presenter('user', ['controller' => 'UserController']);

$routes->get('/', 'Home::index');

$routes->get('hakkimizda', 'InformationController::about');
$routes->get('sss', 'InformationController::sss');
$routes->get('iletisim', 'InformationController::contact');

$routes->get('iptal-ve-iade', 'InformationController::cancellationPolicy');
$routes->get('kargo-ve-teslimat', 'InformationController::shipingPolicy');
$routes->get('gizlilik-ve-kvkk', 'InformationController::kvkkPolicy');
$routes->get('siparis-takip', 'InformationController::orderPolicy');

$routes->match(['get', 'post'], 'kayit-ol', 'UserController::Register');
$routes->match(['get', 'post'], 'uye-giris', 'UserController::Auth');
$routes->match(['get', 'post'], 'logout', 'UserController::logout');

$routes->match(['get', 'post'], 'sepet', 'CartController::Cart');
$routes->match(['get', 'post'], 'odeme', 'CheckoutController::Checkout');

$routes->group('api', function ($routes) {

    $routes->get('/', 'ApiController::index');
    $routes->presenter('product', ['controller' => 'Api\ProductResource']);
});

$routes->get('(:segment)/(:any)/(:any)', 'CategoryController::list/$1/$2/$3');
$routes->get('(:segment)/(:any)', 'CategoryController::list/$1/$2');
$routes->get('(:any)','ProductController::detail/$1');



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
