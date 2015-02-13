@extends('app')

@section('content')
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-right">
				<a href="/area/create" class="btn btn-sm btn-primary">Neues Areal anlegen</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
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
									<a href="/areal/{{ $area->shortcut }}/fields"> 
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

	</div>
@stop