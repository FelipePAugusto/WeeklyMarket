@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row" style="margin-bottom: -20px">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow" style="height: 300px">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center" style="margin-bottom: -30px">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Performance das Vendas</h6>
                                <h2 class="text-white mb-0">Valores das Vendas</h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <!--
                                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="R$" data-suffix="0">
                                        <a href="{{ route('ordens.listar') }}" class="nav-link py-2 px-3 active" data-toggle="tab">
                                            <span class="d-none d-md-block">Ver Tudo</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" >
                        <!-- Chart -->
                        <div class="chart" style="height: 200px">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow" style="height: 300px">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col" style="margin-bottom: -15px">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Vendas Mensais</h6>
                                <h2 class="mb-0" style="margin-top: -2px">Total Vendas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="margin-top: -13px">
                        <!-- Chart -->
                        <div class="chart" style="height: 200px">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" style="margin-bottom: -50px">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card shadow" style="margin-right: -4px">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Clientes em Destaque</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('clientes.listar') }}" class="btn btn-sm btn-primary">Ver tudo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nome Cliente</th>
                                    <th scope="col">Valor Total</th>
                                    <th scope="col">Ordens</th>
                                    <th scope="col">Porcentagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        João
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        40
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 43%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Pedro
                                    </th>
                                    <td>
                                        985
                                    </td>
                                    <td>
                                        39
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 45%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Maria
                                    </th>
                                    <td>
                                        513
                                    </td>
                                    <td>
                                        24
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 36%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Juquinha
                                    </th>
                                    <td>
                                        250
                                    </td>
                                    <td>
                                        17
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 87%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Flavia
                                    </th>
                                    <td>
                                        795
                                    </td>
                                    <td>
                                        90
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 37%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" >
                <div class="card shadow" >
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Produtos mais Vendidos</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('produtos.listar') }}" class="btn btn-sm btn-primary">Ver tudo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Quant Vendas</th>
                                    <th scope="col">Porcentagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Laranja
                                    </th>
                                    <td>
                                        1480
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Maçã
                                    </th>
                                    <td>
                                        5480
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">70%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Banana
                                    </th>
                                    <td>
                                        4807
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">80%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Pera
                                    </th>
                                    <td>
                                        3678
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">75%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Uva
                                    </th>
                                    <td>
                                        2645
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">30%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="../resources/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../resources/assets/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush