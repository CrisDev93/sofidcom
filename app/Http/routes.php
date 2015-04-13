<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('chat','ProyectosController@crearChat');
Route::get('chatvista','ProyectosController@viewChat');
Route::get('personas', 'PerfilBController@ListarPersonas');

<<<<<<< HEAD
=======
Route::get('perfil', 'PerfilBController@VerPerfil');
Route::post('perfil/editando', 'PerfilBController@EditarPerfil');
Route::get('publicaciones', 'PublicacionBController@index');
Route::get('publicacion/create', 'PublicacionBController@create');
Route::post('publicacion', 'PublicacionBController@store');
Route::get('publicaciones/{id}', 'PublicacionBController@show');
Route::post('comentario', 'PublicacionBController@storeC');


>>>>>>> 3e5653f02ab2808e87dc1b1e2ddc95d86bd013dc
