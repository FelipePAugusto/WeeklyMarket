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
                <a href="{{ url('/home') }}" class="brand-logo">Sistema</a>
                <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li><a href="{{route('feirante.adicionar')}}">Feirantes</a></li>
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{ url('/logout') }}">Sair</a></li>
                    @endif

                </ul>
                <ul class="side-nav" id="mobile">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li><a href="{{route('feirante.adicionar')}}">Feirantes</a></li>
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{ url('/logout') }}">Sair</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
