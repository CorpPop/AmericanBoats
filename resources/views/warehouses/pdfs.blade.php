<html>
<body>
<div class="row">
	 <div class="container">
	  <div class="row"><h4 class="center">PRODUCTOS DE AMERICAN BOATS</h4></div>
              <table class="table" style="width:100%">
				<thead style="background-color:black">
					<tr style="color:white">
						<td>Clave</td>
						<td>Producto</td>
						<td>Precio</td>
						<td>Talla</td>
						<td>Color</td>
						<td>Cantidad</td>
						
					</tr>
				</thead>
				<tbody>
                   @foreach($tabla as $tabla)
				<tr class="center">
						<td>{{$tabla->id_warehouse}}</td>
						<td>{{$tabla->title}}</td>
						<td>{{$tabla->pricing}}</td>
						<td>{{$tabla->size}}</td>
						<td>{{$tabla->color}}</td>
						<td>{{$tabla->countw}}</td>
						
					</tr>
					@endforeach
			    </tbody>
			</table>
	 </div>
</div>
           
</body>
</html>

