@extends('layouts.admin')
	@include('alerts.success');
	@section('content')
	<div class="users">

	{!! Form::open(['route' => 'user.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
	<div class="form-group">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de usuario']) !!}
	</div>
	<button type="submit" class="btn btn-default">Buscar</button>
{!! Form::close() !!}

	<table class="table">
		<thead>
			<th>Nombre del descuento</th>
			<th>Tipo de descuento </th>
			<th>Tipo de monto</th>
			<th>Monto</th>
			<th>Fecha</th>
			<th>Aplicacion</th>
			<th>Operaciones</th>
		</thead>
		@foreach($costs as $cost)
		<tbody>
			<td>{{$cost->name_cost}}</td>
			@if($cost->type== 1)
			<td>Descuento</td>
			@else
			<td>Aumento</td>
			@endif
			@if($cost->type_discount == 1)
			<td>Monto Fijo</td>
			@else
			<td>Monto Porcentual</td>
			@endif
			@if($cost->type_discount == 1)
			<td>{{$cost->cost}} €</td>
			@else
			<td>{{$cost->cost}} %</td>
			@endif
			<td>{{$cost->date_cos}}</td>
			@if($cost->required == true)
			<td>Aplicacion obligatoria</td>
			@else
			<td>Aplicacion opcional</td>
			@endif
			<td>
				{!!link_to_route('settings.edit', $title = 'Editar', $parameters = $cost->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=>['settings.update',$cost->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
			
		</tbody>
		@endforeach
	</table>

	</div>
	@stop