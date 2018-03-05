<?php

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
    return view('home');
});

// Route::get('/home', function() {
//     return view('home');
// });return view('home');
// });

Route::get('/autocomple-usuarios', 'Usuarios\UsuariosController@autocomplete');
Route::get('/panel-padrino', 'Fichas\FichaPadrinoController@panel_padrino');
Route::get('/panel-ahijado', 'Fichas\FichaAhijadoController@panel_ahijado');
Route::get('/panel-secre', 'Secre\SecreController@panel_secre');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panel-secre', 'HomeController@panel_secre');

