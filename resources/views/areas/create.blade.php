@extends('app')

@section('app.content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				
				<div class="panel-heading">Neues Areal anlegen</div>
				<div class="panel-body">
					
					@include('errors.form')

					<form class="form-horizontal" role="form" method="POST" action="/area">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Abkürzung</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="shortcut" value="{{ old('shortcut') }}">
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
