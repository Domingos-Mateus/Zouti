<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ordens</title>
  <!-- Adicionar link para o Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h5>Cadastrar Ordens</h5>
    <form action="/salvar_ordem" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="campo">Produto:</label>
      <input type="text" name="produto" class="form-control" id="campo" placeholder="Produto">
    </div>
    <div class="form-group">
        <label for="campo">Valor do Produto:</label>
        <input type="text" name="valor_produto" class="form-control" id="campo" placeholder="Valor do Produto Ex: 2000Kz">
      </div>
      <div class="form-group">
        <label for="campo">Quantidade de Pedidos do Pix</label>
        <select name="quantidade_pedidos_pix" class="form-control" id="campo">
            <option value="Pix Pendente">Pix Pendente</option>
            <option value="Pix Pago">Pix Pago</option>
        </select>
    </div>

    <div class="form-group">
        <label for="campo">Quantidade de Pedidos Cartão</label>
        <select name="quantidade_pedidos_cartao" class="form-control" id="campo">
            <option value="Cartão Pago">Cartão Pago</option>
            <option value="Cartão Recusado">Cartão Recusado</option>
            <option value="Pedidos Estornados">Pedidos Estornados</option>
        </select>
    </div>

    <div class="form-group">
        <label for="campo">Variação de Parcelas</label>
        <select name="variacao_parcela" class="form-control" id="campo">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <div class="form-group">
        <label for="campo">Gênero dos Clientes</label>
        <select name="genero_cliente" class="form-control" id="campo">
            <option value="Variado">Variado</option>
            <option value="Mulher">Mulher</option>
            <option value="Homem">Homem</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Gerar Order</button>
  </form>
</div>

<!-- Adicionar link para o jQuery e o Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
