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

@section('conteudo')
<style>


    .card-pay {
        background-image: url('../../assets/img/banner-taxas.png');
        background-size: cover;
        background-position: 10%;
    }
</style>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->


        <!-- Layout container -->
        <div class="layout-page">


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








    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/charts-apex.js"></script>







    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->




    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/app-academy-dashboard.js"></script>




    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/chartjs/chartjs.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/charts-chartjs.js"></script>
  </body>
</html>
