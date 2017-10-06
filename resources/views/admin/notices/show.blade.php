@extends('admin.template.main')

@section('title', 'Noticia | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				<div class="col s12" align="center">
					<h2><i class="fa fa-quote-left" aria-hidden="true"></i> Datos de la noticia <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
					<hr>
				</div>
				
				{!! Form::model($notice) !!}
								
			        <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Titulo</label>
				        <div class="uk-form-controls">
				        	{!! Form::text('titulo',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************','readonly']) !!}    
				        </div>
				    </div>
							
					<div class="col s12">
			            <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Descripcion</label>
						 <div class="uk-form-controls">
							{!! Form::textarea('descripcion',null,['id' => 'form-stacked-text','class' => 'uk-textarea z-depth-2','required','placeholder' => '*******************','readonly']) !!}
						</div>			            
			        </div>
			        
			        <div class="uk-margin col s12" align="center">
				        <img src="{{ asset('storage/noticias/'.$notice->imagen) }}" height="200" width="200">
				    </div>

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>

@endsection