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

Route::get('/', 'TestController@welcome');

Route::get('/prueba', function () {
    return 'Hola soy una ruta de prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //listado

    Route::get('/products/create', 'ProductController@create'); //formulario de registro
    Route::post('/products', 'ProductController@store'); //registrar en la bd new

    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario de edición
    Route::post('/products/{id}/edit', 'ProductController@update'); //registrar en la bd edit

    Route::post('/products/{id}/delete', 'ProductController@destroy'); //eliminación en la bd

    Route::get('/products/{id}/images', 'ImageController@index'); //formulario listado
    Route::post('/products/{id}/images', 'ImageController@store'); //registrar en la bd
    Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminación en la bd
});


