@extends('app')

@section('app.page-title', $area->name)

@section('app.headroom')
	<a href="{{ route('field.create', $area->id) }}" class="gb-btn">Hinzufügen</a>
@endsection

@section('app.content')
	<div class="row">
		<div class="col-md-5">
			
			@foreach ($area->fields as $field)
				<div class="cardbox row">
					
					<div class="cardbox__card col-md-8">
						<div class="cardbox__content row">
							<div class="cardbox__item col-md-3  --color">
								<p class="cardbox__title">
									{{ $area->shortcut }}{{ $field->number }}
								</p>
							</div>
							<div class="cardbox__item col-md-9">
								<p class="cardbox__detail">
									{{ $field->description }}
								</p>
							</div>
						</div>
						<a href="#" class="cardbox__action">
							<span class="gb-icon gb-icon-chevron-right"></span>
						</a>
					</div>

					<ul class="cardbox__menue col-md-4">
						<li>
							<a href="#"><span class="gb-icon gb-icon-trashcan"></span></a>
						</li>
					</ul>

				</div>
			@endforeach

		</div>
	</div>
	
@stop