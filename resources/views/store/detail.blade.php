@extends('layouts.template')
@section('content')
    <div class="container text-center">
    <div class="page-header">
			<h1> <i class="fa fa-shopping-cart"></i> Detalle del pedido </h1>
	</div>

	<div class="page">
		<h3>Datos del evento:</h3>
		<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre del evento:</td><td>{{$store['name_eve']}}</td></tr>
					<tr><td>Categoria:</td><td>{{$store['category_id']}}</td></tr>
					<tr><td>Descripcion:</td><td>{{$store['description']}}</td></tr>
					<tr><td>Fecha del evento:</td><td>{{$store['date_start']}}</td></tr>
					<tr><td>Precio:</td><td>{{$store['price']}}</td></tr>
					
				</table>
			</div>

    <div class="table-responsive">
    	<h3>Datos de los participantes</h3>
			<table class="table table-striped table-hover table-bordered">
				
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>DNI</th>
						
						
					</tr> 
				</thead>
				<tbody>



				@if (isset($store['competitors']))
					@foreach($store['competitors'] as $competitor)
						<tr>					
							<td>{{ $competitor['name_com'] }}</td>
							<td>{{ $competitor['last_name'] }}</td>
							<td>{{ $competitor['dni'] }}	</td>
						</tr>						
					@endforeach
				@endif


				</tbody>
			</table><hr>

			<h3>
					<span class="label label-success">
						Total: €{{ number_format($total,2) }}
					</span>
				</h3>
							
				<p>
					<a class="btn btn-primary" href="{{ redirect()->getUrlGenerator()->previous() }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Atras</a>

					<a href="{{ route('payment') }}" class="btn btn-warning">
						Pagar con <i class="fa fa-paypal fa-x2"></i>
					</a>
				</p>
		</div>

</div>
</div>
@stop