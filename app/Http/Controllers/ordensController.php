<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ordens;

class ordensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordens = Ordens::all();
        //return $ordens;
        return view('ordens/listar_ordem', compact('ordens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordens/registar_ordem');
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
        $ordens = new Ordens;

        $ordens->produto = $request->produto;
        $ordens->valor_produto = $request->valor_produto;
        $ordens->quantidade_pedidos_pix = $request->quantidade_pedidos_pix;
        $ordens->quantidade_pedidos_cartao = $request->quantidade_pedidos_cartao;
        $ordens->variacao_parcela = $request->variacao_parcela;
        $ordens->genero_cliente = $request->genero_cliente;

        $ordens->save();

        return $ordens;

        return redirect('ordens/listar_ordem')->with('success', 'cliente salvo com sucesso!');
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
