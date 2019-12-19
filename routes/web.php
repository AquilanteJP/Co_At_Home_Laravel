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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PostController@index')->name('home')->middleware('auth');

Route::get('/profile', 'PostController@userPosts')->name('profile');
//No funciona todavia
Route::get('/editarPost/{id}','PostController@returnEditView')->name('editar');
Route::get('/borradoDePost/{id}','PostController@borradoDePost')->name('borradoDePost');
Route::get('/darMg/{id}/{likes}','PostController@darMg')->name('darMg');

Route::get('/test', function(){
  return Auth::user()->foto_usuario;
});

Route::post('/crearPost', 'PostController@crearPost')->name('crearPost');
