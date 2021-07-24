@if(session('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<ul>
			<li>{{ session('success') }}</li>
		</ul>
	</div>
@endif