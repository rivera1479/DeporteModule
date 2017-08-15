<div class="form-group">
	{!!Form::label('Nombre del descuento', 'Nombre del descuento: ')!!}
	{!!Form::text('name_cost',null, ['id'=>'name_cost','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del descuento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Tipo de descuento:')!!}
	{!!Form::select('type',[1 => 'Descuento', 2 => 'Aumento'],['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('Tipo de monto:')!!}
	{!!Form::select('type_discount',[1 => 'Monto fijo', 2 => 'Porcentaje'],['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('Monto del descuento', 'Monto del descuento: ')!!}
	{!!Form::text('cost',null, ['id'=>'cost','class'=>'form-control', 'placeholder' => 'Ingresa el monto del descuento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Requerido:')!!}
	{!!Form::select('required',[true => 'Aplicacion obligatoria', false => 'Aplicacion opcional'],['class'=>'form-control'])!!}
</div>