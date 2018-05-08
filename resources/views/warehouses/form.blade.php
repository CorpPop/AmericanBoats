{!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s6 center card-panel', 'files' => true]) !!}
	<div class="input-field col l6 m3 s3">
		<i class="material-icons prefix">format_color_text</i>
		{{ Form::text('Procts_warehouse',$warehouse->Procts_warehouse,['class' => 'form-control','placeholder'=>'Titulo...'])}}
	</div>
	<div class="input-field col l6 m3 s6">
		{{ Form::number('size',$warehouse->size,['class' => 'form-control','placeholder'=>'Tamaño'])}}
	</div>
	<div class="input-field col s6">
		{{ Form::number('countw',$warehouse->countw,['class' => 'form-control','placeholder'=>'Cantidad'])}}
	</div>
	<div class="input-field col l6 m3 s3">
		<i class="material-icons prefix">format_color_text</i>
		{{ Form::text('color',$warehouse->color,['class' => 'form-control','placeholder'=>'Color'])}}
	</div>
	<div class="input-field rigth">
		<!-- <a href="{{url('/warehouse')}}">Regresar</a> -->
		<a href="{{url('/warehouse')}}" class="waves-effect waves-light btn" >Regresar</a>
		<input type="submit" name="" style="background-color: gray;" value="Enviar" class="waves-effect waves-light btn">
	</div>
{!! Form::close() !!}