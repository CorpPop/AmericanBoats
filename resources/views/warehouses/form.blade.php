
{!! MaterializeCSS::include_full() !!}
<div style="height:100px"></div>

<div class="container">
    <div class="row" style="right:80px;width:800px;position:relative;">
        <div class="col col l12 m1 s12 offset-l1">
        <div class="row">
{!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s12 center card-body', 'files' => true]) !!}
	<div class="input-field col l6 m3 s12">
		{{ Form::text('Procts_warehouse',$warehouse->Procts_warehouse,['class' => 'form-control','placeholder'=>'Titulo...'])}}
		<label>Nombre del producto</label>
	</div>
    <div class="input-field col l6 m3 s12">
	{{ Form::select('number',[], 2) }}
	  <label>Selecciona una talla</label>
    </div>

	<div class="input-field col l6 m3 s12">
		{{ Form::number('size',$warehouse->size,['class' => 'form-control','placeholder'=>'Tamaño'])}}
	</div>
	<div class="input-field col l6 m3 s12">
		{{ Form::text('countw',$warehouse->countw,['class' => 'form-control','placeholder'=>'Cantidad'])}}
		<label>Cantidad de productos</label>
	</div>
	<div class="input-field col l6 m3 s12">
	  {{ Form::text('color',$warehouse->color,['class' => 'form-control','placeholder'=>'Color'])}}
	  <label>Color del producto</label>
	</div>
	<div class="row"><div class="input-field col l6 m6 s12">
		<a href="{{url('/warehouses')}}" style="background-color:#081d76" class="btn">Regresar</a>
		<input type="submit" name="" style="background-color:#081d76;width:150px" value="Enviar" class="btn">
	</div></div>
        
{!! Form::close() !!}
   </div>
    </div>
</div>
</div>
<script type="text/javascript">$(document).ready(function() {
$('select').formSelect();
});</script>
