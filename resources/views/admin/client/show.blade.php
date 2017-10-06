@extends('admin.template.main')

@section('title', 'Cliente | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				<div class="col s12" align="center">
					<h2><i class="fa fa-quote-left" aria-hidden="true"></i> Datos del cliente <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
					<hr>
				</div>
				
				{!! Form::model($client) !!}
								
			        <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Titulo</label>
				        <div class="uk-form-controls">
				        	{!! Form::text('titulo',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************','readonly']) !!}    
				        </div>
				    </div>
							
					<div class="uk-margin col s12" align="center">
				        <img src="{{ asset('storage/clientes/'.$client->imagen) }}" height="200" width="200">
				    </div>
				
				{!! Form::close() !!}
				
			</div>
		</div>
	</div>

@endsection