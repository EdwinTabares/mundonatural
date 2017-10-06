@extends('admin.template.main')

@section('title', 'Usuario | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 50px;">
				
				<div class="col s12" align="center">
					<h2><i class="fa fa-quote-left" aria-hidden="true"></i> Datos del usuario <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
					<hr>
				</div>
				
				{!! Form::model($user,[]) !!}	
											
			        <div class="col s12 m6 l6">
				        {!! Form::label('nombre', 'Nombre Completo', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				        	{!! Form::text('nombre',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************','readonly']) !!}    
				        </div>
				    </div>
							
			        <div class="col s12 m6 l6">
				        {!! Form::label('apellido', 'Apellido Completo', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				            {!! Form::text('apellido',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************','readonly']) !!}
				        </div>
				    </div>
				    
				    <div class="col s12 m6 l6">
				        {!! Form::label('email', 'Email', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				            {!! Form::email('email',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => 'example@gmail.com','readonly']) !!}
				        </div>
				    </div>
				    
				{!! Form::close() !!}
							
			</div>
		</div>
	</div>

@endsection