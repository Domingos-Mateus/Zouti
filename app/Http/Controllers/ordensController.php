<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

use App\Models\Ordens;
use App\Models\Produtos;
use App\Models\Transacoes;

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



    public function store(Request $request)
    {
        // Criação de uma nova ordem
        $ordens = new Ordens;

        $ordens->nome_produto = $request->nome_produto;
        $ordens->valor_produto = $request->valor_produto;
        $ordens->total_pedidos = $request->quantidade_pedidos_pix + $request->quantidade_pedidos_cartao;
        $ordens->quantidade_pedidos_pix = $request->quantidade_pedidos_pix;
        $ordens->percentagem_conversao_pix = $request->percentagem_conversao_pix;
        $ordens->quantidade_pedidos_cartao = $request->quantidade_pedidos_cartao;
        $ordens->genero_cliente = $request->genero_cliente;

        // Salva a ordem
        $ordens->save();

        // Obtém a quantidade de transações a serem criadas com base na quantidade de pedidos PIX e Cartão
        $quantidadePedidosPix = $request->quantidade_pedidos_pix;
        $percentagemConversaoPix = $request->percentagem_conversao_pix;
        $quantidadePedidosCartao = $request->quantidade_pedidos_cartao;

        // Calcula a quantidade de pedidos PIX pagos com base na porcentagem de conversão
        $quantidadePedidosPixPagos = round($quantidadePedidosPix * ($percentagemConversaoPix / 100));

        // Criação automática de transações para pedidos PIX
        for ($i = 0; $i < $quantidadePedidosPix; $i++) {
            $transacao = new Transacoes;
            // Verifica o gênero do cliente conforme os aspectos mencionados
            if ($request->genero_cliente == 1) {
                // Se o gênero_cliente for igual a 1, busca clientes do sexo 1
                $transacao->cliente_id = Clientes::where('sexo', 1)->inRandomOrder()->first()->id;
            } elseif ($request->genero_cliente == 0) {
                // Se o gênero_cliente for igual a 0, busca clientes do sexo 0
                $transacao->cliente_id = Clientes::where('sexo', 0)->inRandomOrder()->first()->id;
            } elseif ($request->genero_cliente == 2) {
                // Se o gênero_cliente for igual a 2, busca clientes de ambos os sexos
                $transacao->cliente_id = Clientes::inRandomOrder()->first()->id;
            }
            $transacao->ordem_id = $ordens->id;
            $transacao->nome_produto = $request->nome_produto;
            $transacao->valor_produto = $request->valor_produto;
            $transacao->data_pagamento = now();

            // Gera um número aleatório de segundos, de 0 a 86400 (número de segundos em 24 horas)
            $segundosAleatorios = rand(0, 86400);
            // Define o created_at e o updated_at manualmente
            $timestampAleatorio = now()->addSeconds($segundosAleatorios);
            $transacao->created_at = $timestampAleatorio;
            $transacao->updated_at = $timestampAleatorio; // Opcional, dependendo se você quer ou não sincronizar o created_at com o updated_at

            // Desabilita a atualização automática de timestamps
            $transacao->timestamps = false;

            // Verifica se o pedido PIX deve ser considerado como "Pago" ou "Pendente"
            if ($i < $quantidadePedidosPixPagos) {
                $transacao->forma_pagamento = 'PIX';
                $transacao->status = 'Pago';
            } else {
                $transacao->forma_pagamento = 'PIX';
                $transacao->status = 'Pendente';
            }

            $transacao->save();
        }


        // Criação automática de transações para pedidos Cartão
        for ($i = 0; $i < $quantidadePedidosCartao; $i++) {
            $transacao = new Transacoes;

            // Verifica o gênero do cliente conforme os aspectos mencionados
            if ($request->genero_cliente == 1) {
                // Se o gênero_cliente for igual a 1, busca clientes do sexo 1
                $transacao->cliente_id = Clientes::where('sexo', 1)->inRandomOrder()->first()->id;
            } elseif ($request->genero_cliente == 0) {
                // Se o gênero_cliente for igual a 0, busca clientes do sexo 0
                $transacao->cliente_id = Clientes::where('sexo', 0)->inRandomOrder()->first()->id;
            } elseif ($request->genero_cliente == 2) {
                // Se o gênero_cliente for igual a 2, busca clientes de ambos os sexos
                $transacao->cliente_id = Clientes::inRandomOrder()->first()->id;
            }

            $transacao->ordem_id = $ordens->id;
            $transacao->forma_pagamento = 'Cartão';
            $transacao->nome_produto = $request->nome_produto;
            $transacao->valor_produto = $request->valor_produto;
            $transacao->data_pagamento = now();

              // Gera um número aleatório de segundos, de 0 a 86400 (número de segundos em 24 horas)
            $segundosAleatorios = rand(0, 86400);
            // Define o created_at e o updated_at manualmente
            $timestampAleatorio = now()->addSeconds($segundosAleatorios);
            $transacao->created_at = $timestampAleatorio;
            $transacao->updated_at = $timestampAleatorio; // Opcional

            // Desabilita a atualização automática de timestamps
            $transacao->timestamps = false;

            // Atribui o status com base na porcentagem desejada
            if ($i < ($quantidadePedidosCartao * 0.7)) {
                $transacao->status = 'Pago';
            } else {
                $transacao->status = 'Pendente';
            }

            $transacao->save();
        }


        return redirect('ordens/listar_ordem')->with('success', 'Ordem salva com sucesso!');
    }


    public function show($id)
    {
        //
    }


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
