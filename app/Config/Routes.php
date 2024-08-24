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
//rutas  front
$routes->get('/principal', 'Home::index');

$routes->get('/quienessomos', 'Home::quienes_somos');
$routes->get('/acercaDe', 'Home::acercaDe');
$routes->get('/catalogo', 'Home::catalogo');
$routes->get('/registrarse', 'Home::registrarse');
$routes->get('/login', 'Home::login');


//rutas del registro de usuarios

$routes->get('/registrarse', 'usuario_controller::create');
/*La URI enviar-form es el action del formulario registrarse.php*/
$routes->post('/enviar-form', 'usuario_controller::formValidation');

// rutas CRUD usuarios

$routes->get('/crud_usuarios', 'usuarios_crud_controller::index');
$routes->get('/actualizar/(:num)', 'usuarios_crud_controller::singleUser/$1');
$routes->post('update', 'usuarios_crud_controller::update');
$routes->get('/deletelogico/(:num)', 'usuarios_crud_controller::deletelogico/$1');

$routes->get('/add_usuario', 'usuarios_crud_controller::agregar');
$routes->post('/guardarNuevo', 'usuarios_crud_controller::guardar');



// rutas login
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');





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
