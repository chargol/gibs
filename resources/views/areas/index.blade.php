@extends('app')

@section('app.page-title', 'Gebietsareale')

@section('app.headroom')
	<a href="/area/create" class="btn btn-sm btn-primary">Neues Areal anlegen</a>
@stop

@section('app.content')


	<div class="row">
		<div class="col-md-6">
			
			@foreach ($areas as $area)
				
				<div class="cardbox row">
					
					<div class="cardbox__card col-md-8">
						<div class="cardbox__content row">
							<div class="cardbox__item col-md-6">
								<p class="cardbox__title">
									{{ $area->name }}
									<small>({{ $area->shortcut }})</small>
								</p>
							</div>
							<div class="cardbox__item col-md-6">
								<p class="cardbox__detail --color">
									{{ $area->fields->count() }} Gebiete
								</p>
							</div>
						</div>
						<a href="{{ route('area.fields', $area->shortcut) }}" class="cardbox__action">
							<span class="gbicon gbicon-chevron-right"></span>
						</a>
					</div>

					<ul class="cardbox__menue col-md-4">
						<li>
							<a href="#"><span class="gbicon gbicon-trashcan"></span></a>
						</li>
					</ul>

				</div>	
			
			@endforeach

		</div>
	</div>

@stop