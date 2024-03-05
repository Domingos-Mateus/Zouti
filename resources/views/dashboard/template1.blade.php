<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets1/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>zouti</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets1/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets1/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets1/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../assets1/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets1/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets1/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets1/css/demo.css" />
    <link rel="stylesheet" href="../../assets1/css/estilo-zouti.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets1/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets1/vendor/css/pages/cards-advance.css" />

      <!-- Inclua as dependências do Angular e Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.0/chart.min.js"></script>

    <!-- Se necessário, inclua os estilos do Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.0/Chart.min.css">


    <!-- Helpers -->
    <script src="../../assets1/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: center;
          }

          body {
            color: #000 !important;
          }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-/8cBw9Vn4zd5GL0FMY5x3mOUgIljG72KEbJlHJ7iRyh4gVSzsF0Q1dZbbSW/OWZn" crossorigin="anonymous">


    <!-- Favicon -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6vP0k0StQAIuARJb29AKHzJ8Aq8LKsGpKeY5O2BSGp1OrVitRoOQyevL1QL3fGK" crossorigin="anonymous">


    <!-- Se necessário, inclua os estilos do Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.0/Chart.min.css">


    <!-- Helpers -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: center;
          }

          body {
            color: #000 !important;
          }
        }

       .date-picker {
          background-color: #fff;
          padding: 8px;
          border-radius: 20px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
          display: inline-flex;
          align-items: center;
        }

        .date-range {
          color: #333;
          font-size: 14px;
        }

        .separator {
          margin: 0 5px;
        }

        .text-setas {
          font-size: 18px;
          margin-top: 5px;
          display: inline-block;
        }

        .arrow-up {
          width: 0;
          height: 0;
          border-left: 8px solid transparent;
          border-right: 8px solid transparent;
          border-bottom: 10px solid rgba(186, 206, 28, 1);
          display: inline-block;
          margin-left: 3px;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-/8cBw9Vn4zd5GL0FMY5x3mOUgIljG72KEbJlHJ7iRyh4gVSzsF0Q1dZbbSW/OWZn" crossorigin="anonymous">

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

    <!--Links para Taxa-->

<!-- Favicon -->

<!-- Fonts -->
<link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
  rel="stylesheet" />

<!-- Icons -->

<!-- Core CSS -->

<!-- Vendors CSS -->
<link rel="stylesheet" href="../../assets1/vendor/libs/apex-charts/apex-charts.css" />
<link rel="stylesheet" href="../../assets1/vendor/libs/swiper/swiper.css" />
<link rel="stylesheet" href="../../assets1/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="../../assets1/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />


<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../../assets1/js/config.js"></script>

<style type="text/css">
    @media (max-width: 1199px) {
      .d-flex-flex {
        display: flex;
        justify-content: center;
      }
    }
</style>


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets1/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets1/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: center;
          }
        }
    </style>

<style type="text/css">
    @media (max-width: 1199px) {
      .d-flex-flex {
        display: flex;
        justify-content: center;
      }
    }

    .card-pay {
      background-image: url('../../assets1/img2/banner-taxas.png');
      background-size: cover;
      background-position: 10%;
    }
</style>


<!--Pa Transação-->

    <!-- Favicon -->

    <!-- Fonts -->


    <!-- Icons -->

    <!-- Core CSS -->

    <link rel="stylesheet" href="../../assets1/css/estilo-zouti.css"/>


    <!-- Page CSS -->

    <!-- Helpers -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: center;
          }
        }

        .verde {
            background-color: rgba(186, 206, 28,1);
          }

          .filter {
            border-radius: 50px;
          }
    </style>




