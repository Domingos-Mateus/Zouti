<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>zouti</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <!-- Fonts -->

    <!-- Icons -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/css/demo.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: center;
          }
        }
    </style>
  </head>

  <body>

@extends('dashboard.template')

@section('conteudo')<style>
    .container {
        margin-left: 6cm;
    }

    .btn-custom {
        color: rgba(197, 219, 31);
        text-decoration: none;
    }

    .btn-custom:hover {
        color: rgba(197, 219, 31);
        text-decoration: underline;
    }
</style>

<div class="">
    <div class="container mt-4">
        <h2>Lista de Clientes</h2>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="/clientes/registar_cliente" class="btn btn-custom">Adicionar Cliente</a>
            <a href="#" class="btn btn-custom">Produto</a>
            <a href="#" class="btn btn-custom">Pix</a>
            <a href="#" class="btn btn-custom">Boletos</a>
            <a href="#" class="btn btn-custom">Chargebacks</a>
            <a href="@" class="btn btn-custom">tickets</a>
            <a href="/ordens/listar_ordem" class="btn btn-custom">ordens</a>
            <a href="#" class="btn btn-custom">Pedidos</a>
            <a href="#" class="btn btn-custom">Vendas</a>
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Abreviação</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['abreviacao'] }}</td>
                    <td>{{ $cliente['nome'] }}</td>
                    <td>{{ $cliente['email'] }}</td>
                    <td>
                        @if($cliente['sexo'] == 1)
                            Homem
                        @elseif($cliente['sexo'] == 0)
                            Mulher
                        @else
                            <!-- Se o valor não for nem 0 nem 1, exiba algo diferente -->
                            Valor inválido
                        @endif
                    </td>
                </tr>
                @endforeach

                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>
</div>

@endsection

</body>
</html>
