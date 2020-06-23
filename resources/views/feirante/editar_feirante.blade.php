@extends('layouts.site')

@section('titulo','Adicionar Feirante')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Feirante</h3>
        <div class="row">
            <form class="" action="{{route('feirante.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('feirante._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
