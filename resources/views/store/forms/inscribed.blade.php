<div class="form-group">
	{!!Form::label('Nombre','Nombre:')!!}
	{!!Form::text('name_com',null,['class'=>'form-control', 'placeholder'=>'Ingresa su nombre'])!!}
</div>

<div class="form-group">
	{!!Form::label('Apellido','Apellido:')!!}
	{!!Form::text('last_name',null,['class'=>'form-control', 'placeholder'=>'Ingrese su apellido'])!!}
</div>

<div class="form-group">
	{!!Form::label('Numero:','Documento de identidad:')!!}
	{!!Form::text('dni',null,['class'=>'form-control', 'placeholder'=>'Ingrese su número de dni'])!!}
</div>

<div class="form-group">
	{!!Form::label('Genero: ','Indique su sexo:')!!}
	{!!Form::select('gender',['Mujer'=>'Mujer','Hombre'=>'Hombre' ],['class'=>'form-control'])!!}
</div>
					
<div class="form-group">
	{!!Form::label('Correo','Correo:')!!}
	{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese su correo electrónico'])!!}
	</div>

<div class="form-group">
	{!!Form::label('Fecha de nacimiento','Fecha de nacimiento:')!!}
	{!!Form::text('birthdate',null,['id'=>'datepicker', 'class'=>'form-control datepicker', 'placeholder'=>'Ingrese su fecha de nacimiento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Direccion de habitacion','Dirección de habitación:')!!}
	{!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingrese su dirección'])!!}
</div>

<div class="form-group">
	{!!Form::label('Telefono celular','Teléfono móvil:')!!}
	{!!Form::text('cell_phone',null,['class'=>'form-control', 'placeholder'=>'Ingrese su numero de télefono móvil'])!!}
</div>

<div class="form-group">
	{!!Form::label('Telefono de habitacion','Teléfono fijo')!!}
	{!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Ingrese su número de habitación'])!!}
</div>


<div>
	
	
		<table>
			<thead>
				<th>Select</th>
				<th>Descripcion</th>
				<th>Monto</th>
			</thead>
			@foreach($costsettings->costsettings as $key => $value)
			<tbody>
				@if($value->required == false)
				<td><input type="checkbox" name="costsettings[]" value="{{$value->id}}" class="checkbox-circle"></td>
				
				<td>{{$value->name_cost}}</td>
				@if($value->type_discount == 1)
				<td>{{$value->cost}}€</td>
				@else
				<td>{{$value->cost}}%</td>
				@endif
			
			@endif
			@endforeach
		</tbody>
	</table>
</div>