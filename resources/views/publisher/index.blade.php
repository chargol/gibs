@extends('app')

@section('content')
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<h4>Verkündiger</h4>
			</div>
			<div class="col-md-2 text-right">
				<a href="{{ route('publisher.create') }}" class="btn btn-sm btn-primary">Verkündiger hinzufügen</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nachname</th>
							<th>Vorname</th>
							<th>Mailadresse</th>
							<th>Telefon</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($publishers as $publisher)
							<tr>
								<td>{{ $publisher->lastname }}</td>
								<td>{{ $publisher->firstname }}</td>
								<td>{{ $publisher->email }}</td>
								<td>{{ $publisher->phone }}</td>
								<td>
									<a href="{{ route('publisher.show', $publisher->id) }}" class="btn btn-default btn-sm">Gebiete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>
@stop