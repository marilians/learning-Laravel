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
});

/* equivalente a la anterior
Route::view('vista', 'welcome');

Route::get('prueba', function () {
    return 'Hello Project Routes';
});*/

// con Route::resource se crean las 7 rutas posibles de un CRUD
// luego genero el controlador con sus 7 funciones
// php artisan make:controller PageController --resource
// ó 
// php artisan make:controller PageController --resource --model=page 
// se crea el controlador con sus 7 funciones (rutas) y el modelo
Route::resource('Pages', 'PageController');  // valido con php artisan route:list