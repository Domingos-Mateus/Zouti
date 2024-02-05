@extends('dashboard.template')

@section('conteudo')
     <!-- Navbar -->

     <nav
     class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
     id="layout-navbar">
     <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
       <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
         <i class="ti ti-menu-2 ti-sm"></i>
       </a>
     </div>

     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
       <!-- Search -->
       <div class="col-8 d-flex-flex">
         <a href="index.html" class="app-brand-link">

           <!-- Logo zouti -->
           <img _ngcontent-lvh-c121="" class="logo" src="https://content.pay.zouti.com.br/tenants/pay.zouti.com.br/logo.png">
         </a>
       </div>
       <!-- /Search -->

       <ul class="navbar-nav flex-row align-items-center ms-auto">

         <!-- User -->
         <li class="nav-item navbar-dropdown dropdown-user dropdown">
           <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
             <div class="avatar avatar-online">
               <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
             </div>
           </a>
           <ul class="dropdown-menu dropdown-menu-end">
             <li>
               <a class="dropdown-item" href="pages-account-settings-account.html">
                 <div class="d-flex">
                   <div class="flex-shrink-0 me-3">
                     <div class="avatar avatar-online">
                       <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                     </div>
                   </div>
                   <div class="flex-grow-1">
                     <span class="fw-medium d-block">John Doe</span>
                     <small class="text-muted">Admin</small>
                   </div>
                 </div>
               </a>
             </li>
             <li>
               <div class="dropdown-divider"></div>
             </li>
             <li>
               <a class="dropdown-item" href="pages-profile-user.html">
                 <i class="ti ti-user-check me-2 ti-sm"></i>
                 <span class="align-middle">My Profile</span>
               </a>
             </li>
             <li>
               <a class="dropdown-item" href="pages-account-settings-account.html">
                 <i class="ti ti-settings me-2 ti-sm"></i>
                 <span class="align-middle">Settings</span>
               </a>
             </li>
             <li>
               <a class="dropdown-item" href="pages-account-settings-billing.html">
                 <span class="d-flex align-items-center align-middle">
                   <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                   <span class="flex-grow-1 align-middle">Billing</span>
                   <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20"
                     >2</span
                   >
                 </span>
               </a>
             </li>
             <li>
               <div class="dropdown-divider"></div>
             </li>
             <li>
               <a class="dropdown-item" href="pages-faq.html">
                 <i class="ti ti-help me-2 ti-sm"></i>
                 <span class="align-middle">FAQ</span>
               </a>
             </li>
             <li>
               <a class="dropdown-item" href="pages-pricing.html">
                 <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                 <span class="align-middle">Pricing</span>
               </a>
             </li>
             <li>
               <div class="dropdown-divider"></div>
             </li>
             <li>
               <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                 <i class="ti ti-logout me-2 ti-sm"></i>
                 <span class="align-middle">Log Out</span>
               </a>
             </li>
           </ul>
         </li>
         <!--/ User -->
         <li>
           <span class="d-none d-md-inline d-lg-inline">
             {{ Auth::user()->name }}
           </span>
         </li>
       </ul>
     </div>

     <!-- Search Small Screens -->
     <div class="navbar-search-wrapper search-input-wrapper d-none">
       logo
     </div>
   </nav>
   <!-- / Navbar -->

<div class="container mt-5">
  <h2>Lista de Clientes</h2>

  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/clientes/registar_cliente" class="btn btn-primary">Adicionar Cliente</a>
    <a href="/produtos/listar_produtos" class="btn btn-primary">Produto</a>
    <a href="/pix/listar_pix" class="btn btn-primary">Pix</a>
    <a href="/boletos/listar_boletos" class="btn btn-primary">Boletos</a>
    <a href="/chargebacks/listar_chargebacks" class="btn btn-primary">Chargebacks</a>
    <a href="/tickets/listar_tickets" class="btn btn-primary">tickets</a>
    <a href="/ordens/listar_ordens" class="btn btn-primary">ordens</a>
    <a href="/ordens/listar_ordem" class="btn btn-primary">Pedidos</a>
    <a href="/vendas/listar_vendas" class="btn btn-primary">Vendas</a>
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

@endsection
