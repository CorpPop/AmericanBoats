@extends("layouts.app")

@section("content")

	<header class="big-padding text-center blue-grey white-text">
		<h3>Compra Completada</h3>
	</header>
	<div class="container">
		<div class="card lager-padding">
			<h5>Tu pago fue procesasdo <span class="{{$order->status}}">{{$order->status}}</span></h5>
			<p>Comprueba tus datos de envio</p>

			<div class="row">
				<div class="col s6 l6">Correo</div>
				<div class="col s6 l6">{{$order->email}}</div>
			</div>

			<div class="row">
				<div class="col s6 l6">Direccion</div>
				<div class="col s6 l6">{{ $order->address() }}</div>
			</div>

			<div class="row">
				<div class="col s6 l6">Cuidad</div>
				<div class="col s6 l6">{{$order->city}}</div>
			</div>

			<div class="row">
				<div class="col s6 l6">Estado y pais</div>
				<div class="col s6 l6">{{"$order->state $order->country_code"}}</div>
			</div>
		</div>
	</div>
@endsection
<!-- ///////45

yesica-glez-glez@outlook.es

forestal123

//////// -->