@extends('dashboard.template')

@section('conteudo')

<br><br>

<div class="container mt-4" style="margin-left: 7cm;">
    <div class="container mt-4">

    <h5>Cadastrar Clientes</h5>
    <form action="/salvar_cliente" method="POST" enctype="multipart/form-data">
        @csrf

<br><br>

        <div class="row">
            <div class="col">
                <label for="abreviacao" >Abreviação:</label>
                <input type="text" name="abreviacao" class="form-control" id="campo" placeholder="Abreviação Ex: DM" required>
            </div>
            <div class="col">
                <label for="campo" >Nome:</label>
                <input type="text" name="nome" class="form-control" id="campo" placeholder="Nome" required>
            </div>
          </div>

<br>
        <div class="row">
            <div class="col">
                <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" id="campo" placeholder="EX:muangala@gmail.com" required>
            </div>
            <div class="col">
                <label for="sexo">Género</label>
                <select name="sexo" class="form-control" id="campo">
                    <option value="1">Homem</option>
                    <option value="0">Mulher</option>
                </select>
            </div>
          </div>
<br>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
    </div>
</div>


@endsection
