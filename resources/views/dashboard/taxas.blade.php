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

          <div class="container-xxl flex-grow-1 container-p-y">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y p-0 m-0">
                <div class="col-12 mb-2 order-1 order-xxl-3">
                  <div class="card h-100 card-pay" style="border-radius: 30px; background-color: orange;">
                    <div class="invisible card-header d-flex align-items-center justify-content-between position-relative">
                      <div>
                        <div class="row">
                            <h4 class="m-0">Pagamentos</h4>
                            <h4>e Taxas</h4>
                        </div>
                        <div>
                          <button class="btn" style="border: 1px solid #000;">
                            Veja Abaixo
                          </button>
                        </div>
                      </div>

                      <div style="position: absolute; top: 50%; right: 30px;">
                        <h3>ZoutiPay</h3>
                      </div>
                    </div>
                  </div>
                </div>

              <div >
                <h5 class="m-0 py-4">Meios de Pagamento</h5>
              </div>

              <div class="row">
                 <div class="col-md-6 col-xxl-4 mb-4 order-1 order-xxl-3">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <div class="row">
                          <div class="col-8">
                            <h5>Boletos</h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                          </div>
                          <div class="col-4">
                            image
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-8 pt-2">
                            <span style="font-weight: bold;">R$ 3,49</span>
                            <span>/boleto</span>
                          </div>
                          <div class="col-4">
                            <div class="bg-dark rounded-3 text-center py-2" style="color: #fff;">
                              Disponivel
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xxl-4 mb-4 order-1 order-xxl-3">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <div class="row">
                          <div class="col-8">
                            <h5>Boletos</h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                          </div>
                          <div class="col-4">
                            image
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-8 pt-2">
                            <span style="font-weight: bold;">5,19% + R$ 3,49</span>
                            <span>/transaçao</span>
                          </div>
                          <div class="col-4">
                            <div class="bg-dark rounded-3 text-center py-2" style="color: #fff;">
                              Disponivel
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xxl-4 mb-4 order-1 order-xxl-3">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <div class="row">
                          <div class="col-8">
                            <h5>Boletos</h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                          </div>
                          <div class="col-4">
                            image
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-8 pt-2">
                            <span style="font-weight: bold;">0,98%</span>
                            <span>/transaçao</span>
                          </div>
                          <div class="col-4">
                            <div class="bg-dark rounded-3 text-center py-2" style="color: #fff;">
                              Disponivel
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xxl-4 mb-4 order-1 order-xxl-3">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <div class="row">
                          <div class="col-8">
                            <h5>Boletos</h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                          </div>
                          <div class="col-4">
                            image
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

