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
    {!! MaterializeCSS::include_full() !!}
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    
    <!-- <link href="{{ asset('css/material-design-color-palette.min.css') }}" rel="stylesheet"> -->
<!--     <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!--     <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialicons.css')}}"> -->
    <!-- <link href="{{ asset('css/normalize.css') }}" rel="stylesheet"> -->
</head>
<body>
  <nav class="nav-wrapper navpr2 ">
 <ul class="right ulnav">
<li id="btnlogin" ><a href="{{ url('login') }}" style="color: black;"><i class="material-icons right" >person</i>INICIAR SESION</a></li>
</ul>
</nav>
    <!-- <div > -->
      <img class=" brand-logo " style="padding-left: 30px; position: absolute; padding-top: 10px;" id="imglog" href="{{ url('/') }}" src="{{asset('img/logo.jpg')}}" width="13%">
        <nav>
            <div class="nav-wrapper navpr">
              <!-- <img class=" brand-logo " style="padding-left: 30px; " id="imglog" href="{{ url('/') }}" src="{{asset('img/logo.jpg')}}" width="13%"> -->
              <ul class="centrado">
                <li class="cftli"><a  href="{{ url('/') }}" class="cfca">Inicio</a></li>
                <li class="cftli offset-l2"><a href="{{ url('products') }}" class="cfta">Equipo</a></li>
                <li class="cftli"><a  href="{{ url('catalogo') }}" class="cfca">Catalogo</a></li>
                @if(Auth::check()  && Auth::user()->type=="Admin")
                <li class="cftli" style="background-color: black"> <a  href="{{ url('warehouse/create') }}" class="cfca">Almacen</a>
                  </li>
                @endif
              </ul>
              <ul class="right">
                <!-- <li id="btnlogin"><a href="#!"><i class="material-icons right" >person</i>Login</a></li> -->
                <li>           
                <a href="{{url('/carrito')}}" >
                
                  <i class="material-icons right boton" >local_grocery_store</i>
                <h6 class="n center" style="color: black">{{$productsCount}}</h6></a>
                
              
                </li>
              </ul>
            </div>
          </nav>
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
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script> -->
</body>
</html>
