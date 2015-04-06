@extends('app')

@section('app.page-title', $area->name)

@section('app.content')

	<div class="row">
		<div class="col-sm-12">
			<h3>Neues Gebiet hinzufügen</h3>
		</div>
	</div>

	<div class="row">

		<div class="col-sm-6">

			<form method="POST" action="{{ route('field.store') }}" class="form-lined" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="area_id" value="{{ $area->id }}">

				<div class="form-group">
					<label>Gebietsbeschreibung</label>
					<input type="text" name="description" value="{{ old('description') }}" class="{{ $errors->first('name', '--error') }}">
					@include ('partials.form-error', ['attribute' => 'description'])
				</div>

				<div class="form-group">
					<button type="submit" class="gb-btn --attention">Neu anlegen</button>
					<a href="{{ route('area.fields', $area->id) }}" class="gb-btn">Zurück</a>
				</div>
			</form>

		</div>

	</div>
@endsection
