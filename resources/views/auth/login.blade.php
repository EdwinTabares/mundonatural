@extends('admin.template.main')

@section('title', 'Login Sneppe | Bienvenido')

@section('content')

	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m6 l6 offset-m3 offset-l3 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				<div class="col s12" align="center">
					<h2><i class="fa fa-quote-left" aria-hidden="true"></i> Login <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
					<hr class="uk-divider-icon">
				</div>
				
				{!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
								    
				    <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Email <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				            {!! Form::email('email',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => 'example@gmail.com']) !!}
				        </div>
				    </div>
				    
				    <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Password <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				            {!! Form::text('password',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************']) !!}
				        </div>
				    </div>
 
				    <div class="uk-animation-toggle uk-margin col s12" align="center">
		            	{!! Form::submit('Ingresar', ['class' => 'uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4','style' => 'border:none']) !!}
				    </div>
				
				{!! Form::close('') !!}
				
			</div>
		</div>
	</div>

@endsection