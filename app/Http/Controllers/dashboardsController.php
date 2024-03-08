<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Boletos;
use App\Models\Chargebacks;
use App\Models\Pedidos;
use App\Models\Pixs;
use App\Models\Tickets;
use App\Models\Transacoes;
use App\Models\Vendas;
use App\Models\User;


class dashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletos = Boletos::count();
        $chargebacks = Chargebacks::count();
        $pedidos = Pedidos::count();
        $pixs = Pixs::count();
        $tickets = Tickets::count();
        $vendas = Vendas::count();
        $usuarios = User::selectRaw('LEFT(name, 1) as primeiro_caractere')->first();

        $total_vendas = Transacoes::sum('valor_produto');

        // Somar os valores do PIX
        $vendas_pix = Transacoes::where('forma_pagamento', 'PIX')->sum('valor_produto');
        $porcentagem_PIX = ($vendas_pix / $total_vendas) * 100;

        // Converter para inteiro
        $porcentagem_PIX_inteiro = intval($porcentagem_PIX);

        // Somar os valores do Cartao
        $vendas_cartao = Transacoes::where('forma_pagamento', 'Cartão')->sum('valor_produto');
        $porcentagem_cartao = ($vendas_cartao / $total_vendas) * 100;

        // Converter para inteiro
        $porcentagem_cartao_inteiro = intval($porcentagem_cartao);

        // Somar os valores do CBoleto
        $vendas_boletos = Transacoes::where('forma_pagamento', 'Boleto')->sum('valor_produto');
        $porcentagem_boleto = ($vendas_boletos / $total_vendas) * 100;

        // Converter para inteiro
$porcentagem_boleto_inteiro = intval($porcentagem_boleto);


        // Somar os valores do PIX
        $vendas_pagas = Transacoes::where('status', 'Pago')->sum('valor_produto');


        return view('dashboard/dashboard', compact(
            'boletos', 'chargebacks', 'pedidos', 'pixs', 'tickets', 'vendas', 'usuarios',
            'vendas_pix', 'total_vendas', 'porcentagem_PIX_inteiro', 'vendas_cartao',
            'porcentagem_cartao_inteiro',
            'vendas_boletos','porcentagem_boleto_inteiro',
            'vendas_pagas'
        ));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
