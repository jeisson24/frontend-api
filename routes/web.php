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
use app\Document;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apiv.1/document/create/{name}',function($name){
    return 'hola mundo'.$name;
});
/*Route::get ('/apiv.1/document/create/{type}/{id}',; */

//esta ruta crea el documento
Route::get('apiv.1/document/create/{type}/{id}','DocumentController@storeapi');

//esta ruta consulta los documentos del usuario
Route::get('apiv.1/document/find/{id}','DocumentController@listarapi');


//esta ruta borra el documento del id solicitado
Route::get('apiv.1/document/delete/{id}','DocumentController@destroyapi');

//esta ruta actualiza el documento
Route::get('apiv.1/document/update/{type}/{id}','DocumentController@updateapi');

//ruta mostrar usuario por id
Route::get('apiv.1/user/find/{id}','UserController@listarapi');

//crear en esta ruta el usuario
Route::get('apiv.1/user/create/{name}/{lastName}/{email}/{state}/{pass}','UserController@crearapi');

//esta ruta borra el usuario del id solicitado
Route::get('apiv.1/user/delete/{id}','UserController@destroyapi');

//esta es la ruta que actualiza usuarios
Route::get('apiv.1/user/update/{id}/{name}/{lastName}/{email}/{state}/{pass}','UserController@updateapi');