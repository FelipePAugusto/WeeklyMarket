<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('../resources/assets/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{URL::asset('../resources/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('../resources/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{URL::asset('../resources/assets/css/argon.css?v=1.2.0')}}" type="text/css">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Weekly Market') }}</title>
    <!-- Favicon -->
    <link href="{{URL::asset('../resources/argon/img/brand/favicon.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-laravel" />
    <!--  Social tags      -->
    <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- <link type="text/css" href="{{URL::asset('../resources/argon/css/argon.css?v=1.0.0')}}" rel="stylesheet"> -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script type="text/javascript">
      var input = document.querySelector('#numero');
      var div = document.querySelector('#asdiv');
      input.addEventListener('keyup', function () {
        div.innerHTML = input.value;
      });
    </script>

    <!-- Argon CSS -->
    <!-- Argon JS -->
    <script src="{{URL::asset('../resources/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>    <!-- Icons -->
    <link href="{{URL::asset('../resources/argon/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <script src="{{URL::asset('../resources/argon/js/argon.js?v=1.0.0')}}"></script>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </head>

<body>
<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{ url('/home') }}" style="margin-bottom: -23px; margin-top: 12px">
          <img src="{{URL::asset('../public/img/sistema/logo.png')}}" class="navbar-brand-img" alt="..." >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{ url('/home') }}">
                  <img src="{{URL::asset('../resources/argon/img/brand/blue.png')}}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Form -->
          <!-- <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                  <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                  <div class="input-group-prepend">
                      <div class="input-group-text">
                          <span class="fa fa-search"></span>
                      </div>
                  </div>
              </div>
          </form> -->
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">
                <i class="ni ni-tv-2 text-primary"></i>Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                <i class="ni ni-settings-gear-65 text-red" style="color: #f4645f;"></i>
                <span class="nav-link-text" style="color: #f4645f;">Configurações</span>
              </a>

              <div class="collapse show" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Perfil Administrador
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item   ">
              <a class="nav-link" href="{{ route('clientes.listar') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Clientes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('feirantes.listar') }}">
                <i class="ni ni-shop text-orange"></i>
                <span class="nav-link-text">Feirantes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('formas_pagamento.listar') }}">
                <i class="ni ni-credit-card text-green"></i>
                <span class="nav-link-text">Formas de Pagamento</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('produtos.listar') }}">
                <i class="ni ni-basket text-black-50"></i>
                <span class="nav-link-text">Produtos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('ordens.listar') }}">
                <i class="ni ni-delivery-fast text-red"></i>
                <span class="nav-link-text">Ordens de Serviço</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="{{ url('/home') }}" class="font-weight-bold ml-1" target="_blank">Weekly Market</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
<!-- Main content -->
<div class="main-content" id="panel">
  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Pesquisar" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{URL::asset('../public/img/usuario/perfil.png')}}">
                  </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem-vindo {{ Auth::user()->name }}!</h6>
              </div>
              <a href="{{ url('/profile') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Perfil Administrador</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ url('/logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Sair</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">

  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row" >
      <div class="col">
        <div class="card" style="margin-bottom: -1px">
          <!-- Card header -->

          <div class="card-header border-0" style="margin-bottom: -5px">
            <div class="row align-items-center" style="margin-top: -5px">
              <div class="col-8">
                <h3 class="mb-0">Clientes</h3>

                @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
              </div>

              <div class="col-4 text-right">
                <a href="{{ route('clientes_adicionar') }}" class="btn btn-sm btn-primary">Adicionar Cliente</a>
              </div>
            </div>
          </div>

          <div class="col-12">
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="nome">Nome</th>
                <th scope="col" class="sort" data-sort="email">Email</th>
                <th scope="col" class="small" data-sort="status">Status</th>
                <th scope="col" class="small" data-sort="celular" >Celular</th>
                <th scope="col" class="sort" data-sort="endereco">Endereço</th>
                <th scope="col"></th>
              </tr>
              </thead>
              <tbody class="list">
              @foreach($clientes as $cliente)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{asset($cliente->imagem)}}">
                    </a>
                    <div class="media-body">
                      <span class="nome mb-0 text-sm">{{ $cliente->nome }}</span>
                    </div>
                  </div>
                </th>
                <td class="email">
                  {{ $cliente->email }}
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    @if($cliente->status == "Analisando")
                      <i class="bg-warning"></i>
                    @elseif($cliente->status == "Bloqueado")
                      <i class="bg-danger"></i>
                    @else
                      <i class="bg-info"></i>
                    @endif
                    <span class="status">{{ $cliente->status }}</span>
                  </span>
                </td>
                <td class="status" style="margin-top: -20px">
                  {{ $cliente->celular }}
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="endereco mr-2">{{ $cliente->endereco }}</span>

                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="{{ route('clientes.editar',$cliente->id) }}">Editar</a>
                      <a class="dropdown-item" href="{{ route('clientes.visualizar',$cliente->id) }}">Visualizar</a>
                      <a class="dropdown-item" href="{{ route('clientes.excluir',$cliente->id) }}">Excluir</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach

              <!--
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/angular.png')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Feirante Pedro</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $1800 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">completed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">

                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/sketch.png')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Feirante Maria</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $3150 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">delayed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">

                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">72%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/react.png')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Feirante Flavia</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $4400 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i>
                        <span class="status">on schedule</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">

                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">90%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/vue.png')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Feirante Marcos</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $2200 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">completed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">

                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr> -->
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item">
                  <a class="page-link" href="{{ $clientes->previousPageUrl() }}" tabindex="-1" rel="prev">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                @for($i = 0; $i < $clientes->lastPage(); $i++)
                <li class="page-item {{$clientes->currentPage() == $i+1 ? 'active' : ''}}">
                  <a class="page-link" href="{{$clientes->url($i+1)}}">{{$i+1}}</a>
                </li>
                @endfor
                {{-- Next Page Link --}}
                @if ($clientes->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $clientes->nextPageUrl() }}" rel="next">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                @endif
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark table -->
    <!-- <div class="row">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="card-header bg-transparent border-0">
            <h3 class="text-white mb-0">Dark table</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush">
              <thead class="thead-dark">
              <tr>
                <th scope="col" class="sort" data-sort="name">Project</th>
                <th scope="col" class="sort" data-sort="budget">Budget</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col">Users</th>
                <th scope="col" class="sort" data-sort="completion">Completion</th>
                <th scope="col"></th>
              </tr>
              </thead>
              <tbody class="list">
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/bootstrap.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $2500 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-1.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-2.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-3.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-4.jpg')}}">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">60%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/angular.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $1800 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">completed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-1.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-2.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-3.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-4.jpg')}}">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/sketch.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Black Dashboard</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $3150 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">delayed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-1.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-2.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-3.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-4.jpg')}}">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">72%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/react.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">React Material Dashboard</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $4400 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i>
                        <span class="status">on schedule</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-1.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-2.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-3.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-4.jpg')}}">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">90%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/vue.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  $2200 USD
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">completed</span>
                      </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-1.')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-2.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-3.jpg')}}">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{URL::asset('../resources/assets/img/theme/team-4.jpg')}}">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Footer -->
    <!-- <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Weekly Market</a>
          </div>
        </div>
      </div>
    </footer> -->
  </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{URL::asset('../resources/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::asset('../resources/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('../resources/assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{URL::asset('../resources/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{URL::asset('../resources/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{URL::asset('../resources/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>