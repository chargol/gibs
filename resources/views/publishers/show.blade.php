@extends('app')

@section('content')
	<div class="containter-fluid">
		<div class="row">
			
			<div class="col-md-8 col-md-offset-2">
				<h4>{{ $publisher->firstname }} {{ $publisher->lastname }}</h4>
			</div>

		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Gebiet</th>
							<th>Ausgabedauer</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($ownings as $owning)
						<tr>
							<td>
								<a href="{{ route('field.show', $owning->field_id) }}" class="">
									<strong>{{ $owning->field->area->name }} {{ $owning->field->number }}</strong>
								</a>
							</td>
							<td>{{ $owning->issue_at->diffInMonths(Carbon\Carbon::now()) }} Monate</td>
							<td>
								<a href="{{ route('field.return', $owning->id) }}" class="btn btn-default btn-sm">Rückgabe</a>
								<a href="{{ route('field.workedBy', [$owning->field_id, $publisher->id]) }}" class="btn btn-success btn-sm">Bearbeitet</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
@stop