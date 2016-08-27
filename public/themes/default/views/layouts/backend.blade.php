<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{theme('css/angular-material.min.css')}}">
    <link rel="stylesheet" href="{{theme('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{theme('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{theme('css/style.css')}}">

    <!-- JavaScripts -->
    <script src="{{theme('js/angular.min.js')}}"></script>
    <script src="{{theme('js/angular-animate.min.js')}}"></script>
    <script src="{{theme('js/angular-aria.min.js')}}"></script>
    <script src="{{theme('js/angular-messages.min.js')}}"></script>
    <script src="{{theme('js/angular-material.min.js')}}"></script>
    <script src="{{theme('js/jquery.min.js')}}"></script>
    <script src="{{theme('js/bootstrap.min.js')}}"></script>
    <script src="{{theme('js/bootstrapvalidation.min.js')}}"></script>
    <script src="{{theme('js/mask.min.js')}}"></script>
    <script src="{{theme('js/script.js')}}"></script>
    <script src="{{theme('js/app.js')}}"></script>


</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                CNPJ - Project
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>

                @if(! Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Clientes <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Novo</a></li>
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>CNPJ</a></li>
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Todos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Tarafeas <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Abertas</a></li>
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Fechados</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Cadastro</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                        </ul>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')



</body>
</html>
