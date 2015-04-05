@extends('app')

@section('app.page-title', 'Neues Areal hinzufügen')

@section('app.content')
	<div class="row">
		<div class="col-sm-6">

			<form method="POST" action="{{ route('area.store') }}" class="form-lined">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="form-group row">
					<div class="col-sm-8">
						<label>Bezeichnung</label>
						<input type="text" name="name" value="{{ old('name') }}" class="{{ $errors->first('name', '--error') }}">
						@include ('partials.form-error', ['attribute' => 'name'])
					</div>
					<div class="col-sm-4">
						<label>Abkürzung</label>
						<input type="text" name="shortcut" value="{{ old('shortcut') }}" class="{{ $errors->first('shortcut', '--error') }}">
						@include ('partials.form-error', ['attribute' => 'shortcut'])
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="gb-btn --accent">Neu anlegen</button>
					<a href="{{ route('areas') }}" class="gb-btn">Zurück</a>
				</div>

			</form>

		</div>
	</div>
@endsection
