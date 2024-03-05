@extends('dashboard.template')

@section('conteudo')



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
                                    <img src="../icons/calendario.png" width="15">
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
                              <img src="../icons/icons-extras/icon-metodo-cartao.png">
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
                              <img src="../icons/icons-extras/icon-metodo-boleto.png" style="width: 22px;">
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
                              <img src="../icons/icons-extras/icon-metodo-pix.png">
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
                        <li class="d-flex" style="position: absolute; top: 95px;">
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
                        <li class="d-flex" style="position: absolute; top: 200px;">
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
                        <li class="d-flex" style="position: absolute; top: 305px;">
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
                              <img src="../icons/icons-extras/icon-aguardando-envio.png" style="width: 20px;">
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
                              <img src="../icons/icons-extras/icon-a-caminho.png" style="width: 20px;">
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
                              <img src="../icons/icons-extras/icon-entregue.png" style="width: 20px;">
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
    @endsection
