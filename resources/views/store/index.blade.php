@extends('layouts.template')
@section('content')
    
<div class="container">
    <div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				@if(isset($store['competitors']))
				<p>Nombre del evento
					<h3>{{$store['name_eve']}}</h3>
				</p>
				
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>DNI</th>
						<th>Acciones</th>
						
					</tr> 
				</thead>
				<tbody>



				
					@foreach($store['competitors'] as $competitor)
						<tr>					
							<td>{{ $competitor['name_com'] }}</td>
							<td>{{ $competitor['last_name'] }}</td>
							<td>{{ $competitor['dni'] }}	</td>
							<td>
								<a href="#" class="btn btn-danger">Borrar</a>
							</td>
						</tr>						
					@endforeach
				
				

				</tbody>
			</table><hr>
							
		</div>

		</div>
@else
			<h3> <span class="label label-warning"></span> No hay eventos en el carrito :( </h3>

		@endif

@stop