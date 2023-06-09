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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'Admin', 'Admin\Home::index');
$routes->match(['get', 'post'], 'Admin/Dashboard', 'Admin\Dashboard::index');

$routes->match(['get', 'post'], 'Admin/News', 'Admin\News::index');
$routes->match(['get', 'post'], 'product-add', 'Admin\News::create');
$routes->match(['get', 'post'], 'product-store', 'Admin\News::store');


$routes->match(['get', 'post'], 'Admin/Advertisements', 'Admin\Advertisements::index');
$routes->match(['get', 'post'], 'ads-add', 'Admin\Advertisements::create');
$routes->match(['get', 'post'], 'ads-store', 'Admin\Advertisements::store');



$routes->match(['get', 'post'], 'Admin/Notification', 'Admin\Notification::index');
$routes->match(['get', 'post'], 'notify', 'Admin\Notification::notifications');
$routes->match(['get', 'post'], 'notifys', 'Admin\Notification::notificationDisable');

$routes->post('video/save', 'Video::saveVideo');
$routes->get('video/getVideo/(:num)', 'Video::getVideo/$1');

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
