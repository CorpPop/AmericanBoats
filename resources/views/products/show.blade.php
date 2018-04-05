@extends("layouts.app")

@section("content")	
 <div class="container ">
 	<div class="card producto text-left col s12">
 		@if(Auth::check() && $product->user_id == Auth::user()->id)
 		<div class="absolute action text-rigth">
 			<a  href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
					@include('products.delete',['product' => $product])
 		</div>
 		@endif
 		<h3>{{$product->title}}</h3>
 		<div class="row">
 			<div class="col s6 m6 ">
 				@if($product->extension)
 					<img class="product-avatar" src="{{url("/products/images/$product->id.$product->extension")}}">
 				@endif
 			</div>
 			<div class="col s6 m6 ">
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
 				<p>
 					<!-- <a href="" class="btn-large">Agregar a Carrito</a> -->
 					@include('in_shopping_carts.form',['product' => $product])
 				</p>
 			</div>
 		</div>
 	</div>
 </div>

@endsection