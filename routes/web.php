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
    return view('welcome');
})->name('welcome');

Auth::routes();

//Rutas Usuario
Route::get('/home','PostController@index')->name('home')->middleware('auth');
Route::get('/profile', 'PostController@userPosts')->name('profile')->middleware('auth');

//Rutas Post
Route::post('/crearPost', 'PostController@crearPost')->name('crearPost')->middleware('auth');
Route::get('/editarPost{id}','PostController@returnEditView')->name('editar')->middleware('auth');
Route::post('/actualizarPost','PostController@actualizarPost')->name('actualizarPost')->middleware('auth');
Route::get('/borradoDePost/{id}','PostController@borradoDePost')->name('borradoDePost')->middleware('auth');
Route::get('/darMg/{id}','PostController@darMg')->name('darMg')->middleware('auth');

//Ruta Amigos
Route::get('/friends','AmigoController@mostrarAmigos')->name('friends')->middleware('auth');


//Ruta Prueba
Route::get('/test', 'PostController@test')->name('test');
