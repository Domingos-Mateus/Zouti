@extends('dashboard.template')

@section('conteudo')

    <div id="content" style="padding-top: 70px;">
        <div class="pd-content">
            <div class="content-wrapper">
            <!-- Content -->

            <div style="margin-bottom: 25px;">
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
                  <button class="col-12 btn" style="background-color: rgba(186, 206, 28,1); color: #000; font-weight: 600; padding: 5px 25px;">
                    <span class="fa fa-plus" style="font-size: 18px;"></span>
                    <span style="font-size: 13px;">Criar transação manual</span>
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
                  <span style="font-size: 14px; opacity: 0.7;">2.364 Registos</span>
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
        </div>

            <div class="container-xxl flex-grow-1 container-p-y p-0 m-0">

            <!-- Basic Bootstrap Table -->

              <div>
                <div style="overflow-x: auto; white-space: nowrap;">

    <ul class="filter-select" style="list-style: none; padding: 0; margin: 0;">
        <li>
            <select class="form-select filter mb-3">
              <option selected disabled>Transação</option>
            </select>
        </li>

        <li>
            <select class="form-select filter mb-3">
              <option selected disabled>Cliente</option>
            </select>
        </li>

        <li>
            <select class="form-select filter mb-3">
              <option selected disabled>Forma de Pagamento</option>
            </select>
        </li>

        <li >
            <select class="form-select filter mb-3">
              <option selected disabled>Status</option>
            </select>
        </li>

        <li >
            <select class="form-select filter mb-3">
              <option selected disabled>Parcelas</option>
            </select>
        </li>

        <li >
            <select class="form-select filter mb-3">
              <option selected disabled>Entrega</option>
            </select>
        </li>
    </ul>

</div>


                <div class="table-responsive text-nowrap">
                  <div class="custom-table">
    <div class="row header-row hidden-th" style="color: rgba(0,0,0,0.7) !important;">
        <div class="cell td-min-2" style="padding: 22px 20px;">CLIENTE</div>
        <div class="cell td-min" style="padding: 22px 20px;">FORMA DE PAGAMENTO</div>
        <div class="cell td-min" style="padding: 22px 20px;">STATUS</div>
        <div class="cell td-min-2" style="padding: 22px 20px;">PRODUTO</div>
        <div class="cell td-min" style="padding: 22px 20px;">DATA DA TRANSAÇÃO</div>
        <div class="cell td-min" style="padding: 22px 20px;">DATA DE PAGAMENTO</div>
    </div>



    @foreach($transacoes as $transacao)


    <div class="row data-row row-mb">
        <div class="cell td-min-2 hidden-th">
          <div style="display: flex; flex-direction: row; align-items: start;">
                            <div class="me-2" style="display: inline-flex; width: 32px; height: 32px; color: #fff; justify-content: center; align-items: center; background: #b0b0b0; padding: 0 10px;">
                                {{$transacao->abreviacao}}
                            </div>
                            <div style="display: inline-block;">
                              <p class="m-0" style="font-size: 14px;">{{$transacao->nome_cliente}}</p>
                              <p class="m-0 opacity-4" style="font-size: 11.5px;">{{$transacao->email}}</p>
                            </div>
          </div>
        </div>
        <div class="cell td-min">
            <div>
                @if($transacao->forma_pagamento=="PIX")
          <div style="display: flex; flex-direction: row; align-items: start;">

                            <div class="me-2" style="display: inline-block; width: 32px; height: 32px;">
                                <img src="../icons/icons-transacoes/icon-pix.png">
                            </div>

                            <div style="display: inline-block;">
                              <p class="m-0" style=" font-size: 14px;">
                                R$ 123,48
                              </p>
                              <p class="m-0 opacity-4" style="font-size: 11.5px;">
                                {{$transacao->forma_pagamento}}
                              </p>
                            </div>
                          </div>
        </div>
        @endif

        @if($transacao->forma_pagamento=="Cartão")
          <div style="display: flex; flex-direction: row; align-items: start;">

                            <div class="me-2" style="display: inline-block; width: 32px; height: 32px;">
                                <img src="../icons/icons-transacoes/icon-visa.png">
                            </div>

                            <div style="display: inline-block;">
                              <p class="m-0" style=" font-size: 14px;">
                                R$ 123,48
                              </p>
                              <p class="m-0 opacity-4" style="font-size: 11.5px;">
                                {{$transacao->forma_pagamento}}
                              </p>
                            </div>
                          </div>
        </div>
        @endif

    </div>
        <div class="cell td-min">
          <div class="justify-content-end-end">
            <div>
                             <div>
                                @if($transacao->status=="Pendente")
                                <span class="badge bg-label-pendente me-1 filter">
                                  <div class="status-transacoes pendente"></div>
                                  {{$transacao->status}}
                                </span>
                                @endif

                                @if($transacao->status=="Pago")
                                <span class="badge bg-label-pago me-1 filter">
                                  <div class="status-transacoes pago"></div>
                                  {{$transacao->status}}
                                </span>
                                @endif

                                @if($transacao->status=="recusado")
                                <span class="badge bg-label-recusado me-1 filter">
                                  <div class="status-transacoes recusado"></div>
                                  {{$transacao->status}}
                                </span>
                                @endif
                              </div>

                              <div class="data-status">
                                22 de dez. 00:10
                              </div>
                            </div>
                            </div>
        </div>
        <div class="cell td-min-2 hidden-th">
          <div style="display: inline-block;">
                            <p class="m-0" style=" font-size: 14px;">
                                {{$transacao->nome_produto}}
                            </p>
                            <p class="m-0" style="font-size: 11.5px;">
                                R$  {{$transacao->valor_produto}}
                            </p>
                          </div>
        </div>
        <div class="cell td-min hidden-th">
           <div>
                          <span class="text-13 opacity-4">{{$transacao->data_pagamento}}</span>
                          </div>
        </div>
        <div class="cell td-min hidden-th">
           <div>
                          <span class="text-13 opacity-4">{{ \Carbon\Carbon::parse($transacao->created_at)->diffForHumans() }}</span>
                          <div>
        </div>
    </div>
    <!-- Adicione mais linhas de dados conforme necessário -->
</div>

                </div>
                @endforeach

    <!-- Adicione mais linhas de dados conforme necessário -->
</div>

                </div>
    <!-- Adicione mais linhas de dados conforme necessário -->
</div>

                </div>

              </div>

              <div class="py-4">
                <div class="text-center">
                    {{ $transacoes->links() }}
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

            </div>
            <!--  Topic and Instructors  End-->



            <!-- / Content -->



            <div class="content-backdrop fade"></div>
          </div>
        </div>
    </div>

    @endsection
