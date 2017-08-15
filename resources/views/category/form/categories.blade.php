<div class="form-group">
	{!!Form::label('Nombre categoria', 'Nombre de categoria: ')!!}
	{!!Form::text('name_cat',null, ['id'=>'name_cat','class'=>'form-control', 'placeholder' => 'Ingresa el nombre de la categoria'])!!}
</div>

<div class="form-group">
	{!!Form::label('Descripcion categoria', 'Descripcion de categoria: ')!!}
	{!!Form::text('description',null, ['id'=>'description','class'=>'form-control', 'placeholder' => 'Ingresa la descripción de la categoria'])!!}
</div>