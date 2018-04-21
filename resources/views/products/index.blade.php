@extends("layouts.app")

@section("content")
<div class="center">
	<h1>Productos</h1>
</div>
<div class="container">
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
					<a class="btn-large" href="{{url('/products/$product->id')}}">Ver</a>
					<a class="btn-large" href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
					<a class="btn-large red" href="{{url('/products/'.$product->id.'')}}">Buy</a>
					@include('products.delete',['product' => $product])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection