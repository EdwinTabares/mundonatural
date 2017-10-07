@if(count($errors) > 0)
	<div class="row">
		<div class="uk-alert-danger z-depth-3" uk-alert>
			<a class="uk-alert-close" uk-close></a>
			<ul>
				@foreach($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif