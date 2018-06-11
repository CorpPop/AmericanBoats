<table class="table">
				<thead>
					<tr>
						<td>Clave</td>
						<td>Comprador</td>
						<td>Dirección</td>
						<td>No. guía</td>
						<td>Estado</td>
						<td>Fecha venta</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					 <tr>
					 	<td>{{$order->id}}</td>
					 	<td>{{$order->recipient_name}}</td>
					 	<td>{{$order->address()}}</td>
					 	<td>
					 		<a href="#" 
					 		data-type="text" 
					 		class="set-guide-number" 
					 		data-name="guide_number"
					 		data-pk="{{$order->id}}" 
					 		data-title="Número de guia" 
					 		data-value="{{$order->guide_number}}" 
					 		data-url="{{url("/orders/$order->id")}}"></a>
					 		<!-- {{$order->guide_number}} -->
					 	</td>
					 	<td>
					 		<a href="#" 
					 		data-type="select" 
					 		class="select-status" 
					 		data-name="status" 
					 		data-pk="{{$order->id}}" 
					 		data-title="Número de guia" 
					 		data-value="{{$order->status}}" 
					 		data-url="{{url("/orders/$order->id")}}"></a>
					 		<!-- {{$order->status}} -->
					 	</td>
					 	<td>{{$order->created_at}}</td>
					 	<td>Acciones</td>
					 </tr>
					@endforeach
				</tbody>
			</table>