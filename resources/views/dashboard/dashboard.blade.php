@extends('dashboard.template')

@section('conteudo')

    <div id="sidebar" class="bg-white">
        <div>
            <div style="padding: 25px 0px 0px 20px; opacity: 0.7;">
              <div style="">
                <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                <div style="width: 10px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>

              </div>
            </div>
            <div>
                <div style="padding: 43px 0px 20px 15px; display: flex; align-items: center;">
                    <div style="display: inline-flex; width: 34px; height: 38px; background-color: rgba(0,0,0,0.8); align-items: center; justify-content: center; color: rgba(186, 206, 28,0.9); border-radius: 2px;">
                        MX
                    </div>
                    <div style="display: inline-block; margin-left: 10px;">
                        <p style="font-weight: bold; font-size: 14px; margin: 0;">Bem-vindo</p>
                        <p style="font-size: 12px;  margin: 0; margin-top: -5px; color: rgba(0,0,0,0.6);">MX Digital</p>
                    </div>
                </div>
            </div>
            <div class="meu-menu" style="padding: 20px 10px 18px 10px; margin: 20px 0px 15px 0px;  background-color: rgba(197, 219, 31,0.25);">
                <div class="m-0" style="color: rgba(197, 219, 31,1); display: flex; align-items: center;">
                    <div style="display: inline-block; width: 5px; height: 5px; border-radius: 100px; background-color: rgba(186, 206, 28,1);"></div>
                    <strong style="font-size: 10px; margin-left: 5px; font-weight: 600; letter-spacing: 1px;">SALDO DISPONIVEL</strong>
                </div>
                <div class="m-0" style="font-size: 18px !important; margin-top: -10px; color: rgba(0,0,0,0.6); font-weight: 600;">
                    R$ -6.081,12
                </div>
            </div>
            <div>
                <ul>
                    <li class="meu-menu active-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/inicio-cinza.png">
                        </span>
                        Início
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/transacoes-cinza.png">
                        </span>
                        Transações
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/clientes-cinza.png">
                        </span>
                        Clientes
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/link-cinza.png">
                        </span>
                        Links de Pagamentos
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/recebimentos-cinza.png">
                        </span>
                        Recebimentos
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="icons/icons-menu/configuracoes-cinza.png">
                        </span>
                        Configurações
                    </li>
                    <li class="meu-menu">
                        <span class="m-icon-menu">
                            <img src="https://zouti-media.s3.us-west-2.amazonaws.com/increase-limit-icon.svg">
                        </span>
                    Solicitar Aumento
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="topbar" class="bg-white">
      <div style="padding: 0 25px; position: relative;">
        <div id="logo" class="d-lg-none-custom" style="position: absolute; top: 10px;">
            <div>
                <div style="padding: 15px 0px 0px 0px; cursor: pointer;" onclick="toggleSidebar()">
                    <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                    <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                    <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                </div>
            </div>
        </div>
        <div id="logo" class="mobile-logo">
            <div>
                <img _ngcontent-lvh-c121="" class="logo" src="https://content.pay.zouti.com.br/tenants/pay.zouti.com.br/logo.png">
            </div>
        </div>
        <div id="username" style="height: 58px; display: flex; align-items: center;">
            <div class="verde text-center" style="display: inline-flex; width: 30px; height: 30px; border-radius: 100px; padding-bottom: 10px; justify-content: center; align-items: center; padding-top: 10px; color: #fff;">
            <span style="font-size: 16px; font-weight: bold;"> S </span>
            </div>
            <span style="font-size: 14px; margin-left: 10px;" class="hidden-name">
                <strong style="letter-spacing: 0.32px;">Samuel Bittercourt Reis Correia</strong>
            </span>
        </div>
      </div>
    </div>
    <div id="content">
        <div class="pd-main">
            <div class="row">
              <!-- Primeira metade -->
                <div class="col-lg-9 col-lg-9-perso">
                      <div style="position: relative; padding-top: 8px;">
                          <div style="position: absolute; top: 9px; left: -20px; width: 3px;
                          background-color: rgba(197, 219, 31); width: 3px; height: 40px;">
                          </div>

                          <div class="row">
                            <div class="col-lg-6 p-0">
                                <h2 style="font-size: 22px; font-weight: 600;">Dashboard</h2>
                                <p style="font-size: 14px; opacity: 0.4; margin: 0;">
                                  Atualizações a todo instante.
                                </p>
                            </div>
                            <div class="col-lg-6">
                              <!-- Calendario -->
                              <div class="flex-flex">
                                <div style="background: #fff; border-radius: 20px; border: 1px solid rgba(0,0,0,0.1); text-align: center; width: 240px; padding: 5px 0;">
                                  <span>
                                    <img src="icons/calendario.png" width="15">
                                  </span>
                                  <input type="text" id="demo" style="font-size: 13.3px; background: none; border: none; width: 180px; padding: 0 10px;"/>
                                  <i class="fa fa-user"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    <div class="mb-3">
                        <div class="row bg-white b-radius-8" style="padding: 0px 0px !important; margin-top: 30px !important;">
                            <div class="col-lg-4 p-4">
                                <div style="font-size: 14px; opacity: 0.4; margin-bottom: 5px;">
                                    Total em Vendas
                                </div>
                                <div>
                                    <span style="font-size: 20px; font-weight: 600;">R$ 142.839,37</span>
                                    <span class="arrow-up"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 p-4">
                                <div style="font-size: 14px; opacity: 0.4; margin-bottom: 5px;">
                                    Pedidos pagos
                                </div>
                                <div>
                                    <span style="font-size: 20px; font-weight: 600;">R$ 0,00</span>
                                    <span class="arrow-up"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 p-4">
                                <div style="font-size: 14px; opacity: 0.4; margin-bottom: 5px;">
                                    Ticket médio
                                </div>
                                <div>
                                    <span style="font-size: 20px; font-weight: 600;">R$ 0,00</span>
                                    <span class="arrow-up"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- Grafico de montanha
                        ####################
                        ####################
                    -->

                    <div class="bg-white p-4 mb-3 b-radius-8">
                       <div>
                           <h5 style="font-size: 16px; font-weight: 600;">Vendas por dia</h5>
                           <p style="font-size: 14px; opacity: 0.4;">Acompanhe o volume diario da sua empresa</p>
                       </div>
                       <div>
                           <canvas id="meuGrafico" style="height: 370px;"></canvas>
                       </div>
                    </div>

                    <!-- Vendas por métodos -->
                    <div class="row">
                    <div class="col-lg-5 p-0 pe-lg-2 mb-3">
                        <div class="bg-white b-radius-8 p-3">

                    <div class="">
                        <div class="pb-1">
                                            <h5 class="m-0" style="font-size: 15px; font-weight: bold; color: #000; padding-left: 10px;">Vendas por métodos
                                            </h5>
                                          </div>
                      <div class="row">
                        <div class="col-8">
                          <p class="my-3 mb-2">
                            <span class="me-1">
                              <img src="icons/icons-extras/icon-metodo-cartao.png">
                            </span>
                            <span style="font-size: 14px;">Cartão</span>
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="mb-2 mt-3 mb-2">
                            <span style="font-size: 14px;"><b>000%</b></span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 mb-2">
                            <span class="me-1">
                              <img src="icons/icons-extras/icon-metodo-boleto.png" style="width: 22px;">
                            </span>
                            <span style="font-size: 14px;">Boleto</span>
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="my-2 mt-3">
                            <span style="font-size: 14px;"><b>0%</b></span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 mb-2">
                            <span class="me-1">
                              <img src="icons/icons-extras/icon-metodo-pix.png">
                            </span>
                            <span style="font-size: 14px;">PIX</span>
                          </p>
                        </div>
                        <div class="col-4 text-end">
                          <p class="my-3">
                            <span style="font-size: 14px;"><b>0%</b></span>
                          </p>
                        </div>
                        <div style="padding-bottom: 7px;"></div>
                      </div>
                    </div>
                  </div>

                            </div>

                            <!-- Vendas no cartão -->
                            <div class="col-lg-7 p-0 ps-lg-2 mb-3">
                        <div class="bg-white b-radius-8 p-3">

                    <div class="">
                        <div class="pb-1">
                            <h5 class="m-0" style="font-size: 15px; font-weight: bold; color: #000; padding-left: 10px;">Vendas no Cartão
                                            </h5>
                                          </div>
                      <div class="row">
                        <div class="col-7 col-lg-8">
                         <p class="m-0" style="font-size: 14px; opacity: 0.4;">Valor em vendas no periodo</p>

                         <h2 style="font-size: 22px; font-weight: 600; margin-top: 20px;">
                           R$ 0,00
                         </h2>

                         <p class="m-0" style="font-size: 14px; opacity: 0.4;">Aumente suas vendas no cartão aplicando descontos e incentivos.</p>

                        </div>
                        <div class="col-5 col-lg-4 text-end">
                          <div>
                            <div class="chart-progress2 custom-green" data-series="72" data-progress_variant="true"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                            </div>

                </div>

                <div class="p-0">

                        <div class="row">
                            <div class="col-lg-6 p-0 pe-lg-2 mb-3">
                                <div class="bg-white b-radius-8">
                                <div class="p-3">
                                <div class="row">
                                    <div class="col-6">
                                      <p class="m-0 text-14">
                                        Vendas no Pix
                                      </p>
                                    </div>
                                    <div class="col-6 text-end">
                                      <p class="m-0" >
                                        <span style="background-color: rgba(186, 206, 28,0.2); color: rgba(186, 206, 28,1);" class="rounded-3 text-13 p-1 px-3">
                                          0%
                                        </span>
                                      </p>
                                    </div>
                                </div>
                    <div class="">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0 text-21" style="font-weight: 600; padding: 15px 0;">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3 rounded-3" style="height: 8px; background-color: rgba(186, 206, 28,0.2);">
                            <div class="my-3 rounded-3" style="height: 8px; background-color: rgba(186, 206, 28,1); width: 80%;">
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

                <div class="col-lg-6 p-0 ps-lg-2 mb-3">
                                <div class="bg-white b-radius-8">
                                <div class="p-3">
                                <div class="row">
                                    <div class="col-6">
                                      <p class="m-0 text-14">
                                        Vendas no Boleto
                                      </p>
                                    </div>
                                    <div class="col-6 text-end">
                                      <p class="m-0" >
                                        <span style="background-color: rgba(186, 206, 28,0.2); color: rgba(186, 206, 28,1);" class="rounded-3 text-13 p-1 px-3">
                                          0%
                                        </span>
                                      </p>
                                    </div>
                                </div>
                    <div class="">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="m-0 text-21" style="font-weight: 600; padding: 15px 0;">R$ 0,00</h4>
                        </div>
                        <div>
                          <div class="col-12 my-3 rounded-3" style="height: 8px; background-color: rgba(186, 206, 28,0.2);">
                            <div class="my-3 rounded-3" style="height: 8px; background-color: rgba(186, 206, 28,1); width: 80%;">
                              <!-- grafico volume-->
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <p class="m-0 text-11" >
                            Volume total: <b>R$ 0,00</b>
                          </p>
                        </div>

                      </div>
                    </div>
                    </div>
                  </div>
                            </div>
                        </div>
                    </div>

              </div>
                <!-- Fim Primeira metade -->

                <!-- Segunda metade -->

                <div class="col-lg-3 col-lg-3-perso">
                    <div class="mb-3">
                        <div class="bg-white p-4 b-radius-8">
                        <div>
                        <h5 class="m-0 text-16" style="font-weight: bold; color: #000; padding-bottom: 5px;">Índices</h5>
                        <p class="text-14" style="opacity: 0.4;">Boletos, PIX e Chargebaks</p>
                      </div>
                    <div>
                      <ul class="p-0 m-0" style="position: relative; height: 405px;">
                        <li class="d-flex" style="position: absolute; top: -10px;">
                          <div class="chart-progress me-3 custom-green" data-series="1" data-progress_variant="true"></div>

                          <div class="row w-100 align-items-center">
                            <div class="col-9">
                              <div class="me-2">
                                <h6 class="mb-1">Boletos</h6>
                                <small style="opacity: 0.7;">Conversão</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex" style="position: absolute; top: 95px;">
                          <div class="chart-progress me-3 custom-green" data-series="1" data-progress_variant="true"></div>
                          <div class="row w-100 align-items-center">
                            <div class="col-11">
                              <div class="me-2">
                                <h6 class="mb-1">Pix</h6>
                                <small style="opacity: 0.7;">Conversão</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex" style="position: absolute; top: 200px;">
                          <div class="chart-progress me-3 custom-red" data-series="72" data-progress_variant="true">
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
                        <li class="d-flex" style="position: absolute; top: 305px;">
                          <div class="chart-progress me-3 custom-red" data-series="72" data-progress_variant="true"></div>
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
                    </div>

                    <!-- Grafico de Barras -->
                    <div class="mb-3">
                        <div class="bg-white p-4 b-radius-8">
                            <div>
                                <h2 style="font-size: 16px; font-weight: 600; margin-bottom: 4px;">
                                  Parcelas no Cartão
                                </h2>
                                <p style="font-size: 14px; opacity: 0.4;" class="m-0">
                                  Número de transações
                                </p>
                            </div>
                            <div>
                               <canvas id="myChart" style="height: 300px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white b-radius-8">
                    <div class="p-2">
                        <div>
                          <h5 class="card-title m-0 text-16" style="font-size: 16px; font-weight: bold; color: #000; padding-top: 20px; padding-left: 10px; padding-bottom: 10px;">Taxas de Rastreio</h5>
                        </div>
                      <div class="row">
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-2">
                              <img src="icons/icons-extras/icon-aguardando-envio.png" style="width: 20px;">
                            </span>
                            <span>
                              Aguardando envio
                            </span>
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>215</b>
                            <span style="opacity: 0.6;">
                              (0%)
                            </span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-2">
                              <img src="icons/icons-extras/icon-a-caminho.png" style="width: 20px;">
                            </span>
                            A caminho
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>0</b>
                            <span style="opacity: 0.6;">
                              (0%)
                            </span>
                          </p>
                        </div>
                        <div class="col-8">
                          <p class="my-3 text-14">
                            <span class="me-2">
                              <img src="icons/icons-extras/icon-entregue.png" style="width: 20px;">
                            </span>
                            Entregue
                          </p>
                        </div>
                        <div class="col-4 text-end" style="color: #000;">
                          <p class="my-3 text-14">
                            <b>0</b>
                            <span style="opacity: 0.6;">
                              (0%)
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                </div>

                <!-- Fim Segunda metade -->

            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>    <br><br><br><br><br><br>

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
    @endsection
