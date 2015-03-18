@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Gebiet</th>
							<th>Unbearbeitete Monate</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($overdueFields as $field)
						<tr>
							<td>{{ $field->area->name }} {{ $field->number }}</td>
							<td>{{ $field->protocols->sortBy('worked_at')->last()->worked_at->diffInMonths(Carbon\Carbon::now()) }} Monate</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
@stop