<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title', 'AmericanBoats') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    
    <!-- <link href="{{ asset('css/material-design-color-palette.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialicons.css')}}">
    <!-- <link href="{{ asset('css/normalize.css') }}" rel="stylesheet"> -->
</head>
<body>
    <!-- <div > -->
        <nav class="nav-extended navpr">
            <div class="nav-extended navli">
              <img class="imglog brand-logo circle" href="{{ url('/') }}" src="{{asset('img/logo.jpg')}}" width="13%">
              <ul class="right ">
                <li class="cftli"><a href="{{ url('products') }}" class="cfta">Productos</a></li>
                <li class="cfcli"><a class="cfca">Catalogo</a></li>
                <li id="btnlogin"><a href="#!"><i class="material-icons right" >person</i>Login</a></li>
                <li>
              <!-- Mi carrito
              <span class=""></span> -->
              <!-- <a href="{{url('/carrito')}}" class="n"><i class="material-icons right boton" >local_grocery_store</i>{{$productsCount}}</a> -->
              <!-- <button class="boton" ><i class="material-icons right" >local_grocery_store</i>
                  <div class="n" href="{{url('/carrito')}}">{{$productsCount}}</div> -->
              <!-- </button> -->
            
                <a href="{{url('/carrito')}}" >
                
                  <i class="material-icons right boton" >local_grocery_store</i>
                <h6 class="n center" style="color: black">{{$productsCount}}</h6></a>
                
              
                </li>
              </ul>
            </div>
          </nav>


<!--         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar" href="{{ url('/') }}">
                    {{ config('title', 'American Boats') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        Authentication Links
                        @guest
                            <li><a class="btn" href="{{ route('login') }}">Login</a></li>
                            <li><a class="btn" href="{{ route('register') }}">Register</a></li>
                        @else
                            <l  i class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

        <main class="py-4">
            @yield('content')
        </main>
    <!-- </div> -->
    <footer class="page-footer " id="cfft"">
          <div class="container">
          <div class="row">
              <div class="col l6 s12">
                <img class="imglog2 brand-logo circle" src="{{asset('img/logo3.png')}}" width="40%">
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Jacr
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
