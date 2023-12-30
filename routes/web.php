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
Route::post('/salvar_boleto', 'App\Http\Controllers\boletosController@store');


//Chhargeback
Route::get('/chargebacks/registar_chargebacks', 'App\Http\Controllers\chargebacksController@create');
Route::post('/salvar_chargebak', 'App\Http\Controllers\chargebacksController@store');


//Pedidos
Route::get('/pedidos/registar_pedido', 'App\Http\Controllers\pedidosController@create');
Route::post('/salvar_pedido', 'App\Http\Controllers\pedidosController@store');


//Pix
Route::get('/pix/registar_pix', 'App\Http\Controllers\pixsController@create');
Route::post('/salvar_pix', 'App\Http\Controllers\pixsController@store');


//Tickets
Route::get('/tickets/registar_tickets', 'App\Http\Controllers\ticketsController@create');
Route::post('/salvar_ticket', 'App\Http\Controllers\ticketsController@store');


//Vendas
Route::get('/vendas/registar_venda', 'App\Http\Controllers\vendasController@create');
Route::post('/salvar_venda', 'App\Http\Controllers\vendasController@store');


Route::get('/dashboard/dashboard', 'App\Http\Controllers\dashboardsController@index');


Route::get('/', function () {
    return view('index');
});
