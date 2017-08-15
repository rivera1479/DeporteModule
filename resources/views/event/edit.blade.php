@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($events,['route'=> ['events.update',$events->id],'method'=>'PUT','files' => true])!!}
			@include('event.forms.events')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['events.destroy',$events->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection