<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
// routes HOME PAGE
$routes->get('/home', 'Home::home');
$routes->get('/about', 'Home::about');
// Router USERs
$routes->get('/user/consulta','User::consulta');
$routes->get('/user/graficas','User::graficas');
$routes->get('/user','User::index');

// login register
$routes->get('/login', 'User::login');
$routes->post('/login', 'User::login');
$routes->get('/register', 'User::register');

// Routes Admin
$routes->get('/admin/consulta','Admin::index');
$routes->get('/admin/graficas','Admin::graficas');
$routes->get('/admin/usuarios','Admin::usuarios');



// consulta nacimientos Admin
$routes->get('/admin/nacimiento/provincia','Admin::provincia_nac');
$routes->post('/admin/nacimiento/provincia','Admin::provincia_nac');

$routes->get('/admin/nacimiento/estado','Admin::estado_nac');
$routes->post('/admin/nacimiento/estado','Admin::estado_nac');

$routes->get('/admin/nacimiento/educacion','Admin::educacion_nac');
$routes->post('/admin/nacimiento/educacion','Admin::educacion_nac');

$routes->get('/admin/nacimiento/ocurrencia','Admin::ocurrencia_nac');
$routes->post('/admin/nacimiento/ocurrencia','Admin::ocurrencia_nac');

$routes->get('/admin/nacimiento/asistencia','Admin::asistencia_nac');
$routes->post('/admin/nacimiento/asistencia','Admin::asistencia_nac');

$routes->get('/admin/nacimiento/producto','Admin::producto_nac');
$routes->post('/admin/nacimiento/producto','Admin::producto_nac');


//consulta defunciones Admin
$routes->get('/admin/defuncion/provincia','Admin::provincia_def');
$routes->post('/admin/defuncion/provincia','Admin::provincia_def');

$routes->get('/admin/defuncion/estado','Admin::estado_def');
$routes->post('/admin/defuncion/estado','Admin::estado_def');

$routes->get('/admin/defuncion/educacion','Admin::educacion_def');
$routes->post('/admin/defuncion/educacion','Admin::educacion_def');


$routes->get('/admin/defuncion/ocurrencia','Admin::ocurrencia_def');
$routes->post('/admin/defuncion/ocurrencia','Admin::ocurrencia_def');

$routes->get('/admin/defuncion/causa','Admin::causa_def');
$routes->post('/admin/defuncion/causa','Admin::causa_def');

$routes->get('/admin/defuncion/semana','Admin::semana_def');
$routes->post('/admin/defuncion/semana','Admin::semana_def');





// consulta nacimientos Usuarios
$routes->get('/user/nacimiento/provincia','User::provincia_nac');
$routes->post('/user/nacimiento/provincia','User::provincia_nac');

$routes->get('/user/nacimiento/estado','User::estado_nac');
$routes->post('/user/nacimiento/estado','User::estado_nac');

$routes->get('/user/nacimiento/educacion','User::educacion_nac');
$routes->post('/user/nacimiento/educacion','User::educacion_nac');

$routes->get('/user/nacimiento/ocurrencia','User::ocurrencia_nac');
$routes->post('/user/nacimiento/ocurrencia','User::ocurrencia_nac');

$routes->get('/user/nacimiento/asistencia','User::asistencia_nac');
$routes->post('/user/nacimiento/asistencia','User::asistencia_nac');

$routes->get('/user/nacimiento/producto','User::producto_nac');
$routes->post('/user/nacimiento/producto','User::producto_nac');


//consulta defunciones Usuarios
$routes->get('/user/defuncion/provincia','User::provincia_def');
$routes->post('/user/defuncion/provincia','User::provincia_def');

$routes->get('/user/defuncion/estado','User::estado_def');
$routes->post('/user/defuncion/estado','User::estado_def');

$routes->get('/user/defuncion/educacion','User::educacion_def');
$routes->post('/user/defuncion/educacion','User::educacion_def');


$routes->get('/user/defuncion/ocurrencia','User::ocurrencia_def');
$routes->post('/user/defuncion/ocurrencia','User::ocurrencia_def');

$routes->get('/user/defuncion/causa','User::causa_def');
$routes->post('/user/defuncion/causa','User::causa_def');

$routes->get('/user/defuncion/semana','User::semana_def');
$routes->post('/user/defuncion/semana','User::semana_def');








/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
