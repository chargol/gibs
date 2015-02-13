@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Gebiet hinzufügen <strong> ({{ $area->name }})</strong></div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Es gibt einige Probleme mit deiner Eingabe.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/field">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="area_id" value="{{ $area->id }}">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Gebietsbezeichnung</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" value="{{ old('description') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Neu anlegen
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
