@extends('admin.template.main')

@section('title', 'Contacto | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				<div class="col s12" align="center">
					<h2><i class="fa fa-quote-left" aria-hidden="true"></i> Datos del contacto <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
					<hr>
				</div>
				
				{!! Form::model($contacto) !!}	
											
			        <div class="col s12 m6 l6">
				        {!! Form::label('nombre', 'Nombre Completo', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				        	{!! Form::text('nombre',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************','readonly']) !!}    
				        </div>
				    </div>
				     <div class="col s12 m6 l6">
				        {!! Form::label('telefono', 'Telefono', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				            {!! Form::text('telefono',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => 'XXX-XXX-XXXX','readonly']) !!}
				        </div>
				    </div>
				    
				    <div class="col s12 m6 l12">
				        {!! Form::label('email', 'Email', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
				        <div class="uk-form-controls">
				            {!! Form::text('email',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => 'example@gmail.com','readonly']) !!}
				        </div>
				    </div>
				    
				    <div class="col s12">
			            {!! Form::label('mensaje', 'Mensaje', ['for' => 'form-stacked-text','class' => 'uk-form-label']) !!}
						 <div class="uk-form-controls">
							{!! Form::textarea('mensaje',null,['id' => 'form-stacked-text','class' => 'uk-textarea z-depth-2','required','placeholder' => '*******************','readonly']) !!}
						</div>			            
			        </div>
				    
				{!! Form::close() !!}
								
			</div>
		</div>
	</div>

@endsection