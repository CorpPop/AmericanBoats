@extends("layouts.app")
@section("content")
<div class="card text-center center" style="width: 400px; align-items: center; left: 30%; border-left-width: 200px;">
	<h3>Mis compras</h3>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<td>Producto</td>
				<td>Precio</td>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{$product->title}}</td>
					<td>{{$product->pricing}}</td>
				</tr>
				@endforeach
				<tr class="red">
					<td>Total</td>
					<td>{{$total}}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection 
