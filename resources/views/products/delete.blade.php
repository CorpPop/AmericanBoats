{!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE','class'=> 'col s12']) !!}
	<input type="submit" class="btn black" value="Eliminar">
{!! Form::close() !!}