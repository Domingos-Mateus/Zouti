@extends('dashboard.template')

@section('conteudo')
<br><br>
<div class="container mt-5" style="margin-left: 7cm; margin-right: 2cm;">

    <h2>Lista de ordens</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/ordens/registar_ordem" class="btn btn-primary">Adicionar ordem</a>
    </div>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">produto</th>
                <th scope="col">Valor do produto</th>
                <th scope="col">Qtd de Pedidos de Pix</th>
                <th scope="col">Qtd de Pedidos do Cartão</th>
                <th scope="col">Variação de Parcela</th>
                <th scope="col">Género</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordens as $ordem)
            <tr>
                <td>{{ $ordem['nome_produto'] }}</td>
                <td>{{ $ordem['valor_produto'] }}</td>
                <td>{{ $ordem['quantidade_pedidos_pix'] }}</td>
                <td>{{ $ordem['quantidade_pedidos_cartao'] }}</td>
                <td>{{ $ordem['variacao_parcela'] }}</td>
                <td>{{ $ordem['genero_cliente'] }}</td>
            </tr>
            @endforeach
            <!-- Adicione mais linhas conforme necessário -->
        </tbody>
    </table>
</div>

@endsection
