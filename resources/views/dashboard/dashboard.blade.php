@extends('dashboard.template')

@section('conteudo')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">


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
                <span class="app-brand-logo demo">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0" />
                  </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold">ZOUTI</span>
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

            <br>

            <div class="container-xxl flex-grow-1 container-p-y">



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             <div class="row">
            <div class="col-12 col-lg-8">

              <div class="row">
                <div class="col-12 col-md-6 col-lg-6 mb-3" style="border-left: 2px solid orange;">
                   <h3 class="m-0">
                    Dashboard
                  </h3>
                  <p>Actualizaçoes a todo instante</p>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                <div class="m-0 p-0 mb-3">
                  <div class="d-flex-flex">
                    <div class="col-12">
                      <select class="form-select">
                        <option value="2023-12-31_2024-01-06">Dec 31, 2023 – Jan 6, 2024</option>
                      </select>
                    </div>
                  </div>
                </div>
                </div>

              </div>

              <div class="row m-0 p-0">
              <div class="row bg-white m-0 p-0 rounded-3 mb-3 pt-3 pb-1">
                <div class="col-sm-6 col-lg-4 mb-4">
                  <p class="mb-1">Total em vendas</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1">
                        <b>R$ 1000000000
                          <span>
                            <img src="../../assets/seta-verde.png" width="28" class="rotate">
                          </span>
                        </b>
                      </span>
                      </p>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                  <p class="mb-1">Pedidos Pagos</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1">
                        <b>R$ 1000000000
                          <span>
                            <img src="../../assets/seta-verde.png" width="28" class="rotate">
                          </span>
                        </b>
                      </span>
                      </p>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                  <p class="mb-1">Ticket medio</p>
                      <p class="mb-0">
                        <span class="fw-medium me-1">
                        <b>R$ 1000000000
                          <span>
                            <img src="../../assets/seta-verde.png" width="28" class="rotate">
                          </span>
                        </b>
                      </span>
                      </p>
                </div>
              </div>

              <!-- Grafico de Area -->
              <div class="card">
                      <div class="card-header d-flex justify-content-between">
                        <div>
                          <h5 class="card-title mb-0">Vendas por dia</h5>
                          <small class="text-muted">Acompanhe o volume diario da sua empresa</small>
                        </div>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn dropdown-toggle px-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-calendar"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 7 Days</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 30 Days</a
                              >
                            </li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Current Month</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="lineAreaChart"></div>
                      </div>
                    </div>

                    <!-- Continuaçao do prieenchimento da pagina -->
                    <div class="col-sm-12 col-md-4 col-lg-4 my-3 p-0 m-0 pe-lg-1 pe-md-1">
                    <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <h5 class="m-0" style="font-size: 15px;">Vendas por metodos</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
                          </p>
                        </div>
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
                          </p>
                        </div>
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>


                  <div class="col-sm-12 col-md-8 col-lg-8 my-3 p-0 m-0 ps-lg-1 ps-md-1">
                    <div class="card h-100">
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3 pb-1">
                          <div class="row w-100 align-items-center">
                            <div class="col-9">
                              <div class="me-2">
                                <h5 class="m-0" style="font-size: 15px;">Vendas no Cartão</h5>
                                <p class="m-0 mb-2">Texto a ser preenchido..</p>
                              </div>
                              <div>
                                <h4 class="m-0">R$ 0,00</h4>
                                <p class="m-0">Texto a ser preenchido..</p>
                                <p class="m-0">Texto a ser preenchido..</p>
                              </div>
                            </div>
                          </div>
                          <div style="display: flex; align-items: center;">
                          <div
                            class="chart-progress me-3"
                            data-color="danger"
                            data-series="15"
                            data-progress_variant="true">
                          </div>
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
                          <p class="m-0">
                            Vendas no Pix
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="m-0">Pix</p>
                        </div>
                      </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3" style="height: 10px; background: green;">

                          </div>
                        </div>
                        <div class="col-12">
                          <p class="mb-2">
                            Vale pago total <b>R$ 0,00</b>
                          </p>
                        </div>

                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6 my-2 p-0 m-0 ps-lg-1 pe-md-1">
                    <div class="card h-100">
                    <div class="row pt-4 px-4">
                        <div class="col-6">
                          <p class="m-0">
                            Vendas no Pix
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="m-0">Pix</p>
                        </div>
                      </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3" style="height: 10px; background: green;">

                          </div>
                        </div>
                        <div class="col-12">
                          <p class="mb-2">
                            Vale pago total <b>R$ 0,00</b>
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
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                              <div>
                                <h5 class="m-0">Indices</h5>
                                <p>Boletos, PIX e Chargebaks</p>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="p-0 m-0">
                                <li class="d-flex mb-3 pb-1">
                                  <div
                                    class="chart-progress me-3"
                                    data-color="primary"
                                    data-series="{{$boletos}}"
                                    data-progress_variant="true"></div>
                                  <div class="row w-100 align-items-center">
                                    <div class="col-9">
                                      <div class="me-2">
                                        <h6 class="mb-2">Boletos</h6>
                                        <small>Conversão</small>
                                      </div>
                                    </div>
                                    <div class="col-3 text-end">
                                      <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                                        <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                                      </button>
                                    </div>
                                  </div>
                                </li>
                                <li class="d-flex mb-3 pb-1">
                                  <div
                                    class="chart-progress me-3"
                                    data-color="success"
                                    data-series="{{$pixs}}"
                                    data-progress_variant="true"></div>
                                  <div class="row w-100 align-items-center">
                                    <div class="col-9">
                                      <div class="me-2">
                                        <h6 class="mb-2">Pix</h6>
                                        <small>Conversão</small>
                                      </div>
                                    </div>
                                    <div class="col-3 text-end">
                                      <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                                        <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                                      </button>
                                    </div>
                                  </div>
                                </li>
                                <li class="d-flex mb-3 pb-1">
                                  <div
                                    class="chart-progress me-3"
                                    data-color="danger"
                                    data-series="{{$chargebacks}}"
                                    data-progress_variant="true"></div>
                                  <div class="row w-100 align-items-center">
                                    <div class="col-9">
                                      <div class="me-2">
                                        <h6 class="mb-2">Chargebaks</h6>
                                        <small>0 neste período</small>
                                      </div>
                                    </div>
                                    <div class="col-3 text-end">
                                      <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                                        <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                                      </button>
                                    </div>
                                  </div>
                                </li>
                                <li class="d-flex">
                                  <div
                                    class="chart-progress me-3"
                                    data-color="info"
                                    data-series="{{$chargebacks}}"
                                    data-progress_variant="true"></div>
                                  <div class="row w-100 align-items-center">
                                    <div class="col-9">
                                      <div class="me-2">
                                        <h6 class="mb-2">Pré-Chargebaks</h6>
                                        <small>3 neste período</small>
                                    </div>
                                </li>
                                    </div>
                                  </div>
                                </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <br>

                  <div class="card">
                    <div class="card-header header-elements">
                      <div class="d-flex flex-column">
                        <h5 class="card-title mb-2">Parecelas no Cartao</h5>
                        <p class="card-subtitle text-muted mb-1">Numero de transaçoes</p>
                      </div>
                      <div class="card-action-element ms-auto py-0">
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn dropdown-toggle px-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-calendar"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Yesterday</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 7 Days</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 30 Days</a
                              >
                            </li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Current Month</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last Month</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="horizontalBarChart" class="chartjs" data-height="400"></canvas>
                    </div>
                  </div>

                  <br>

                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <h5 class="card-title m-0">Taxas de Rastreio</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
                          </p>
                        </div>
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
                          </p>
                        </div>
                        <div class="col-6">
                          <p class="mb-2">
                            Cartão
                          </p>
                        </div>
                        <div class="col-6 text-end">
                          <p class="mb-2">
                            0%
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
                    , Distribuido com ❤️ Por <a href="http://devaholic.ao" target="_blank" class="fw-medium">DevAholic</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
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
