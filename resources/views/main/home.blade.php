@extends('layouts.app')
@section('content')
<!-- <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> -->
  <!--   <script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('.carousel').carousel();
});
</script>
<main class="container" style="position: relative;">
<div class="carousel" >
	<a class="carousel-item" style="width: 400px; height: 200px; position: absolute;" href="#one!"><img src="{{asset('img/logo2.png')}}"></a>
    <a class="carousel-item" style="width: 400px; height: 200px; position: absolute;"  href="#five!"><img src="{{asset('img/lancha.jpg')}}"></a>
    <a class="carousel-item" style="width: 400px; height: 200px; position: absolute;" href="#two!"><img src="{{asset('img/Noc.jpg')}}"></a>
    <a class="carousel-item" style="width: 400px; height: 200px; position: absolute;" href="#three!"><img src="{{asset('img/wind.jpg')}}"></a>
    <a class="carousel-item" style="width: 400px; height: 200px; position: absolute;" href="#four!"><img src="{{asset('img/accesorios.jpg')}}"></a>
    
  </div>
</main>
@endsection