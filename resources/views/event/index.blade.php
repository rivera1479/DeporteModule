@extends('layouts.admin')
	@include('alerts.success')
	@section('content')


	{!! Form::open(['route' => 'events.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}

	<div class="form-group">
		{!! Form::text('name_eve', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del evento']) !!}
	</div>
	<button type="submit" class="btn btn-default">Buscar</button>
	{!! Form::close() !!}


		<table class="table">
			<thead>
				<th>Nombre </th>
				<th>Descripción </th>
				<th>Cantidad </th>
				<th>Fecha de inicio </th>
				<th>Fecha de fin </th>
				<th>Lugar </th>
				<th>Precio €</th>
				<th>Descuentos </th>
				<th>Imagen </th>
				<th>Categoria </th>
				<th>Operaciones </th>
			</thead>
			@foreach($events as $event)
				<tbody>
					<td>{{ $event->name_eve }}</td>
					<td>{{ $event->description }}</td>
					<td>{{ $event->quantity }}</td>
					<td>{{ $event->date_start }}</td>
					<td>{{ $event->date_end }}</td>
					<td>{{ $event->site }}</td>
					<td>{{ $event->price }}</td>
					<td>
					@foreach($event->costsettings as $costs => $value)
					{{$value->name_cost}}<br>
					@endforeach
					</td>
					<td>
						<img src="images_events/{{$event->img}}" alt="" style="width:100px;"/>
					</td>
					<td>{{$event->category->name_cat}}</td>
					<td>{!!link_to_route('events.edit', $title = 'Editar', $parameters = $event->id, $attributes = ['class'=>'btn btn-primary'])!!} 
					</td>
					<td>
					{!!Form::open(['route'=> ['events.destroy',$event->id],'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
					</td>

				</tbody>
			@endforeach
		</table>
		{!!$events->render()!!}
	@endsection