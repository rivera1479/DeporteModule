@extends('layouts.template')
@section('content')

	<div>
				
				
				<div class="clearfix"></div>
			</div>
			<div class="container" style="width: 500px; height: 800px">
				<h1 style=" text-align: center">Registrar Participantes:</h1>
				{!!Form::open(array('route'=>array('register-competitor', 'method'=>'POST')))!!}
					@include('store.forms.inscribed')
					<div class="input-group">
					<a class="btn btn-primary" href="{{ redirect()->getUrlGenerator()->previous() }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Atras</a>
					{!!Form::submit('Inscribir y pagar',['name' => 'pagar', 'value' => 'pagar',  'class'=>'btn btn-primary '])!!}
					{!!Form::submit('Inscribir otro participante',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
				</div>
			</div>
		</div>
@endsection
