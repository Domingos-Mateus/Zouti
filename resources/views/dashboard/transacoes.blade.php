@extends('dashboard.template')

@section('conteudo')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar" style="box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);">

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="col-8 col-md-6 d-flex-flex">
                <a href="index.html" class="app-brand-link">

                  <!-- Logo zouti -->
                  <img _ngcontent-lvh-c121="" class="logo" src="https://content.pay.zouti.com.br/tenants/pay.zouti.com.br/logo.png">
                </a>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto pe-lg-4">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online rounded-circle text-center pt-1" style="width: 30px; height: 30px; background: rgba(186, 206, 28,1);">
                        <span style="font-size: 16px; color: #fff; font-weight: bold;">L</span>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
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
                <li class="ps-md-1 d-none d-lg-inline-block">
                  <h2 style="font-size: 14px; font-weight: bold; color: #000; padding-top: 15px; padding-left: 5px;">Nome completo do user
                  </h2>
                </li>
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              logo
            </div>
          </nav>
          <!-- / Navbar -->

          <div class="container-xxl flex-grow-1 container-p-y">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="d-none d-lg-block">
            <div class="row py-2 m-0">
              <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                <p class="m-0">
                  <span style="font-size: 22px; font-weight: bold;">
                    Transações
                  </span> <span style="font-size: 14px; opacity: 0.7;">{{$contar}} Registos</span>
                </p>
              </div>

               <div class="col-12 col-md-6 col-lg-6 d-lg-flex justify-content-end mt-0">
                 <div>
                  <button class="col-12 btn" style="background-color: rgba(186, 206, 28,1); color: #000;">
                    Criar transação manual
                  </button>
                 </div>
              </div>
            </div>
          </div>

          <div class="d-lg-none">
            <div class="row py-2 m-0">
              <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                <p class="m-0">
                  <span style="font-size: 22px; font-weight: bold;">
                    Transações
                  </span>
                </p>
                <p class="m-0">
                  <span style="font-size: 14px; opacity: 0.7;">{{$contar}} Registos</span>
                </p>
              </div>
            </div>
            <div>
                <select class="form-select" style="width: 120px; color: #000;">
                  <option>
                    Opções
                  </option>
                  <option>
                    <button class="col-12 btn">
                      Criar transaçao manual
                    </button>
                  </option>
                </select>
              </div>
          </div>

            <div class="container-xxl flex-grow-1 container-p-y p-0 m-0">

            <!-- Basic Bootstrap Table -->

              <div>
                <div style="overflow-x: auto; white-space: nowrap;">

</div>


                <div class="table-responsive text-nowrap" style="border: 1px solid rgba(0,0,0,0.1);">
                  <table class="table">
                    <thead>
                      <tr class="bg-white">
                        <th><div class="th-table td-min-2">CLIENTE</div></th>
                        <th><div class="th-table td-min">FORMA DE <br> PAGAMENTO</div></th>
                        <th><div class="th-table td-min">STATUS</div></th>
                        <th><div class="th-table td-min-2">PRODUTO</div></th>
                        <th><div class="th-table td-min">DATA DA TRANSAÇAO</div></th>
                        <th><div class="th-table td-min">DATA DE PAGAMENTO</div></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 bg-white">
                        @foreach($transacoes as $transacao)
                      <tr>
                        <td>
                          <div class="td-min-2">
                          <div style="display: flex; flex-direction: row; align-items: start;">
                            <div class="me-2" style="display: inline-flex; width: 32px; height: 32px; color: #fff; justify-content: center; align-items: center; background: #b0b0b0; padding: 0 10px;">
                                {{$transacao->abreviacao}}
                            </div>
                            <div style="display: inline-block;">
                              <p class="m-0" style="font-size: 14px;">{{$transacao->nome_cliente}}</p>
                              <p class="m-0" style="font-size: 11.5px;">{{$transacao->email}}</p>
                            </div>
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="td-min">
                          <div style="display: flex; flex-direction: row; align-items: start;">
                            <div class="me-2" style="display: inline-block; width: 32px; height: 32px;">
                                <img src="../../assets/icons/icons-transacoes/icon-pix.png">
                            </div>
                            <div style="display: inline-block;">
                              <p class="m-0" style=" font-size: 14px;">
                                R$ 123,48
                              </p>
                              <p class="m-0" style="font-size: 11.5px;">
                                {{$transacao->forma_pagamento}}
                              </p>
                            </div>
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="td-min">
                         <div>
                            @if($transacao->status=="Pendente")
                          <span class="badge bg-label-warning me-1 filter">{{$transacao->status}}</span>
                          @endif
                          @if($transacao->status=="Pago")
                          <span class="badge bg-label-success me-1 filter">{{$transacao->status}}</span>
                            @endif
                            @if($transacao->status=="recusado")
                            <span class="badge bg-label-danger me-1 filter">{{$transacao->status}}</span>
                            @endif


                        </td>
                        <td>
                          <div class="td-min-2">
                          <div style="display: inline-block;">
                            <p class="m-0" style=" font-size: 14px;">
                                {{$transacao->nome_produto}}
                            </p>
                            <p class="m-0" style="font-size: 11.5px;">
                              R$ {{$transacao->valor_produto}}
                            </p>
                          </div>
                          </div>
                        </td>
                        <td style="font-size: 11.5px;">
                          <div>
                            {{$transacao->data_pagamento}}
                          </div>
                        </td>
                        <td style="font-size: 11.5px;">
                          <div>
                            {{ \Carbon\Carbon::parse($transacao->created_at)->diffForHumans() }}
                          <div>
                        </td>
                      </tr>

                      <tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="py-4">
                <div class="text-center">
                  <span>voltar</span>
                  <span>avançar</span>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

            </div>

            <i class="fa fa-arrow-left fa-xs">{{ $transacoes->links() }}</i>
            <!--  Topic and Instructors  End-->



            <!-- / Content -->



            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    @endsection
