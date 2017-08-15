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
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Correo</th>
			<th>Rol</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->last_name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->rol}}</td>
			<td>
				{!!link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=>['user.update',$user->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
			
		</tbody>
		@endforeach
	</table>

	{!!$users->render()!!}
	</div>
	@stop
