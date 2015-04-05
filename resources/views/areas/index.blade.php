@extends('app')

@section('app.page-title', 'Gebietsareale')

@section('app.headroom')
	<a href="{{ route('area.create') }}" class="gb-btn">Hinzufügen</a>
@stop

@section('app.content')
			
	@foreach (array_chunk($areas->all(), 4) as $row)
		<div class="row">

		@foreach ($row as $area)
			<div class="col-sm-3 ">
				<a href="{{ route('area.fields', $area->id) }}" class="box">
					<div class="box__title"> {{ $area->name }} </div>
					<div class="box__subtitle"> {{ $area->fields->count() }} Gebiete</div>
				</a>
			</div>
		@endforeach

		</div>
	@endforeach

@stop