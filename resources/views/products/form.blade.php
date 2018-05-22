<div style="height:100px"></div>

<div class="container">
    <div class="row" style="right:80px;width:800px;position:relative;">
        <div class="col col l12 m1 s12 offset-l1">
        <div class="row">
            {!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s12 center card-body','style'=>'','files' => true]) !!}
	<div class="input-field col l6 m3 s3">
	{{ Form::text('title',$product->title,['class' => 'form-control','id'=>'nombre','placeholder'=>'Ingresa el nombre...'])}}
	 <label for="nombre">Nombre</label>
	</div>
	<div class="input-field col l6 m3 s12">
		{{ Form::text('pricing',$product->pricing,['class' => 'form-control','id'=>'numero','placeholder'=>'Precio del producto...'])}}
	    <label for="numero">Precio</label>
	</div>
	
	<!--<div class="input-field col l6 m3 s12">
		{{ Form::text('cantidad',$product->cantidad,['class' => 'form-control','id'=>'cantidad','placeholder'=>'Cantidad del productos...'])}}
	    <label for="cantidad"></label>
	</div>
	<div class="input-field col l6 m3 s12">
		{{ Form::text('talla',$product->talla,['class' => 'form-control','id'=>'talla','placeholder'=>'Talla del productos...'])}}
	    <label for="talla"></label>
	</div>
	<div class="input-field col l6 m3 s12">
		{{ Form::text('color',$product->color,['class' => 'form-control','id'=>'color','placeholder'=>'Color del productos...'])}}
	    <label for="color"></label>
	</div>
	<div class="input-field col l6 m3 s12">
		{{ Form::text('sexo',$product->sexo,['class' => 'form-control','id'=>'sex','placeholder'=>'Sexo...'])}}
	    <label for="sexo"></label>
	</div>-->

	<div class="input-field col l6 m3 s1 ">
		{{ Form::file('cover')}}
		<label for="Imagen"></label>
	</div>
     <div class="input-field col l6 m3 s12">
	{{ Form::select('number',$product->pricing [], 2) }}


	  <label>Selecciona un tamaño</label>
    </div>

	<div class="input-field col l6 m3 s12 ">
		
		{{ Form::file('cover2') }}

	</div>

	<div class="input-field col l6 m3 s12 ">
		{{ Form::file('cover3') }}
	</div>

	<div class="input-field col l6 m3 s12 ">
		{{ Form::file('cover4') }}
	</div>
	<!--<div class="row col s12"><div style="width:500px;position:relative;right:60px; top:20px">
		<a rel="img1" href="javascript:;"><img src=""  width="90" height="90" /></a>
		<a rel="img2" href="javascript:;"><img src=""  width="90" height="90" /></a>
		<a rel="img3" href="javascript:;"><img src=""  width="90" height="90" /></a>
		<a rel="img4" href="javascript:;"><img src=""  width="90" height="90" /></a>
	</div>-->
	<div class="input-field col l12 m6 s12">
		{{ Form::textarea('description',$product->description,['class' => 'materialize-textarea form-control','id'=>'descrip','data-lenth'=>'10','placeholder'=>'Descripcion de producto...'])}}
		 <label for="descrip"></label>
	</div>
	<div class="input-field col l6 m3 s12">
		<a href="{{url('/catalogo')}}" style="background-color:#081d76" class="btn">Regresar</a>
		<input type="submit" name="" style="background-color:#081d76" value="Enviar" class="btn">
	</div>
{!! Form::close() !!}
    
        </div>
    </div>
</div>
<script type="text/javascript">
	
  $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
    $('select').formSelect();
  });
</script>