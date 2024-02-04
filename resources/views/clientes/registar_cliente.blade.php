<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cliente</title>
  <!-- Adicionar link para o Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h5>Cadastrar Clientes</h5>
    <form action="/salvar_cliente" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="campo">Abreviação:</label>
      <input type="text" name="abreviacao" class="form-control" id="campo" placeholder="Abreviação Ex: DM">
    </div>
    <div class="form-group">
        <label for="campo">Nome:</label>
        <input type="text" name="nome" class="form-control" id="campo" placeholder="Nome">
      </div>
    <div class="form-group">
        <label for="campo">Email:</label>
        <input type="email" name="email" class="form-control" id="campo" placeholder="EX:muangala@gmail.com">
      </div>
      <div class="form-group">
        <label for="campo">Género:</label>
        <select name="sexo" class="form-control" id="campo">
            <option value="1">Homem</option>
            <option value="0">Mulher</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>

<!-- Adicionar link para o jQuery e o Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
