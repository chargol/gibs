@extends('app')

@section('app.page-title', 'Gebietsareale')

@section('app.headroom')
	<a href="/area/create" class="btn btn-sm btn-primary">Neues Areal anlegen</a>
@stop

@section('app.content')

		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Areale</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($areas as $area)
							<tr>
								<td>
									<a href="/area/{{ $area->shortcut }}/fields"> 
										{{ $area->name }} ({{ $area->shortcut }})
									</a>
								</td>
								<td></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

@stop