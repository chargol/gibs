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
						@foreach ($field->ownings as $owner)
						<tr>
							<td>{{ $owner->publisher->fullName() }}</td>
							<td>{{ $owner->issue_at->toFormattedDateString() }}</td>
							<td>
								@if (isset($owner->return_at))
									{{ $owner->return_at->toFormattedDateString() }}
								@else
									<a href="{{ route('field.return', $owner->id) }}" class="btn btn-default btn-sm">Rückgabe</a>
								@endif
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@if ($field_is_available)
					<a href="{{ route('field.issue', $field->id) }}" class="btn btn-primary btn-sm">Ausgeben</a>
				@endif
			</div>
		</div>

	</div>
@stop