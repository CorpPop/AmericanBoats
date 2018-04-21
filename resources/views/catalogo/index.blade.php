@extends("layouts.app")

@section("content")
 <script type="text/javascript">
    $(document).ready(function(){
        $("#activator2").click(function(event){

      $("#modal1").openModal();
      });
              
});
</script>
<div class="catalogo">
	<div class="row">	
@foreach ($products as $product)

<!-- 		<div class="card col l6" >
 			<div class="col s12 m4 l6" style="background-color: black;">
 				<?php // dd(Auth::user()->type) ?>
 				@if(Auth::check()  && Auth::user()->type=="Admin")
 					<div class="absolute action text-rigth">
 					<a  href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
				@include('products.delete',['product' => $product])
 			        </div>
 				@endif
 				@if($product->extension)
 					<img class="product-avatar" src="{{url("/products/images/$product->id.$product->extension")}}">
 				
 				@else
 				<img class="product-avatar" src="{{asset('img/notfound.png')}}">
 				@endif
 			</div>
 			<div class="col s12 m4 l6">
 				<p>
 					<strong>Descripción</strong>
 				</p>
 				<p>
 					{{$product->description}}
 				</p>
 				<p style="text-align: right;">
 					<strong>Costo</strong>
 				</p>
 				<p style="color: red; text-align: right;" class="rigth">
 					{{$product->pricing}}
 				</p>
 				<p> -->
 					 <!-- <a href="" class="btn-large">Agregar a Carrito</a> -->
 <!-- 					@include('in_shopping_carts.form',['product' => $product])
 				</p>
 			</div>
</div>  -->
<!-- ///////// -->
<div class="card col l3">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="product-avatar" id="activator2" src="{{url("/products/images/$product->id.$product->extension")}}">
    </div>
    <div class="card-content">
      <span class="card-title  grey-text text-darken-4" id="activator2">{{$product->title}}<i class="material-icons right">more_vert</i></span>
      <p><a href="#!" id="activator2">This is a link</a></p>
    </div>
    <!-- <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    
    </div> -->
    
  </div>
  <div id="modal1 " class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
    
@endforeach
@if(Auth::check()  && Auth::user()->type=="Admin")
 					<a href="{{url('/products/create')}}" class="btn-large waves-effect waves-light red" style="width: 400px; padding-bottom: 200px; top: 10px; left: 100px;"><i class="material-icons" style="font-size: 200px; padding-top:60px;">add</i></a>
 				@endif
</div>

		</div>
@endsection