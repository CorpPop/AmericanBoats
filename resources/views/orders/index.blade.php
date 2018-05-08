@extends("layouts.app")

@section("content")
{!! MaterializeCSS::include_full() !!}

<div class="container">
	<div class="panel default">
		<div class="oanel head">
			<h4>La ventas</h4>
		</div>
		<div class="panel body">
			<h4>Estadisticas</h4>
			<div class="row">
				<div class="col s 4 l2 m3" style="border-right: 2em; background-color: grey;">
					<!-- <span style="color: red; width: 20%;"></span> -->
					<h4 style="color: white; border-right: 20px;">{{$totalMonth}} $</h4>
					Ingresos del mes
				</div>
				<div class="col s 4 l2 m3">
					<!-- <span style="color: red;">{{$totalMonthCount}}</span> -->
					<h4 style="color: red; align-items: center;">{{$totalMonthCount}}</h4>
					Numero de ventas
				</div>
			</div>
			<h4>Ventas mensuales</h4>
			<table class="table">
				<thead>
					<tr>
						<td>ID. venta</td>
						<td>Comprador</td>
						<td>Dirección</td>
						<td>No. guía</td>
						<td>Status</td>
						<td>Fecha de venta</td>
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
		</div>
	</div>
</div>

<script src="{{ url('js/app1.js') }}"></script>

@endsection
