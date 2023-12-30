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

//Boletos
Route::get('/boletos/registar_boleto', 'App\Http\Controllers\boletosController@create');
Route::post('/salvar_boleto', 'App\Http\Controllers\boletosController@create');


Route::get('/', function () {
    return view('index');
});
