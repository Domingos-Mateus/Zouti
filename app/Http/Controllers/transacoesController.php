<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\Transacoes;
use DB;

class transacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Clientes::all();
        $contar = Transacoes::count();

        $transacoes = DB::table('transacoes')
            ->join('clientes', 'transacoes.cliente_id', '=', 'clientes.id')
            ->join('produtos', 'transacoes.produto_id', '=', 'produtos.id')
            ->select('transacoes.*', 'clientes.nome as nome_cliente','clientes.email','clientes.abreviacao', 'produtos.nome_produto','produtos.preco')
            ->get();

        return view('dashboard/transacoes', compact('clientes','transacoes','contar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = Clientes::all();
        $produtos = Produtos::all();


        return view('transacoes/registar_transacao',compact('clientes','produtos'));
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
        $transacoes = new Transacoes;
        $transacoes->cliente_id = $request->cliente_id;
        $transacoes->forma_pagamento = $request->forma_pagamento;
        $transacoes->status = $request->status;
        $transacoes->produto_id = $request->produto_id;
        $transacoes->data_pagamento = $request->data_pagamento;

        $transacoes->save();

        return redirect('dashboard/transacoes')->with('success', 'cliente salvo com sucesso!');
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
