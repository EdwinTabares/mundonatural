@extends('admin.template.main')

@section('title', 'Editar Servicio | Sneppe')

@section('content')
	
	<div class="container-fluid">
		<div class="row" style="padding-top:20px;">
			<div class="col s12 m8 l8 offset-m2 offset-l2 z-depth-3" style="padding-top: 50px; padding-bottom: 20px;">
				
				@include('admin.template.partials.errors')
				
				<div class="col s12">
					<p style="padding-right:10px;">Campos obligatorios (<span class="red-text"> * </span>)</p>
				</div>
				
				{!! Form::model($service,['route' => ['services.update',$service->id], 'method' => 'PUT']) !!}
								
			        <div class="col s12">
				        <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Titulo <span class="red-text">*</span></label>
				        <div class="uk-form-controls">
				        	{!! Form::text('titulo',null,['id' => 'form-stacked-text','class' => 'uk-input z-depth-2', 'type' => 'text','required','placeholder' => '*******************']) !!}    
				        </div>
				    </div>
							
					<div class="col s12">
			            <label class="uk-form-label" for="form-stacked-text" style="font-size:15px;">Descripcion <span class="red-text">*</span></label>
						 <div class="uk-form-controls">
							{!! Form::textarea('descripcion',null,['id' => 'form-stacked-text','class' => 'uk-textarea z-depth-2','required','placeholder' => '*******************']) !!}
						</div>			            
			        </div>
			        
			        <div class="uk-margin col s12" align="center">
				        @foreach($service->imagenes as $imagen)
							<div class="col s3 uk-inline-clip uk-transition-toggle uk-light">
								<img style="width: 200px;height: 200px;" src="{{asset('storage/servicios/'.$imagen->imagen)}}" 
								alt="{{$imagen->imagen}}" class=""/>
				            	<div class="uk-position-center">
					                <span class="uk-transition-fade black-text red remove" uk-icon="icon: close; ratio: 2"></span>
					            </div>
							</div>
    					@endforeach
				    </div>
			        
			        <div class="uk-margin col s12" align="center">
				        {!! Form::file('imagen', ['class' => 'form-control file-loading archivos']) !!}
				    </div>
 
				    <div class="uk-animation-toggle uk-margin col s12" align="center">
						{!! Form::submit('Editar Servicio', ['class' => 'uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4','style' => 'border:none']) !!}
				    </div>
				
				{!! Form::close() !!}
				
			</div>
		</div>
	</div>

@endsection

@section('js')

	<script>
		$('.archivos').fileinput({
			uploadAsync: false,
			showUpload: false,
			showRemove: false,
			minFileCount: 1,
			maxFileCount: 5,
			browseClass: "uk-button uk-button-default red white-text z-depth-4",
        	browseLabel: "Subir Imagen(es)",
        	browseIcon: "<i class=\"fa fa-picture-o\"></i> "
		});
	</script>
	
	<script>
		$(function(){
			$('.remove').click(function(){
				 eliminarImagen(this.name);
			});
		});
		
		function eliminarImagen(nombreimagen){
			$.ajax({
                url:  "{{route('eliminarImagen')}}",
                data: {'idImagen':nombreimagen},
                type:  'get',
                beforeSend: function () {
                    
                },
                success:  function () 
                {
                	location.reload();
                }
            });
		}
	</script>

@endsection