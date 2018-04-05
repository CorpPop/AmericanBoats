@extends("layouts.app")

@section("content")
<div class="container">
	@include('products.form',['product' => $product, 'url' => '/products','method' => 'POST'])
</div>

@endsection