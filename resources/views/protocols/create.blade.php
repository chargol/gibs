@extends('app')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Gebiet <strong> {{ $field->area->name }}  {{ $field->number }}</strong> ({{ $field->description }})</div>
					<div class="panel-body">
						
						@include('errors.form')

						<form class="form-horizontal" role="form" method="POST" action="{{ route('protocol.store') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="field_id" value="{{ $field->id }}">
							
							<div class="form-group">
								<label class="col-md-4 control-label">an Verkündiger</label>
								<div class="col-md-6">
									<select class="form-control" name="publisher_id">
									  	<option selected="selected">Verkündiger auswählen</option>
									  	<option>---</option>

									  @foreach ($publishers as $publisher)
									  	<option value="{{ $publisher->id }}">{{ $publisher->fullName() }}</option>
									  @endforeach

									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-success">
										Bearbeitet
									</button>
									<a href="{{ route('field.show', $field->id) }}" class="btn btn-danger">Abbrechen</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop