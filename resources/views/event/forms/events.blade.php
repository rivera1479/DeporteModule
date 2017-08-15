<div class="form-group">
	{!!Form::label('Nombre','Nombre:')!!}
	{!!Form::text('name_eve',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del Evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Descripcion','Description:')!!}
	{!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Ingrese las palabras claves'])!!}
</div>

<div class="form-group">
	{!!Form::label('Precio','Precio €:')!!}
	{!!Form::text('price',null,['class'=>'form-control', 'placeholder'=>'Ingrese el precio del evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Fecha','Fecha de inicio:')!!}
	{!!Form::date('date_start',null,['class'=>'form-control datepicker', 'placeholder'=>'Ingrese la fecha de inicio del evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Fecha','Fecha de culminación:')!!}
	{!!Form::date('date_end',null,['class'=>'form-control datepicker', 'placeholder'=>'Ingrese la fecha de fin del evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Entradas','Entradas disponibles:')!!}
	{!!Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Ingrese el total de entradas para este evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Lugar','Lugar:')!!}
	{!!Form::text('site',null,['class'=>'form-control', 'placeholder'=>'Ingrese el lugar del evento'])!!}
</div>

<div class="form-group">
	{!!Form::label('Imagen','Imagen:')!!}
	{!!Form::file('img')!!}
</div>

<div class="form-group">
	{!!Form::label('Categoria','Categoria:')!!}
	{!!Form::select('category_id',$categories)!!}
</div>


<div class="form-group">
 <select multiple name="costs[]">
 @foreach($costs as $key => $value)
 <option value="{{ $key }}">{{$value}}</option>
 @endforeach
</select> 
</div>


<input type="hidden" name="slug" value="">