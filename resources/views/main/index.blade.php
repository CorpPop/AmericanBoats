
@section('content')
@extends('layouts.app')
{!! MaterializeCSS::include_full() !!}  
<div class="row" style="height:500px">  
  <div class="slider">
    <ul class="slides">
      <li style="height:500px">
        <img src="{{asset('img/wake3.jpg')}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           <a class="btn">COMPRAR AHORA</a>
        </div>
      </li>
      <li style="height:500px">
        <img src="{{asset('img/wake.jpg')}}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           <a class="btn">COMPRAR AHORA</a>
        </div>
      </li>
      <li style="height:500px">
        <img src="{{asset('img/wake.jpg')}}"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           <a class="btn">COMPRAR AHORA</a>
        </div>
      </li>
      <li style="height:500px">
        <img src="{{asset('img/wake3.jpg')}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           <a class="btn">COMPRAR AHORA</a>
        </div>
      </li>
    </ul>
  </div>
</div>
     <!--<div class="parallax-container">
      <div class="parallax"><img  style="width:450px" src="{{asset('img/remote.jpg')}}"></div>
    </div>-->
   <H4 class="center">LO MEJOR DE AMERICAN BOATS</H4>
         <div class="row ">
  <div class="carousel">
    <a class="carousel-item" style="width:420px;" href="#one!"><img src="{{asset('img/wake.jpg')}}"></a>
    <a class="carousel-item" style="width:420px;" href="#two!"><img src="{{asset('img/wake.jpg')}}"></a>
    <a class="carousel-item" style="width:420px;" href="#three!"><img src="{{asset('img/wake.jpg')}}"></a>
    <a class="carousel-item" style="width:420px;" href="#four!"><img src="{{asset('img/wake2.jpg')}}"></a>
    <a class="carousel-item" style="width:420px;" href="#five!"><img src="{{asset('img/wake2.jpg')}}"></a>
   </div>
 </div>   
                                       <H4 class="center">LO NUEVO DE AMERICAN BOATS</H4>

    <div class="container"> 
    <div class="row">
      <div class="card col l3 m3 s3 offset-m1 offset-l1 offset-s1">
        <div class="card-image">
          <img src="{{asset('img/Tabla.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          
        </div>
        <div class="card-action">
          <a href="#" style="color:black">$302.23</a>
          <br>
          <a href="#" style="color:black"><i class="material-icons right boton">local_grocery_store</i>6 x $31.58</a>
        </div>
      </div>
       <div class="card col l3 m3 s3 offset-m1 offset-l1 offset-s1">
        <div class="card-image">
          <img src="{{asset('img/Tabla.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          
        </div>
        <div class="card-action">
          <a href="#" style="color:black">$302.23</a>
          <br>
          <a href="#" style="color:black"><i class="material-icons right boton">local_grocery_store</i>6 x $31.58</a>
        </div>
      </div>
       <div class="card col l3 m3 s3 offset-m1 offset-l1 offset-s1">
        <div class="card-image">
          <img src="{{asset('img/Tabla.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          
        </div>
        <div class="card-action">
          <a href="#" style="color:black">$302.23</a>
          <br>
          <a href="#" style="color:black"><i class="material-icons right boton">local_grocery_store</i>6 x $31.58</a>
        </div>
      </div>
  </div>
      </div>

   <!--
    <div class="parallax-container">
      <div class="parallax"><img style="width:450px"  src="{{asset('img/wake3.jpg')}}"></div>
    </div>
-->



<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').slider();
     $('.carousel').carousel();
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 5000)
    $('.parallax').parallax();
  });


</script>

@endsection