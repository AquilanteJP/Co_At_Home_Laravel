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
Route::get('/home','PostController@index')->name('home');

Route::get('/profile', 'PostController@userPosts')->name('profile');
//No funciona todavia
Route::post('borradoDePost','PostController@borradoDePost')->name('borradoDePost');

Route::get('/test', function(){
  return Auth::user()->foto_usuario;
});
//Route::get('/','AdministrarPeliculasController@index')->name('administrarPelicula')->middleware('admin');
