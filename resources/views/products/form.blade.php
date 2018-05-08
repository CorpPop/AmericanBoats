{!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s6 center card-panel', 'files' => true]) !!}
	<div class="input-field col l6 m3 s3">
		<i class="material-icons prefix">format_color_text</i>
		{{ Form::text('title',$product->title,['class' => 'form-control','placeholder'=>'Titulo...'])}}
	</div>
	<div class="input-field col l6 m3 s6">
		{{ Form::number('pricing',$product->pricing,['class' => 'form-control','placeholder'=>'Precio del producto'])}}
	</div>

	<div class="input-field col l6 m3 s6 ">
		<span>choose file</span>
		{{ Form::file('cover') }}
	</div>

	<div class="input-field col l6 m3 s6 ">
		<span>choose file</span>
		{{ Form::file('cover2') }}
	</div>

	<div class="input-field col l6 m3 s6 ">
		{{ Form::file('cover3') }}
	</div>

	<div class="input-field col l6 m3 s6 ">
		{{ Form::file('cover4') }}
	</div>
	<div class="input-field col s6">
		{{ Form::textarea('description',$product->description,['class' => 'form-control','placeholder'=>'Descripcion de producto'])}}
	</div>
	<div class="input-field rigth">
		<a href="{{url('/catalogo')}}">Regresar</a>
		<input type="submit" name="" value="Enviar" class="">
	</div>
{!! Form::close() !!}
