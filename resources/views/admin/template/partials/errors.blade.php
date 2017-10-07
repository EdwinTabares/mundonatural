<<<<<<< HEAD
@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach 
			</ul>
		</div>
	@endif
=======
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
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
