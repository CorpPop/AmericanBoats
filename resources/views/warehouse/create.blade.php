@extends("layouts.app")

@section("content")
<div class="container">
	@include('warehouse.form',['product' => $product, 'url' => '/warehouse','method' => 'POST'])
</div>

@endsection