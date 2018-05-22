@extends("layouts.app")

@section("content")
  <div style="height:100px"></div>
<div class="container">
	@include('products.form',['product' => $product, 'url' => '/products','method' => 'POST'])
</div>
@endsection