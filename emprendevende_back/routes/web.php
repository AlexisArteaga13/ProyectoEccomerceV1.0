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

Route::get('/', function () {
   /* Alert::success('Success Title', 'Success Message');
;*/
    return view('modulostienda.inicio');
});

Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home');
// Rutas para crear usuarios
Route::post('/modulostienda/inicio','UsuariosController@crear_user_vendedor')->name('crearvendedor');

