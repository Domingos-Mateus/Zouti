<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>boleto</title>
  <!-- Adicionar link para o Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h5>Salvar Chargbacks</h5>
    <form action="/salvar_boleto" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="campo">Chargbacks:</label>
      <input type="text" name="chargbacks" class="form-control" id="campo" placeholder="Nome">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>

<!-- Adicionar link para o jQuery e o Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
