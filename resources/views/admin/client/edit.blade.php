@extends('admin.template.main')

@section('title', 'Editar Cliente | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				@include('admin.template.partials.errors')
				
				<div class="col s12">
					<p style="padding-right:10px;">Campos obligatorios (<span class="red-text"> * </span>)</p>
				</div>
				
				{!! Form::model($client,['route' => ['clients.update',$client->id], 'method' => 'PUT','files' => true]) !!}
								
			        <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Titulo <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				        	{!! Form::text('titulo',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************']) !!}    
				        </div>
				    </div>
			        
			        <div class="uk-margin col s12" align="center">
				        <img src="{{ asset('storage/clientes/'.$client->imagen) }}" height="200" width="200">
				    </div>
			        
			        <div class="uk-margin col s12" align="center">
				        {!! Form::file('imagen') !!}
				    </div>
 
				    <div class="uk-animation-toggle uk-margin col s12" align="center">
						{!! Form::submit('Editar Cliente', ['class' => 'uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4','style' => 'border:none']) !!}
				    </div>
				
				{!! Form::close() !!}
				
			</div>
		</div>
	</div>

@endsection