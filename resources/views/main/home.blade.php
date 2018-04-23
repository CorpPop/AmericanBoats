
@section('content')
@extends('layouts.app')
{!! MaterializeCSS::include_full() !!}  
 <div class="row">
  <div class="slider sli">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
 </div>   
                                       <H4 class="center">LO MEJOR DE AMERICAN BOATS</H4>

    <div class="container">	
    <div class="row">
      <div class="card col l4 m4 s4 offset-m1 offset-l1 offset-s1">
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


<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').slider();

  });
</script>

@endsection