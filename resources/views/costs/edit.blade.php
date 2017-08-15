@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($settings,['route'=> ['settings.update',$settings->id],'method'=>'PUT'])!!}
			@include('costs.forms.costs')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['settings.destroy',$settings->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection