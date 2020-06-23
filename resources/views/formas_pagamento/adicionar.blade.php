@extends('layouts.app')

@section('content')
    @include('users.partials.header')

    <div class="container-fluid mt--7" >
        <div class="row" style="margin-top: -175px; margin-bottom: 15px">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image" style="margin-top: 65px; margin-bottom: -35px;">
                                <a href="#">
                                    <!-- <input type="file" name="imagem" class="btn btn-sm btn-info mr-4"> -->
                                    @if(isset($formas_pagamento) && $formas_pagamento->acao == "3")
                                        <img src="{{asset($formas_pagamento->imagem)}}" class="circle" onclick="document.getElementById('file').click();">
                                    @elseif(isset($formas_pagamento) && $formas_pagamento->acao == "2")
                                        <img src="{{asset($formas_pagamento->imagem)}}" class="circle" onclick="document.getElementById('file').click();">
                                    @else
                                        <img src="{{URL::asset('../public/img/sistema/sem_profile.png')}}" class="circle" onclick="document.getElementById('file').click();">
                                    @endif
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            @if(isset($formas_pagamento) && $formas_pagamento->acao == "3")
                                <form method="post" action="{{route('formas_pagamento.alterar_status', $formas_pagamento->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Liberado">
                                    <button type="submit" class="btn btn-sm btn-info mr-4">Liberar</button>
                                </form>
                            @endif
                            @if(isset($formas_pagamento) && $formas_pagamento->acao == "3")
                                <form method="post" action="{{route('formas_pagamento.alterar_status', $formas_pagamento->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Bloqueado">
                                    <button type="submit" class="btn btn-sm btn-danger float-right" style="margin-right: -10px;">Bloquear</button>
                                </form>
                            @endif
                        </div>
                    </div>

                    @if(isset($formas_pagamento) && $formas_pagamento->acao == "3")
                        <form method="post" action="{{route('formas_pagamento.alterar_imagem', $formas_pagamento->id)}}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <input type="file" style="display:none;" id="file" name="imagem" value="" required/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 80px; margin-bottom: -50px; margin-top: 47px">
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-sm btn-success mr-2">Alterar Imagem</button>
                                </div>
                            </div>
                        </form>
                    @elseif(isset($formas_pagamento) && $formas_pagamento->acao == "2")
                        <form method="get" action="{{route('formas_pagamento.listar')}}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="file" style="display:none;" id="file" name="file" disabled/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 75px; margin-bottom: -30px; margin-top: 47px">
                                <div class="d-flex justify-content-between">
                                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-bottom: -50px">
                                        <div class="d-flex justify-content-between">
                                            @if($formas_pagamento->status == "Analisando")
                                                <a href="" class="btn btn-sm btn-warning mr-2">Analisando</a>
                                            @elseif($formas_pagamento->status == "Bloqueado")
                                                <a href="" class="btn btn-sm btn-danger float-right">Bloqueado</a>
                                            @else
                                                <a href="" class="btn btn-sm btn-info mr-4">Liberado</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <form method="post" action="{{route('formas_pagamento_salvar')}}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="file" style="display:none;" id="file" name="file" disabled/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 95px; margin-bottom: -50px; margin-top: 75px">
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-sm btn-warning mr-2">Analisando</a>
                                </div>
                            </div>
                        </form>
                    @endif

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row" style="padding-top: -55px; margin-bottom: -15px">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading" style="margin-top: -30px;">18</span>
                                        <span class="description">Comentários</span>
                                    </div>
                                    <div>
                                        <span class="heading" style="margin-top: -70px; margin-right: 20px">19</span>
                                        <span class="description" style="margin-right: 15px">Compras</span>
                                    </div>
                                    <div>
                                        <span class="heading" style="margin-top: -30px;">40</span>
                                        <span class="description">Avaliação</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="margin-bottom: -10px">
                            <h3>
                                {{ Auth::user()->name }}<span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300" style="margin-bottom: -5px">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h5 mt-4" >
                                <i class="ni business_briefcase-24 mr-2"></i>Feirante do Boqueirão
                            </div>
                            <div style="margin-bottom: -8px">
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                            <hr class="my-4"  />
                            <a href="#" >Show more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow" >
                    <div class="card-header bg-white border-0" >
                        <div class="row align-items-center col-8" style="margin-bottom: -10px">
                            @if(isset($formas_pagamento->nome) && $formas_pagamento->acao == "3")
                                <h2 class="mb-0" style="margin-top: -10px">Editar Forma de Pagamento</h2>
                            @elseif(isset($formas_pagamento->nome) && $formas_pagamento->acao == "2")
                                <h2 class="mb-0" style="margin-top: -10px">Visualizar Forma de Pagamento</h2>
                            @else
                                <h2 class="mb-0" style="margin-top: -10px">Adicionar Forma de Pagamento</h2>
                            @endif
                        </div>
                    </div>
                    <div class="card-body" style="margin-top: -10px">
                        @if(isset($formas_pagamento->nome) && $formas_pagamento->acao == "3")
                        <form method="post" action="{{route('formas_pagamento.atualizar', $formas_pagamento->id)}}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                        @elseif(isset($formas_pagamento) && $formas_pagamento->acao == "2")
                        <form method="get" action="{{route('formas_pagamento.listar')}}" autocomplete="off">
                            {{ csrf_field() }}
                        @else
                        <form method="post" action="{{route('formas_pagamento_salvar')}}" autocomplete="off">
                            {{ csrf_field() }}
                        @endif
                            {{ csrf_field() }}
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">Nome</label>
                                            <input type="text" name="nome" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nome da Forma de Pagamento" value="{{isset($formas_pagamento->nome) ? $formas_pagamento->nome : ''}}"  {{isset($formas_pagamento) && $formas_pagamento->acao == "2" ? 'disabled' : 'required'}} autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-current-password">Feirante</label>
                                            <select name="feirante_id" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}"  {{isset($formas_pagamento) && $formas_pagamento->acao == "2" ? 'disabled' : 'required'}}>
                                                <option value="{{isset($formas_pagamento->feirante) ? $formas_pagamento->feirante : ''}}">Escolha o Feirante</option>
                                                @foreach($feirantes as $feirante)
                                                    <option value="{{ $feirante->id }}">{{ $feirante->nome }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('feirantes'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('feirantes') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}" style="margin-top: -15px">
                                    <label class="form-control-label" for="input-email">Descrição</label>
                                    <input type="text" name="descricao" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Descrição Sobre a Forma de Pagamento" value="{{isset($formas_pagamento->descricao) ? $formas_pagamento->descricao : ''}}" {{isset($formas_pagamento) && $formas_pagamento->acao == "2" ? 'disabled' : 'required'}}>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center" style="margin-top: -20px; margin-bottom: -30px">
                                    @if(isset($formas_pagamento->nome) && $formas_pagamento->acao == "3")
                                    <button type="submit" class="btn btn-success mt-4">Alterar</button>
                                    @elseif(isset($formas_pagamento->nome) && $formas_pagamento->acao == "2")
                                    <button type="submit" class="btn btn-yellow mt-4">Voltar</button>
                                    @else
                                    <button type="submit" class="btn btn-success mt-4">Adicionar</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
