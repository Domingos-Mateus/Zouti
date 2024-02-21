@extends('dashboard.template')

@section('conteudo')

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
                    <div class="avatar avatar-online rounded-circle text-center pt-1" style="width: 35px; height: 35px; background: rgba(186, 206, 28,1);">
                        <span style="font-size: 18px; color: #fff;">{{$usuarios->primeiro_caractere}}</span>
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
                            <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
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

          <br>

          <div class="container-xxl flex-grow-1 container-p-y">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             <div class="row">
            <div class="col-12 col-lg-8">

              <div class="row">
                <div class="col-12 col-md-6 col-lg-6 m-0 p-0 mb-3">
                  <div class="" style="display: inline-block; height: 40px; background-color: rgba(186, 206, 28,1); width: 4px;">

                  </div>
                   <div style="display: inline-block;" class="ps-2">
                    <span class="text-dashboard"> Dashboard </span> <br>
                    <span class="text-under-dashboard"> Atualizaçoes a todo instante </span>
                  </div>
                </div>

                <!-- Calendario -->

                <div class="col-12 col-md-6 col-lg-6">
                <div class="m-0 p-0 mb-3 d-flex justify-content-end">
                  <div class="tirei-o-flex">
                    <div class="date-picker px-4">
                      <div class="calendar-icon me-2">
                        <i _ngcontent-ftc-c129="" class="fa fa-calendar"></i>
                      </div>
                        <div class="date-range">
                          <input id="cal_input" type="text" name="daterange" value="20/02/2018 - 01/15/2018" style="border: none; font-size: 13.3px;"/>
                          <label for="cal_input" class="fas fa-chevron-down"></label>
                        </div>
                    </div>
                  </div>
                </div>
                </div>

              </div>

              <div class="row m-0 p-0">
              <div class="row bg-white m-0 p-0 rounded-3 mb-3 pt-3 pb-1">
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                  <p class="mb-1 titulo-setas">Total em vendas</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1 text-setas">
                        <b>R$ 0,00
                         <span class="arrow-up" style=""></span>
                        </b>
                      </span>
                      </p>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                  <p class="mb-1 titulo-setas">Pedidos Pagos</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1 text-setas">
                        <b>R$ 0,00
                          <span class="arrow-up" style=""></span>
                        </b>
                      </span>
                      </p>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                  <p class="mb-1 titulo-setas">Ticket medio</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1 text-setas">
                        <b>R$ 0,00
                          <span class="arrow-up" style=""></span>
                        </b>
                      </span>
                      </p>
                </div>
              </div>

              <!-- Grafico de Area -->
              <div class="card">
                      <div class="card-header d-flex justify-content-between p-0 ps-4 pt-3">
                        <div>
                          <h5 class="card-title mb-0 text-16" style="font-weight: bold; color: #000;">Vendas por dia</h5>
                          <small class="text-muted">Acompanhe o volume diario da sua empresa</small>
                        </div>

                      </div>
                      <div class="card-body">
                        <dashboard-chart _ngcontent-lvh-c138="" _nghost-lvh-c130="">
                          <div _ngcontent-lvh-c130="" id="dashboard-chart">
                              <div _ngcontent-lvh-c130="" class="dashboard-chart-wrapper">
                                  <div class="chartjs-size-monitor">
                                      <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                                      <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                                  </div>
                                  <canvas _ngcontent-lvh-c130="" id="meuGrafico" basechart=""
                                          style="display: block; width: 724px; height: 374px;"
                                          class="chartjs-render-monitor" width="724" height="374"></canvas>
                              </div>
                          </div>
                      </dashboard-chart>
                      </div>
                    </div>

                    <!-- Continuaçao do prieenchimento da pagina -->
                    <div class="col-12 col-lg-4 my-3 p-0 m-0 pe-lg-1 pe-md-1">
                    <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 ps-4 pt-3">
                      <div>
                        <h5 class="m-0" style="font-size: 15px; font-weight: bold; color: #000;">Vendas por metodos</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-8">
                          <p class="my-3">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-metodo-cartao.png">
                            </span>
                            Cartão
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="mb-2 mt-2 mb-3">
                            <b>0%</b>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-metodo-boleto.png" style="width: 22px;">
                            </span>
                            Boleto
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="my-3">
                            <b>0%</b>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-metodo-pix.png">
                            </span>
                            PIX
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="my-3">
                            <b>0%</b>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>


                  <div class="col-12 col-lg-8 my-3 p-0 m-0 ps-lg-1 ps-md-1">
                    <div class="card h-100">
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3 pb-1">
                          <div class="row w-100 align-items-center">
                            <div class="col-12">
                              <div class="me-2">
                                <h5 class="m-0 text-16 p-0" style="font-weight: bold;">
                                  Vendas no Cartão
                                </h5>
                                <p class="m-0 mb-2 text-13" style="opacity: 0.6;">
                                  Valor em vendas no periodo
                                </p>
                              </div>
                              <div>
                                <h4 class="m-0 py-3 text-22">R$ 0,00</h4>
                                <p class="m-0 text-13" style="opacity: 0.6;">
                                  Aumente suas vendas no cartão aplicando descontos e incentivos.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div style="display: flex; align-items: center;">
                          <div class="chart-progress2 me-3 mt-4 custom-green" data-series="72" data-progress_variant="true"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6 my-2 p-0 m-0 pe-lg-1 pe-md-1">
                    <div class="card h-100">
                    <div class="row pt-4 px-4">
                        <div class="col-6">
                          <p class="m-0 text-14">
                            Vendas no Pix <span class="invisible">Pixer</span>
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="m-0" >
                            <span style="background-color: rgba(186, 206, 28,0.2); color: rgba(186, 206, 28,1);" class="p-1 px-3 rounded-3">
                              80%
                            </span>
                          </p>
                        </div>
                      </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0 text-21">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3 rounded-3" style="height: 10px; background-color: rgba(186, 206, 28,0.2);">
                            <div class="my-3 rounded-3" style="height: 10px; background-color: rgba(186, 206, 28,1); width: 80%;">
                              <!-- grafico volume-->
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <p class="m-0 text-11">
                            Volume total: <b>R$ 0,00</b>
                          </p>
                        </div>

                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6 my-2 p-0 m-0 ps-lg-1 pe-md-1">
                    <div class="card h-100">
                    <div class="row pt-4 px-4">
                        <div class="col-7">
                          <p class="m-0">
                            Vendas no Boleto
                          </p>
                        </div>
                        <div class="col-5 text-end">
                          <p class="m-0">
                            <span style="background-color: rgba(186, 206, 28,0.2); color: rgba(186, 206, 28,1);" class="p-1 px-3 rounded-3">
                              30%
                            </span>
                          </p>
                        </div>
                      </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0 text-21">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3 rounded-3" style="height: 10px; background-color: rgba(186, 206, 28,0.2);">
                            <div class="my-3 rounded-3" style="height: 10px; background-color: rgba(186, 206, 28,1); width: 30%;">
                              <!-- grafico volume-->
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <p class="m-0 text-11">
                            Volume total: <b>R$ 0,00</b>
                          </p>
                        </div>

                      </div>
                    </div>
                  </div>
                  </div>

            </div>
            </div>

            <div class="col-12 col-lg-4 mt-3 mt-lg-0">
              <div class="">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 ps-4 pt-3">
                      <div>
                        <h5 class="m-0 text-16" style="font-weight: bold; color: #000;">Indices</h5>
                        <p class="text-14">Boletos, PIX e Chargebaks</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex">
                          <div class="chart-progress me-3 custom-green" data-series="{{$boletos}}" data-progress_variant="true"></div>

                          <div class="row w-100 align-items-center">
                            <div class="col-9">
                              <div class="me-2">
                                <h6 class="mb-1">Boletos</h6>
                                <small style="opacity: 0.7;">Conversão</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="chart-progress me-3 custom-green" data-series="{{$pixs}}" data-progress_variant="true"></div>
                          <div class="row w-100 align-items-center">
                            <div class="col-11">
                              <div class="me-2">
                                <h6 class="mb-1">Pix</h6>
                                <small style="opacity: 0.7;">Conversão</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="chart-progress me-3 custom-red" data-series="{{$chargebacks}}" data-progress_variant="true">
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-11">
                              <div class="me-2">
                                <h6 class="mb-2">Chargebacks</h6>
                                <small style="opacity: 0.7;">0 neste periodo</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="chart-progress me-3 custom-red" data-series="{{$chargebacks}}" data-progress_variant="true"></div>
                          <div class="row w-100 align-items-center">
                            <div class="col-11">
                              <div class="me-2">
                                <h6 class="mb-2">Pre-Chargebacks</h6>
                                <small style="opacity: 0.7;">5 neste periodo</small>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <br>

                  <div class="card">
                    <div class="card-header header-elements p-0 ps-4 pt-3">
                      <div class="d-flex flex-column">
                        <h5 class="card-title mb-2 text-16">Parcelas no Cartao</h5>
                        <p class="card-subtitle text-muted mb-1 text-13">Numero de transaçoes</p>
                      </div>

                    </div>
                    <div class="card-body">
                      <canvas id="horizontalBarChart" class="chartjs" data-height="300"></canvas>
                    </div>
                  </div>

                  <br>

                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 ps-4 pt-3">
                      <div>
                        <h5 class="card-title m-0 text-16" style="font-weight: bold; color: #000;">Taxas de Rastreio</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-aguardando-envio.png" style="width: 28px;">
                            </span>
                            <span>
                              Aguardando envio
                            </span>
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>0</b>
                            <span style="opacity: 0.6;">
                              0%
                            </span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-a-caminho.png" style="width: 28px;">
                            </span>
                            A caminho
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>0</b>
                            <span style="opacity: 0.6;">
                              0%
                            </span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-1">
                              <img src="../../assets/icons/icons-extras/icon-entregue.png" style="width: 28px;">
                            </span>
                            Entregue
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>0</b>
                            <span style="opacity: 0.6;">
                              0%
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>

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
