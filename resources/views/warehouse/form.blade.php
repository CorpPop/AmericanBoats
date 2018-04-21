{!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s6 center card-panel', 'files' => true]) !!}
	<div class="input-field col l6 m3 s3">
		<i class="material-icons prefix">format_color_text</i>
		{{ Form::text('title',$product->title,['class' => 'form-control','placeholder'=>'Titulo...'])}}
	</div>
	<div class="input-field col l6 m3 s6">
		{{ Form::number('pricing',$product->pricing,['class' => 'form-control','placeholder'=>'Cantidad de Producto'])}}
	</div>
	<div class="input-field col l6 m3 s6">
		{{ Form::file('cover') }}
	</div>
	<div class="input-field col s6">
		{{ Form::textarea('description',$product->description,['class' => 'form-control','placeholder'=>'Descripcion de producto'])}}
	</div>
	<div class="input-field col l6 s6">
		<select multiple>
		{{ Form::option('size', array('L' => 'Large', 'S' => 'Small'), 'S')}}
		</select>
		<label>Materialize Multiple Select</label>
	</div>
	<div class="input-field rigth">
		<a href="{{url('/warehouse')}}">Regresar</a>
		<input type="submit" name="" value="Enviar" class="">
	</div>
{!! Form::close() !!}