<!--/Links para Taxa-->

    <!-- Favicon -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6vP0k0StQAIuARJb29AKHzJ8Aq8LKsGpKeY5O2BSGp1OrVitRoOQyevL1QL3fGK" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Fonts -->


    <!-- Icons -->

    <link rel="stylesheet" href="../../assets1/vendor/css/rtl/core.css"/>


    <!-- Page CSS -->

      <!-- Inclua as dependências do Angular e Chart.js -->

    <!-- Se necessário, inclua os estilos do Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.0/Chart.min.css">


    <!-- Helpers -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: end;
          }

          body {
            color: #000 !important;
          }
        }

       .date-picker {
          background-color: #fff;
          padding: 8px;
          border-radius: 20px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
          display: inline-flex;
          align-items: center;
        }

        .date-range {
          color: #333;
          font-size: 14px;
        }

        .separator {
          margin: 0 5px;
        }

        .text-setas {
          font-size: 18px;
          margin-top: 5px;
          display: inline-block;
        }

        .arrow-up {
          width: 0;
          height: 0;
          border-left: 8px solid transparent;
          border-right: 8px solid transparent;
          border-bottom: 10px solid rgba(186, 206, 28, 1);
          display: inline-block;
          margin-left: 3px;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-/8cBw9Vn4zd5GL0FMY5x3mOUgIljG72KEbJlHJ7iRyh4gVSzsF0Q1dZbbSW/OWZn" crossorigin="anonymous">




    <!-- Favicon -->

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />


    <!-- Icons -->



    <link rel="stylesheet" href="../../assets1/vendor/css/rtl/core.css"/>

    <!-- Page CSS -->

      <!-- Inclua as dependências do Angular e Chart.js -->

    <!-- Se necessário, inclua os estilos do Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.0/Chart.min.css">


    <!-- Helpers -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets1/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets1/js/config.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style type="text/css">
        @media (max-width: 1199px) {
          .d-flex-flex {
            display: flex;
            justify-content: end;
          }

          body {
            color: #000 !important;
          }
        }

       .date-picker {
          background-color: #fff;
          padding: 8px;
          border-radius: 20px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
          display: inline-flex;
          align-items: center;
        }

        .date-range {
          color: #333;
          font-size: 14px;
        }

        .separator {
          margin: 0 5px;
        }

        .text-setas {
          font-size: 20px;
          margin-top: 5px;
          display: inline-block;
        }

        .arrow-up {
          width: 0;
          height: 0;
          border-left: 8px solid transparent;
          border-right: 8px solid transparent;
          border-bottom: 10px solid rgba(186, 206, 28, 1);
          display: inline-block;
          margin-left: 3px;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-9eQvlbPyF+dIo67pVgycqD1mTteT/Bv+Qi2sZZSJ5HfYKZ0BP7hYKKx8biw9ZDY8UIN3J+ydzZu7zJGKcI3JKw==" crossorigin="anonymous" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Calendario -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Demo css -->
    <link rel="stylesheet" type="text/css" href="demo.css">
  </head>

  <body>

    @include('dashboard.siderbar')


    @yield('conteudo')






    <script src="../../assets1/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets1/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets1/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets1/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets1/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets1/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets1/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets1/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets1/js/charts-apex.js"></script>

    <!-- Core JS -->

    <script src="../../assets1/vendor/js/bootstrap.js"></script>
    <script src="../../assets1/vendor/libs/popper/popper.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets1/vendor/libs/moment/moment.js"></script>
    <script src="../../assets1/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->

    <!-- Page JS -->
    <script src="../../assets1/js/app-academy-dashboard.js"></script>




    <!-- Vendors JS -->
    <script src="../../assets1/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->

    <!-- Page JS -->
    <script src="../../assets1/js/dashboards-analytics.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets1/vendor/libs/chartjs/chartjs.js"></script>

    <!-- Main JS -->

    <!-- Page JS -->
    <script src="../../assets1/js/charts-chartjs.js"></script>

    <script>
    // Exemplo de inicialização do gráfico de linha usando Chart.js
    var ctx = document.getElementById('canvas').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',  // Alteração para gráfico de linha
        data: {
            labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 3, 5, 2],
                backgroundColor: 'rgba(186, 206, 28,1)',
                borderColor: 'rgba(186, 206, 28,1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

    <script>
    // Exemplo de inicialização do gráfico de linha usando Chart.js
    var ctx = document.getElementById('canvas').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',  // Alteração para gráfico de linha
        data: {
            labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 3, 5, 2],
                backgroundColor: 'rgba(186, 206, 28,1)',
                borderColor: 'rgba(186, 206, 28,1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

    <script>
    // Exemplo de inicialização do gráfico de linha usando Chart.js
    var ctx = document.getElementById('canvas').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',  // Alteração para gráfico de linha
        data: {
            labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 3, 5, 2],
                backgroundColor: 'rgba(186, 206, 28,1)',
                borderColor: 'rgba(186, 206, 28,1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  </script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
$(function() {
$('input[name="daterange"]').daterangepicker({
    opens: 'left',
    startDate: moment().startOf('month'),
    endDate: moment().endOf('month'),
    locale: {
      format: 'DD MMM, YYYY',
      separator: ' - ',
      applyLabel: 'Aplicar',
      cancelLabel: 'Cancelar',
      fromLabel: 'De',
      toLabel: 'Até',
      customRangeLabel: 'Customizar',
      weekLabel: 'W',
      daysOfWeek: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex','Sab'],
      monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      firstDay: 1
    },
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

    <!-- Page JS -->

<script>
    var ctx = document.getElementById('meuGrafico').getContext('2d');
    var meuGrafico = new Chart(ctx, {
        type: 'line', // Tipo de gráfico: linha
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'], // Rótulos do eixo X
            datasets: [{
                //label: 'Meu Primeiro Dataset',
                data: [4000, 4100, 4200, 15000, 16000,1400,12000], // Dados do gráfico
                backgroundColor: 'rgba(186, 206, 28,0.4)', // Cor de fundo verde com transparência
                borderColor: 'rgba(186, 206, 28,1)', // Cor da linha verde
                borderWidth: 3,
                fill: true, // Preenche a área sob a linha
                pointRadius: 0, // Remove os pontos do gráfico
                tension: 0.4
            }]
        },
        options: {
           plugins: {
                legend: {
                    display: false // Remove a legenda do gráfico
                }
            },
            scales: {
                y: { // Configurações do eixo Y
                    beginAtZero: true,
                    ticks: {
                        // Define os valores específicos para os rótulos do eixo Y
                        callback: function(value, index, values) {
                            const allowedValues = [0, 5000, 10000, 15000, 20000];
                            if (allowedValues.includes(value)) {
                                return value;
                            }
                        },
                        stepSize: 5000, // Define o intervalo entre os valores
                        suggestedMax: 20000 // Sugerindo o valor máximo
                    },
                    grid: {
                        display: true // Mantém as linhas de grade horizontais
                    }
                },
                x: { // Configurações do eixo X
                    grid: {
                        display: false // Remove as linhas de grade verticais
                    }
                }
            }
        }
    });
</script>


<script>
$(function() {
  // Configura o Moment.js para usar o idioma português
  moment.locale('pt-br');

  $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    startDate: moment(), // Define a data de início como a data atual
    endDate: moment(), // Define a data de fim como a data atual
    locale: {
      format: 'DD MMM. YYYY', // Define o formato da data
      applyLabel: "Aplicar",
      cancelLabel: "Cancelar",
      fromLabel: "De",
      toLabel: "Para",
      customRangeLabel: "Personalizado",
      weekLabel: "S",
      daysOfWeek: moment.weekdaysMin(), // Dias da semana abreviados em português
      monthNames: moment.monthsShort(), // Nomes dos meses abreviados em português
      firstDay: moment.localeData().firstDayOfWeek() // Primeiro dia da semana conforme a locale
    }
  }, function(start, end, label) {
    console.log("Uma nova seleção de datas foi feita: " + start.format('DD MMM. YYYY') + ' a ' + end.format('DD MMM. YYYY'));
  });
});

</script>



<script>
    document.addEventListener('DOMContentLoaded', function () {
var ctx = document.getElementById('meuGrafico').getContext('2d');
var meuGrafico = new Chart(ctx, {
    type: 'line', // Tipo de gráfico: linha
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr'], // Rótulos do eixo X
        datasets: [{
            //label: 'Meu Primeiro Dataset',
            data: [0, 4000, 8000, 4000, 0], // Dados do gráfico ajustados para uma parábola
            backgroundColor: 'rgba(186, 206, 28,0.4)', // Cor de fundo verde com transparência
            borderColor: 'rgba(186, 206, 28,1)', // Cor da linha verde
            borderWidth: 3,
            fill: true, // Preenche a área sob a linha
            pointRadius: 0, // Remove os pontos do gráfico
            tension: 0.4
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false // Remove a legenda do gráfico
            }
        },
        scales: {
            y: { // Configurações do eixo Y
                beginAtZero: true,
                ticks: {
                    // Define os valores específicos para os rótulos do eixo Y
                    callback: function (value, index, values) {
                        const allowedValues = [0, 5000, 10000, 15000, 20000];
                        if (allowedValues.includes(value)) {
                            return value;
                        }
                    },
                    stepSize: 5000, // Define o intervalo entre os valores
                    suggestedMax: 20000 // Sugerindo o valor máximo
                },
                grid: {
                    display: true // Mantém as linhas de grade horizontais
                }
            },
            x: { // Configurações do eixo X
                grid: {
                    display: false // Remove as linhas de grade verticais
                }
            }
        }
    }
});

// Função para redimensionar o gráfico quando a janela é redimensionada
window.addEventListener('resize', function () {
    meuGrafico.resize();
});
});

</script>

<script>

const chartProgressList = document.querySelectorAll('.chart-progress');
if (chartProgressList) {
chartProgressList.forEach(function (chartProgressEl) {
const color = getComputedStyle(chartProgressEl).getPropertyValue('--chart-color').trim() || '#000'; // Cor padrão como fallback
const series = parseFloat(chartProgressEl.dataset.series);
const progress_variant = chartProgressEl.dataset.progress_variant === 'true';

const optionsBundle = {
  series: [series],
  chart: {
    height: 155,
    width: 80,
    type: 'radialBar',
    marginTop: 10, // ajuste este valor conforme necessário
    marginBottom: 10,
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: '40%',
      },
      dataLabels: {
        show: true,
        name: {
          show: false,
        },
        value: {
          show: true,
          fontSize: '18px',
          fontFamily: 'Helvetica, Arial, sans-serif',
          color: undefined,
          offsetY: 5,
          formatter: function (val) {
            return val + '%';
          }
        }
      }
    }
  },
  labels: ['Progress'],
  colors: [color],
  stroke: {
    lineCap: 'round',
  },
};

const chart = new ApexCharts(chartProgressEl, optionsBundle);
chart.render();
});
}
</script>

