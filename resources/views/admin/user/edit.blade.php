@extends('admin.template.main')

@section('title', 'Crear Usuario | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row"  style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				@include('admin.template.partials.errors')
				
				<div class="col s12">
					<p style="padding-right:10px;">Campos obligatorios (<span class="red-text"> * </span>)</p>
				</div>
				
				{!! Form::model($user,['route' => ['users.update',$user->id], 'method' => 'PUT']) !!}
								
			        <div class="col s12 m6 l6">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Nombre Completo <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				        	{!! Form::text('nombre',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************']) !!}    
				        </div>
				    </div>
							
			        <div class="col s12 m6 l6">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Apellido Completo <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				            {!! Form::text('apellido',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************']) !!}
				        </div>
				    </div>
				    
				    <div class="col s12 m6 l6">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Email <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				            {!! Form::email('email',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => 'example@gmail.com']) !!}
				        </div>
				    </div>
				    
				    <div class="uk-animation-toggle uk-margin col s12" align="center">
		            	{!! Form::submit('Editar Usuario', ['class' => 'uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4','style' => 'border:none']) !!}
				    </div>
				
				{!! Form::close() !!}
				
			</div>
		</div>
	</div>

@endsection