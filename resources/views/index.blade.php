@extends('layouts.template')
@section('content')
	@include('alerts.errors')
	@include('alerts.request')
	
	<div class="container">
		<h3>Eventos</h3>
		
			@foreach($eventos as $event)
			<div class="container">
				<div class="col-sm-6 col-md-4">
					<img src="images_events/{{$event->img}}" class="img-responsive " alt="Responsive image" />
					
					<a href="{{ route('event-detail', $event->slug) }} "> 
						<i style="color: white">
							{{$event->name_eve}}
						</i>
					</a>
					<p>CATEGORIA:
						{{$event->category->name_cat}}
					</p>
					<p>DESCRIPCION:
						{{$event->description}}
					</p>
			 		<p>PRECIO: 
			 			{{$event->price}}
			 		</p>
					<p>FECHA DE INICIO: 
						{{$event->date_start}}
					</p>

					<p>FECHA FINAL: 
						{{$event->date_end}}
					</p>


					<a class="btn btn-primary" href="{{ route('event-detail', $event->slug) }}"> <i class="fa fa-chevron-circle-right"></i> Ver detalles</a>
				</div>
			@endforeach

		</div>
	</div>

@endsection

@section('scripts')
		{!!Html::script('assets/js/ajax.js')!!}
@endsection