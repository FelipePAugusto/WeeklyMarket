<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
  <nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="#!" class="brand-logo">Sistema</a>
        <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
          @else
            <li><a href="{{route('admin.cursos')}}">Produtos/Serviços</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
          @endif

        </ul>
        <ul class="side-nav" id="mobile">
          <li><a href="/">Home</a></li>
          @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
          @else
            <li><a href="{{route('admin.cursos')}}">Produtos/Serviços</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>


@section('titulo','Feirante')

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

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    Materialize.updateTextFields();
    $(".button-collapse").sideNav();
  });
</script>
</body>
</html>
