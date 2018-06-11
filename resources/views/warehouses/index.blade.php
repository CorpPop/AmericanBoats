@extends("layouts.app")

@section("content")
<div style="height:100px"></div>
 <div class="row">
 	 <a style="background-color:#cc1f0e"  href="{{ route('PDF',['download'=>'pdf']) }}" class="btn right">Download PDF</a>
 </div>
<div class="row">
	 <div class="container">
	 <div><h4>PRODUCTOS DE AMERICAN BOATS</h4></div>
	 	      <table class="table" id="users-table">
				<thead>
					<tr>
						<td>Clave</td>
						<td>Producto</td>
						<td>Precio</td>
						<td>Talla</td>
						<td>Color</td>
						<td>Cantidad</td>
						
					</tr>
				</thead>
			</table>
	 </div>
</div>
            <div class="row">
            <div class="container">
            	<a style="background-color:#081d76" href="{{ url('warehouses/create') }}" class="btn right">Agregar</a>   
            </div>
                          	
            </div>
<div style="height:100px"></div>
<script src="{{ url('js/app1.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(function() {
    $('#users-table').DataTable({
    	dom: 'Bfrtip',
     
        processing: true,
        serverSide: true,
        ajax: '{{ url('tabla') }}',
        columns: [
            { data: 'id_warehouse', name: 'id_warehouse' },
            { data: 'title', name: 'title' },
            { data: 'pricing', name: 'pricing' },
            { data: 'size', name: 'size' },
            { data: 'color', name: 'color' },
            { data: 'countw', name: 'countw' }
        ]
    });
});
	});
</script>
@endsection