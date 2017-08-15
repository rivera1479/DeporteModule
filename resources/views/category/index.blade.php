@extends('layouts.admin')
	@section('content')
	@include('category.modal')

	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Categoria Actualizada Correctamente!</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>
			<tbody id="datos"></tbody>
		</table>
			
	@endsection

	@section('scripts')
		{!!Html::script('assets/js/script.js')!!}
	@endsection