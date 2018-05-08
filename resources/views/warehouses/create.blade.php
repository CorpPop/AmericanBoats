@extends("layouts.app")

@section("content")
<div class="container">
	@include('warehouses.form',['warehouse' => $warehouse, 'url' => '/warehouses','method' => 'POST'])
</div>

@endsection