<div class="form-group">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
	{!!Form::label('Apellido:')!!}
	{!!Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Ingresa el apellido'])!!}
</div>

<div class="form-group">
	{!!Form::label('Rol de usuario:')!!}
	{!!Form::select('rol',[1 => 'Admin', 2 => 'Gestor de facturas', 3 => 'Gestor de Eventos'],['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>


<div class="form-group">
	{!!Form::label('email','Correo:')!!}
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
		
<div class="form-group">
	{!!Form::label('password','Contraseña:')!!}
	{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>