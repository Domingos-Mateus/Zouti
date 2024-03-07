@extends('dashboard.template')

@section('conteudo')
<br><br>
<div class="container mt-5" style="margin-left: 7cm; margin-top: 5cm; margin-right: 2cm;">
    <h5>Cadastrar Ordens</h5>
    <form action="/salvar_ordem" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="row">
            <div class="col">
                <label for="nome_produto">Nome do Produto:</label>
              <input type="text" name="nome_produto" class="form-control" id="nome_produto" placeholder="crédito" required>
            </div>
            <div class="col">
                <label for="valor_produto">Valor do Produto:</label>
                <input type="text" name="valor_produto" class="form-control" id="valor_produto" placeholder="100,00" required>
            </div>
          </div>
<br>


          <div class="row">
            <div class="col">
                <label for="quantidade_pedidos_pix" >Quantidade de Pedidos PIX:</label>
                <input type="number" name="quantidade_pedidos_pix" class="form-control" id="quantidade_pedidos_pix" placeholder="100" required>
            </div>
            <div class="col">
                <label for="percentagem_conversao_pix" >Percentagem de Conversão PIX:</label>
                <input type="number" name="percentagem_conversao_pix" class="form-control" id="percentagem_conversao_pix" placeholder="40" required>
            </div>
          </div>

<br>

          <div class="row">
            <div class="col">
                <label for="quantidade_pedidos_cartao">Quantidade de Pedidos Cartão:</label>
                <input type="number" name="quantidade_pedidos_cartao" class="form-control" id="quantidade_pedidos_cartao" placeholder="20" required>
            </div>
            <div class="col">
                <label for="genero_cliente">Selecione o Gênero dos Clientes:</label>
                <select name="genero_cliente" class="form-control" id="genero_cliente" required>
                    <option value="0">Clientes Mulheres</option>
                    <option value="1">Clientes Homens</option>
                    <option value="2">Clientes Variados</option>
                </select>
            </div>
          </div>





        <br>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-info">Gerar Order</button>
            </div>
        </div>
    </form>
</div>

@endsection
