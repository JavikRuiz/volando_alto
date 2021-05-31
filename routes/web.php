<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/app');
});
Route::group(['prefix'=>'app'],function(){
    Route::resource('/','AppController');
    Route::resource('empleado', 'EmpleadoController');
    Route::resource('avion', 'AvionController');
    Route::resource('destino', 'LugarController');
    Route::resource('vuelo', 'VueloController');
    Route::resource('cliente','PasajeroController');
    Route::resource('reservacion','ReservacionController');
});
