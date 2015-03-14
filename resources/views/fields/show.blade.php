@extends('app')

@section('content')
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<h4>{{ $field->area->name }} {{ $field->number }} <small>{{ $field->description }}</small></h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Verkündiger</th>
							<th>Ausgabe</th>
							<th>Rückgabe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Name des Verkündigers</td>
							<td>Ausgabedatum</td>
							<td>Rückgabedatum</td>
						</tr>
					</tbody>
				</table>
				<a href="{{ route('field.issue', $field->id) }}" class="btn btn-primary btn-sm">Ausgeben</a>
				<a href="#" class="btn btn-default btn-sm">Rückgabe</a>
			</div>
		</div>

	</div>
@stop