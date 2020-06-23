@extends('layouts.site')

@section('titulo','Adicionar Feirante')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Feirante</h3>
        <div class="row">
            <form class="" action="{{route('feirante.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('feirante._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>
@endsection
