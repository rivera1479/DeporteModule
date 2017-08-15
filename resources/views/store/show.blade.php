@extends('layouts.template')

@section('content')
<div>
	<div class="top-header span_top">
		<p>Eventos</p>				
	</div>

	<div>
		<h3>Detalles del evento</h3>

		<div>
			<div>
				<div>
					<img src="../images_events/{{$event->img}}" class="img-responsive " alt="Responsive image" />
				</div>

				<div>
					<a href="#">
						<i>{{$event->name}}</i>
					</a>
					<p>DESCRIPCION: 
						{{$event->description}}
					</p>

					<p>PRECIO:
						{{$event->price}}€
					</p>

					<p>FECHA DE INICIO:
						{{$event->date_start}}
					</p>

					<p>FECHA DE CULMINACIÓN:
						{{$event->date_end}}
					</p>
	
					<p class="info">Cargos obligatorios:<br>
					@foreach($event->costsettings as $key => $value)
						@if($value->required == true)
						{{$value->name_cost}} 
						@if($value->type_discount == 1)
						{{$value->cost}}€ <br>
						@else
						{{$value->cost}}%<br>
						@endif
						@endif

						@endforeach
					</p>
					<div>									
						<p class="info"> Cargos adicionales
							@foreach($event->costsettings as $key => $value)
							@if($value->required == false)
							{{$value->name_cost}} 
							@if($value->type_discount == 1)
							{{$value->cost}}€ <br>
							@else
							{{$value->cost}}%<br>
							@endif
							@endif

							@endforeach

						</p>
						
						<a class="btn btn-primary" href="{{ redirect()->getUrlGenerator()->previous() }}">
							<i class="glyphicon glyphicon-circle-arrow-left"></i>
							Volver atras
						</a>
						<a class="btn btn-primary" href="{{ route('add-event', $event->slug) }}">
							<i class="fa fa-chevron-circle-right"></i>
							Inscribir participante
						</a>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>


	@endsection