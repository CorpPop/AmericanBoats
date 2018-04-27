@extends("layouts.app")

@section("content")
{!! MaterializeCSS::include_full() !!}



<div class="center">
	<h1>Productos</h1>
</div>

<div class="row">
 <div class="container">
	<div id="menu">
<ul id="nav" >
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Servicios</a>
<ul class="submenu">
    <li><a href="#">Marketing</a>
<ul class="subsubmenu">
    <li><a href="#">Precios</a></li>
    <li><a href="#">Consultas</a></li>
</ul>
</li>
    <li><a href="#">Mercadotecnia</a></li>
    <li><a href="#">Encuestas</a></li>
</ul>
</li>
    <li><a href="#">Nosotros</a>
<ul class="submenu">
    <li><a href="#">Vision</a></li>
    <li><a href="#">Mision</a></li>
</ul>
</li>
    <li><a href="#">Otros</a></li>
    <li><a href="#">Contactanos</a></li>
</ul>
</div>
</div>
</div>

<div class="container">
	<div class="row">
    @foreach ($products as $product)
      <div class="card  col l3 m3 s3 offset-m1 offset-l1 offset-s1">
        <div class="card-image">
          <img class="materialboxed" width="650" data-caption="{{ $product->title }}" src="{{asset('img/Tabla.jpg')}}"  >
          
        </div>
        <div class="card-content">
          <span  class="card-title" style="color:black; font-size: 1em;">{{ $product->title }}</span>
        </div>
        <div class="card-action">
          <a href="{{url('/products/'.$product->id.'')}}" style="color:black">{{ $product->pricing }}<i class="material-icons right boton">local_grocery_store</i></a>
        </div>
      </div>
      @endforeach

    </div>
  </div>
  
<script type="text/javascript">
	$(document).ready(function(){
    $('.materialboxed').materialbox();
// <![CDATA[
function mainmenu(){ // Oculto los submenus 
$(" #nav ul ").css({display: "none"}); // Defino que submenus deben estar visibles cuando se pasa el mouse por encima 
$(" #nav li").hover(function(){   
	$(this).find('ul:first:hidden').css({visibility: "visible",display: "none"
             }).slideDown(400);},function(){       
		$(this).find('ul:first').slideUp(400);  
	  });} 
$(document).ready(function(){     
	mainmenu(); 
     });
// ]]>
  });
</script>



<!--<div class="container">
	<table class="responsive-table">
		<thead>
			<tr>
				<td>ID</td>
				<td>Titulo</td>
				<td>Descripción</td>
				<td>Precio</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->title }}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->pricing }}</td>
				<td>
					<a class="btn-large" href="{{url("/products/$product->id")}}">Ver</a>
					<a class="btn-large" href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
					<a class="btn-large red" href="{{url('/products/'.$product->id.'')}}">Buy</a>
					@include('products.delete',['product' => $product])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>-->
@endsection