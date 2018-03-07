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
Route::get('/panel-padrino', 'Fichas\FichaPadrinoController@panel_padrino')->middleware('auth','padrino');
Route::get('/panel-ahijado', 'Fichas\FichaAhijadoController@panel_ahijado')->middleware('auth','ahijado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/panel-secre', 'HomeController@panel_secre');
Route::get('/partida', 'Partida\PartidaController@tabla_partida');

Route::middleware(['auth', 'secretariado'])->group(function () {
    Route::get('/panel-secre', 'Secre\SecreController@panel_secre');
    // Route::post('/crear-partida', 'Partida\PartidaController@crear_partida');
});

Route::post('/crear-partida', 'Partida\PartidaController@crear_partida');
Route::post('/crear-presentacion', 'Partida\PresentacionController@crear_presentacion');
Route::get('/presentaciones-partida', 'Partida\PresentacionController@presentaciones_partida');

Route::get('lista-usuarios', 'Usuarios\UsuariosController@lista_usuarios');
