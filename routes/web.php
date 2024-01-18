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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



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


//Cliente
Route::get('/clientes/registar_cliente', 'App\Http\Controllers\clientesController@create');
Route::post('/salvar_cliente', 'App\Http\Controllers\clientesController@store');

//Ordem
Route::get('/ordens/registar_ordem', 'App\Http\Controllers\ordensController@create');
Route::post('/salvar_ordem', 'App\Http\Controllers\ordensController@store');


//Transações
Route::get('/dashboard/transacoes', 'App\Http\Controllers\transacoesController@create');
Route::get('/dashboard/transacoes', 'App\Http\Controllers\transacoesController@index');

//taxas
Route::get('/dashboard/taxas', 'App\Http\Controllers\taxaController@create');


//Rota Para Dashboard
Route::get('/dashboard/dashboard', 'App\Http\Controllers\dashboardsController@index');

/*
Route::get('/', function () {
    return view('index');
});
*/
