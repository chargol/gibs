
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