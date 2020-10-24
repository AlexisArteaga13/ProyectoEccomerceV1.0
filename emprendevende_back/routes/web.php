<?php
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rutas para autenticacion
Auth::routes(['verify' => true]);

// Rutas para autenticar con facebook
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
/* ***************Fin de rutas autenticar de facebook*** */ 

Route::get('/', function () {
   /* Alert::success('Success Title', 'Success Message');
;*/
    return view('modulostienda.inicio');
   //return view('vistasadmin/indexadmin');
})->name('inicio');

// E-mail verification
Route::get('/register/verify/{code}', 'CorreosController@verify');


Route::get('/home', 'HomeController@index')->name('home');
// Rutas para crear usuarios
Route::post('/modulostienda/inicio','UsuariosController@crear_user_vendedor')->name('crearvendedor');

//Rutas para administrable
Route::get('/login/administrable','HomeController@indexadmin')->name('administrable')->middleware('role:["administrador"],["vendedor"]');

//*******ruta de rubros****************//
Route::get('/login/rubros','RubrosController@index')->name('rubros.index');
Route::post('/login/rubros/store','RubrosController@store')->name('rubros.store');
Route::post('/login/rubros/update','RubrosController@update')->name('rubros.update');
Route::delete('/login/rubros/delete/{id}','RubrosController@destroy')->name('rubros.delete');

//ruta de categorias
Route::get('/login/categorias','CategoriasController@index')->name('categorias.index');
Route::post('/login/categorias/store','CategoriasController@store')->name('categorias.store');
Route::post('/login/categorias/update','CategoriasController@update')->name('categorias.update');
Route::delete('/login/categorias/delete/{id}','CategoriasController@destroy')->name('categorias.delete');

//ruta de empresas
Route::get('/login/empresas','EmpresasController@index')->name('empresas.index');
Route::post('/login/empresas/update','EmpresasController@update')->name('empresas.update');
Route::delete('/login/empresas/delete/{id}','EmpresasController@destroy')->name('empresas.delete');

//ruta de planes
Route::get('/login/planes','PlanesController@index')->name('planes.index');
Route::post('/login/planes/store','PlanesController@store')->name('planes.store');
Route::post('/login/planes/update','PlanesController@update')->name('planes.update');
Route::delete('/login/planes/delete/{id}','PlanesController@destroy')->name('planes.delete');

