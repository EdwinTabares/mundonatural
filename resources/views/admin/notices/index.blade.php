<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Lista de noticias')



@section('content')
<a href="{{ route('notices.create')}}" class="btn btn-info">Registrar una noticia</a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>titulo</th>
		<th>Descripcion</th>
	
	
	</thead>
	<tbody>
		@foreach($notices as $notice)
		<tr>
			<td>{{ $notice->id}}</td>
			<td>{{ $notice->titulo}}</td>
			<td>{{ $notice->descripcion}}</td>

						@endforeach
					</tbody>

				</table>
				{!! $notices->render() !!}
				@endsection()
=======
@extends('admin.template.main')

@section('title', 'Noticias | Bienvenido')

@section('content')
	
	<nav class="uk-navbar-container transparent" uk-navbar>
	    <div class="uk-navbar-left">
	        <ul class="uk-navbar-nav">
	            <li class="uk-active uk-animation-toggle">
	            	<a class="uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4" href="{{ route('notices.create') }}" 
	            	style="margin-top:40px;margin-bottom:40px;margin-left:40px;border:none;width:150px;height:50px;">
	            		Crear Noticia
	            	</a>
	            </li>
	        </ul>
	    </div>
	
	    <div class="uk-navbar-right">
	    	<!--CONSULTA DE NOTICIA POR TITULO-->
			{!! Form::open(['route' => 'notices.index', 'method' => 'GET', 'class' => 'uk-search uk-search-default z-depth-4','style' => 'margin-top:40px;margin-bottom:40px;margin-right:40px']) !!}
			    <span uk-search-icon></span>
			    {!! Form::text('titulo', null, ['class' => 'uk-search-input', 'type' => 'search','placeholder' => 'Buscar noticias...']) !!}
			{!!  Form::close() !!}
	    </div>
	</nav>
	
	<div class="row">
		<div class="col s10 m8 l8 offset-s1 offset-m2 offset-l2">
			@include('flash::message')
		</div>
	</div>
	
	<div class="uk-overflow-auto">
		<table class="uk-table uk-table-divider">
		    <thead>
		        <tr>
		            <th style="text-align: center">Titulo</th>
		            <th style="text-align: center">Acc&#237;on</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach($notices as $notice)
		        <tr>
		            <td style="text-align: center">{{$notice->titulo}}</td>
		            <td style="text-align: center">
		            	<a class="uk-button uk-button-default blue black-text z-depth-4" 
		            	href="{{route('notices.show',$notice->id)}}" style="border:none">
	            			<i class="fa fa-eye fa-2x" aria-hidden="true"></i>
	            		</a>
	            		<a class="uk-button uk-button-default orange black-text z-depth-4" 
	            		href="{{route('notices.edit',$notice->id)}}" style="border:none">
	            			<i class="fa fa-edit fa-2x" aria-hidden="true"></i>
	            		</a>
	            		<a class="uk-button uk-button-default red black-text z-depth-4" 
	            		href="{{route('notices.destroy',$notice->id)}}" style="border:none">
	            			<i class="fa fa-remove fa-2x" aria-hidden="true"></i>
	            		</a>
		            </td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
	
	<div class="col s12">
		<ul class="uk-pagination uk-flex-center">
			{{ $notices->render() }}
		</ul>
	</div>

@endsection
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
