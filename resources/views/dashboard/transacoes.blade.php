@extends('dashboard.template')

@section('conteudo')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->



        <!-- Layout container -->
        <div class="layout-page">
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

          <br><br>


          <div class="container-xxl flex-grow-1 container-p-y">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="">
            <div class="row px-4 m-0">
              <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                <p class="m-0">
                  <span style="font-size: 22px; font-weight: bold;">
                    Transaçoes
                  </span> <span style="font-size: 15px;">{{$contar}} Registos</span>
                </p>
              </div>

              <!--
               <div class="col-12 col-md-6 col-lg-6 d-lg-flex justify-content-end mt-0">
                 <div>
                  <button class="col-12 btn verde">
                    Criar transaçao manual
                  </button>
                 </div>
              </div>
              -->
            </div>
          </div>

            <div class="container-xxl flex-grow-1 container-p-y p-0 m-0">

            <!-- Basic Bootstrap Table -->


              <div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>

                        <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Transaçao
                          </option>
                        </select>
                    </td>
                -->
                    <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Cliente
                          </option>
                        </select>
                    </td>
                -->
                    <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Forma de Pagamento
                          </option>
                        </select>
                    </td>
                -->
                    <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Status
                          </option>
                        </select>
                    </td>
                -->
                    <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Parcelas
                          </option>
                        </select>
                    </td>
                -->
                    <!--
                    <td>
                        <select class="form-select filter mb-3">
                          <option selected disabled>
                            Entrega
                          </option>
                        </select>
                    </td>
                    -->

                    <td>

                    </td>
                  </tr>


                      <tr class="bg-white">
                        <th>CLIENTE</th>
                        <th>FORMA DE PAGAMENTO</th>
                        <th>STATUS</th>
                        <th>PRODUTO</th>
                        <th>DATA DA TRANSAÇAO</th>
                        <th>DATA DE PAGAMENTO</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($transacoes as $transacao)
                      <tr>
                        <td>
                          <div style="display: flex; flex-direction: row; align-items: start;">
                            <div class="me-2" style="display: inline-flex; width: 40px; height: 40px; color: #fff; justify-content: center; align-items: center; background: #b0b0b0;">
                                {{$transacao->abreviacao}}
                            </div>
                            <div style="display: inline-block;">
                              <p class="m-0" style="font-weight: bold;">{{$transacao->nome_cliente}}</p>
                              <p class="m-0" style="font-size: 13px;">{{$transacao->email}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div style="display: flex; flex-direction: row; align-items: start;">
                            <div class="me-2" style="display: inline-block; width: 40px; height: 40px; background: #b0b0b0;">
                                <img src="../../assets/icons/icons-menu/inicio-cinza.png" hidden>
                            </div>
                            <div style="display: inline-block;">
                              <p class="m-0" style="font-weight: bold;">
                                R$ 123,48
                              </p>
                              <p class="m-0" style="font-size: 13px;">
                                {{$transacao->forma_pagamento}}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td>




                            @if($transacao->status=="Pendente")
                          <span class="badge bg-label-warning me-1 filter">{{$transacao->status}}</span>
                          @endif
                          @if($transacao->status=="Pago")
                          <span class="badge bg-label-success me-1 filter">{{$transacao->status}}</span>
                            @endif
                        </td>
                        <td>
                          <div style="display: inline-block;">
                            <p class="m-0" style="font-weight: bold;">
                                {{$transacao->nome_produto}}
                            </p>
                            <p class="m-0" style="font-size: 13px;">
                              R$  {{$transacao->valor_produto}}
                            </p>
                          </div>
                        </td>
                        <td>
                            {{$transacao->data_pagamento}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($transacao->created_at)->diffForHumans() }}
                        </td>

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ti ti-pencil me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ti ti-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>


              <!--/ Basic Bootstrap Table -->

            </div>
            <!--  Topic and Instructors  End-->



            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="www.devaholic.co" target="_blank" class="fw-medium">www.devaholic.co</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="#" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="#" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="#"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

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
