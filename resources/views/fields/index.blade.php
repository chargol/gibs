@extends('app')

@section('content')
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<h4>{{ $area->name }}</h4>
			</div>
			<div class="col-md-2 text-right">
				<a href="/field/create/{{ $area->id }}/area" class="btn btn-sm btn-primary">Gebiet hinzufügen</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nummer</th>
							<th>Bezeichnung</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($area->fields as $field)
							<tr>
								<td>{{ $field->number }}</td>
								<td>{{ $field->description }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>
@stop