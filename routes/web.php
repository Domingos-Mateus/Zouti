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

Route::get('/logout', 'App\Http\Controllers\appController@logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



//Boletos
Route::get('/boletos/listar_boletos', 'App\Http\Controllers\boletosController@index')->middleware('auth');
Route::get('/boletos/registar_boleto', 'App\Http\Controllers\boletosController@create')->middleware('auth');
Route::post('/salvar_boleto', 'App\Http\Controllers\boletosController@store')->middleware('auth');


//Chhargeback
Route::get('/chargebacks/listar_chargebacks', 'App\Http\Controllers\chargebacksController@index')->middleware('auth');
Route::get('/chargebacks/registar_chargebacks', 'App\Http\Controllers\chargebacksController@create')->middleware('auth');
Route::post('/salvar_chargebak', 'App\Http\Controllers\chargebacksController@store')->middleware('auth');


//Pedidos
Route::get('/pedidos/listar_pedido', 'App\Http\Controllers\pedidosController@index')->middleware('auth');
Route::get('/pedidos/registar_pedido', 'App\Http\Controllers\pedidosController@create')->middleware('auth');
Route::post('/salvar_pedido', 'App\Http\Controllers\pedidosController@store')->middleware('auth');


//Pix
Route::get('/pix/listar_pix', 'App\Http\Controllers\pixsController@index')->middleware('auth');
Route::get('/pix/registar_pix', 'App\Http\Controllers\pixsController@create')->middleware('auth');
Route::post('/salvar_pix', 'App\Http\Controllers\pixsController@store')->middleware('auth');


//Tickets
Route::get('/tickets/listar_tickets', 'App\Http\Controllers\ticketsController@index')->middleware('auth');
Route::get('/tickets/registar_tickets', 'App\Http\Controllers\ticketsController@create')->middleware('auth');
Route::post('/salvar_ticket', 'App\Http\Controllers\ticketsController@store')->middleware('auth');


//Vendas
Route::get('/vendas/listar_venda', 'App\Http\Controllers\vendasController@index')->middleware('auth');
Route::get('/vendas/registar_venda', 'App\Http\Controllers\vendasController@create')->middleware('auth');
Route::post('/salvar_venda', 'App\Http\Controllers\vendasController@store')->middleware('auth');


//Cliente
Route::get('/clientes/listar_clientes', 'App\Http\Controllers\clientesController@index')->middleware('auth');
Route::get('/clientes/registar_cliente', 'App\Http\Controllers\clientesController@create')->middleware('auth');
Route::post('/salvar_cliente', 'App\Http\Controllers\clientesController@store')->middleware('auth');


//Produtos
Route::get('/produtos/listar_produtos', 'App\Http\Controllers\produtoController@index')->middleware('auth');
Route::get('/produtos/registar_produto', 'App\Http\Controllers\produtoController@create')->middleware('auth');
Route::post('/salvar_produto', 'App\Http\Controllers\produtoController@store')->middleware('auth');

//Ordem
Route::get('/ordens/listar_ordem', 'App\Http\Controllers\ordensController@index')->middleware('auth');
Route::get('/ordens/registar_ordem', 'App\Http\Controllers\ordensController@create')->middleware('auth');
Route::post('/salvar_ordem', 'App\Http\Controllers\ordensController@store')->middleware('auth');


//Transações
Route::get('/dashboard/transacoes', 'App\Http\Controllers\transacoesController@create')->middleware('auth');
Route::get('/transacoes/registar_transacao', 'App\Http\Controllers\transacoesController@create')->middleware('auth');
Route::post('/salvar_transacao', 'App\Http\Controllers\transacoesController@store')->middleware('auth');
Route::get('/dashboard/transacoes', 'App\Http\Controllers\transacoesController@index')->middleware('auth');
Route::post('/dashboard/filtrar_transacao', 'App\Http\Controllers\transacoesController@filtrar_transacao')->middleware('auth');

//taxas
Route::get('/dashboard/taxas', 'App\Http\Controllers\taxaController@create')->middleware('auth');


//Rota Para Dashboard
Route::get('/dashboard/dashboard', 'App\Http\Controllers\dashboardsController@index')->middleware('auth');

/*
Route::get('/', function () {
    return view('index');
});
*/