<script>
/*Grafico circular 2*/
const chartProgressList2 = document.querySelectorAll('.chart-progress2');
if (chartProgressList2) {
chartProgressList2.forEach(function (chartProgressEl) {
const color = getComputedStyle(chartProgressEl).getPropertyValue('--chart-color').trim() || '#000'; // Cor padrão como fallback
const series = parseFloat(chartProgressEl.dataset.series);
const progress_variant = chartProgressEl.dataset.progress_variant === 'true';

const optionsBundle = {
  series: [series],
  chart: {
    height: 180,
    width: 120,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: '45%',
      },
      dataLabels: {
        show: true,
        name: {
          show: false,
        },
        value: {
          show: true,
          fontSize: '18px',
          fontFamily: 'Helvetica, Arial, sans-serif',
          color: undefined,
          offsetY: 5,
          formatter: function (val) {
            return val + '%';
          }
        }
      }
    }
  },
  labels: ['Progress'],
  colors: [color],
  stroke: {
    lineCap: 'round',
  },
};

const chart = new ApexCharts(chartProgressEl, optionsBundle);
chart.render();
});
}
</script>

<script>
  const horizontalBarChart = document.getElementById('myChart');
    if (horizontalBarChart) {
        const horizontalBarChartVar = new Chart(horizontalBarChart, {
            type: 'bar',
            data: {
                labels: ['1x', '2x', '3x ', '4x', '5x', '7x', '8x', '9x', '10x', '11x', '12x'],
                datasets: [
                    {
                        data: [710, 350, 470, 580, 230, 460, 120, 350, 470, 580, 230, 460, 120],
                        backgroundColor: '#BACE1C',
                        borderColor: 'transparent',
                        barThickness: 18, // Define a espessura fixa para as barras
                        // maxBarThickness: 15, // Opcional: ajuste ou remova conforme necessário
                    }
                ]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 500
                },
                plugins: {
                    tooltip: {
                        backgroundColor: '#BACE1C', // Personalizado com a cor do gráfico
                        borderWidth: 1,
                        borderColor: '#BACE1C', // Personalizado com a cor do gráfico
                        displayColors: false,
                        bodyFont: {
                            color: '#ffffff' // Personalizado com a cor do texto
                        }
                    },
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        min: 0,
                        grid: {
                            color: '#BACE1C', // Personalizado com a cor do gráfico
                            borderColor: '#BACE1C' // Personalizado com a cor do gráfico
                        },
                        ticks: {
                            color: '#000000' // Personalizado com a cor preta
                        }
                    },
                    y: {
                        grid: {
                            borderColor: '#BACE1C', // Personalizado com a cor do gráfico
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#000000', // Personalizado com a cor preta
                            font: {
                                size: 14 // Personalizado com o tamanho da fonte
                            }
                        }
                    }
                }
            }
        });
    }
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
  $('#demo').daterangepicker({
      "autoApply": true,
      "startDate": "02/23/2024",
      "endDate": "02/29/2024"
  }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
  });
</script>

<script>
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle("toggle_sidebar")
  }
</script>
  </body>
</html>
