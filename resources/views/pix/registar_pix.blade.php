<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pix</title>
  <!-- Adicionar link para o Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h5>Salvar Pix</h5>
    <form action="/salvar_pix" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="campo">Pix:</label>
      <input type="text" name="pix" class="form-control" id="campo" placeholder="Nome">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>

<!-- Adicionar link para o jQuery e o Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
