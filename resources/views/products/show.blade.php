@extends("layouts.app")

@section("content")	
 {!! MaterializeCSS::include_full() !!}
<div class="row" style="height:90px"></div>
<div class="row" style="background-color:black; top:90px; height:500px;">
<div id="gallery">
	<div id="gallery_output" style="position:relative; top:40px; left:90px">
		<img class="materialboxed" data-caption="" style="width:500px; height:400px; "  id="img1" src="{{url("/products/images/$product->id.$product->extension")}}" />
		<img class="materialboxed" data-caption="" style="width:500px; height:400px; "  id="img2" src="{{url("/products/images/$product->id.a.$product->extension")}}" />		
		<img class="materialboxed" data-caption="" style="width:500px; height:400px; " id="img3" src="{{url("/products/images/$product->id.b.$product->extension")}}" />
		<img class="materialboxed" data-caption="" style="width:500px; height:400px; " id="img4" src="{{url("/products/images/$product->id.c.$product->extension")}}" />	
		</div>
 <div id="gallery_nav" style="width:50px; position:absolute; top:300px">
		<a rel="img1" href="javascript:;"><img src="{{url("/products/images/$product->id.$product->extension")}}"  width="80" height="80" /></a>
		<a rel="img2" href="javascript:;"><img src="{{url("/products/images/$product->id.a.$product->extension")}}"  width="80" height="80" /></a>
		<a rel="img3" href="javascript:;"><img src="{{url("/products/images/$product->id.b.$product->extension")}}"  width="80" height="80" /></a>
		<a rel="img4" href="javascript:;"><img src="{{url("/products/images/$product->id.c.$product->extension")}}" width="80" height="80"  /></a>
	</div>
	<div class="clear"></div>
</div>
</div>
 <div class="container" >
 	<div class="card producto col col l12 m1 s1 offset-l1" style="width:400px; top:190px; height:525px;position:absolute; right: 40px; display:inline-block; ">
 		<div class="row">
 			<!--<div class="col s6 m6 ">
 				@if($product->extension)
 					<img class="product-avatar" src="{{url("/products/images/$product->id.$product->extension")}}">
 				@endif
 			</div>-->
 			<div class="container">
 			<div class="col l12 m4 s12">
 			     <div class="row"> <div class="col l12 m4 s12 ">
 			     <h5 style="font-size:2em;">{{$product->title}}</h5>
 			     </div></div>
 			    
 			     <div class="row">
 			     	
  <div class="input-field col l7 s12">
    <select>
      <option value="" disabled selected>Elige una talla...</option>
      <option value="1"></option>
    </select>
    <label>Materialize Select</label>
  </div>
   <div class="input-field col l5 s12">
    <select>
      <option value="" disabled selected>Cantidad...</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
 			     </div>
 			     <div class="row">
 			     	<p class="col l6 s12">
 					<strong>Costo</strong>
 				</p>
 				<p class="col l6 s12" style="color: red;">
 					${{$product->pricing}}
 				</p>
 			     </div>
 				
 			<div class="row">
 				<p class="col l3 s12">
 					@include('in_shopping_carts.form',['product' => $product])
 				</p>
 			</div>
      @if(Auth::check() && $product->user_id == Auth::user()->id)
    <div class="row" style="position:relative;top:100px">
    <div class="col l6 m6 s12"><a class="btn-small" style="background-color:#081d76" href="{{url('/products/'.$product->id.'/edit')}}">Editar</a></div>
      <div class="col l6 m6 s12">
        @include('products.delete',['product' => $product])
        </div>
    </div>
    @endif
 			</div>
</div>
 		</div>
 	</div>
 </div>
<div class="row">
        <div class="col l12 m2 s12"><h5 class="center">DETALLES DEL PRODUCTO</h5></div>
    	
    	<div class="row">
    		<div class="container">
    		  <div class="col l6 s12" align="justify">
    		  	   {{$product->description}}
    		  </div>    			
    		</div>

    		 <div class="row">
    		 <div class="col l6 s12">
    		 	<div class="col l6 s12" align="justify">
    		  	   {{$product->description}}
    		  </div>    
    		 </div>
    		 </div>
    	</div>
</div> 
<div class="parallax-container">
      <div class="parallax"><img  style="width:450px" src="{{asset('img/paralax2.jpg')}}"></div>
    </div>
<div class="section black">
<div class="col l12 m2 s12"><h5 class="center" style="color:white">PRODUCTOS RELACIONADOS</h5></div>     
<div class="row ">
  <div class="carousel">
    <a class="carousel-item center" style="width:400px; height:250px" href="#one!"><img src="{{asset('img/wake.jpg')}}">COMPRAR AHORA</a>
    <a class="carousel-item center" style="width:400px; height:250px" href="#two!"><img src="{{asset('img/wake.jpg')}}">COMPRAR AHORA</a>
    <a class="carousel-item center" style="width:400px; height:250px" href="#three!"><img src="{{asset('img/wake.jpg')}}">COMPRAR AHORA</a>
    <a class="carousel-item center" style="width:400px; height:250px" href="#four!"><img src="{{asset('img/wake2.jpg')}}">COMPRAR AHORA</a>
    <a class="carousel-item center" style="width:400px; height:250px" href="#five!"><img src="{{asset('img/wake2.jpg')}}">COMPRAR AHORA</a>
   </div>
  </div>
 </div> 
<div class="parallax-container">
      <div class="parallax"><img  style="width:450px" src="{{asset('img/wake3.jpg')}}"></div>
    </div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#gallery_output img').not(':first').hide();
			$('#gallery a').click(function() {
				if ( $('#' + this.rel).is(':hidden') ) {
				$('#gallery_output img').slideUp();
				$('#' + this.rel).slideDown();
			}
		});
     $('.parallax').parallax();
			$('select').formSelect();
        $('.materialboxed').materialbox();
        $('.carousel').carousel();
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 5000)
	});
</script>
@endsection