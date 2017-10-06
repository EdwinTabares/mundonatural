@extends('admin.template.main')

@section('title', 'Usuarios | Bienvenido')

@section('content')
	
	<nav class="uk-navbar-container transparent" uk-navbar>
	    <div class="uk-navbar-left">
	        <ul class="uk-navbar-nav">
	            <li class="uk-active uk-animation-toggle">
	            	<a class="uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4" href="{{ route('users.create') }}" 
	            	style="margin-top:40px;margin-bottom:40px;margin-left:40px;border:none;width:150px;height:50px;">
	            		Crear Usuario
	            	</a>
	            </li>
	        </ul>
	    </div>
	
	    <div class="uk-navbar-right">
	    	<!--CONSULTA DE USUARIO POR NOMBRE-->
			{!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'uk-search uk-search-default z-depth-4','style' => 'margin-top:40px;margin-bottom:40px;margin-right:40px']) !!}
			    <span uk-search-icon></span>
			    {!! Form::text('nombre', null, ['class' => 'uk-search-input', 'type' => 'search','placeholder' => 'Buscar usuarios...']) !!}
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
		            <th style="text-align: center">Nombre</th>
		            <th style="text-align: center">Email</th>
		            <th style="text-align: center">Acc&#237;on</th>
		        </tr>
		    </thead>
		    <tbody>

		    	@foreach($usuarios as $usuario)
		        <tr>
		            <td style="text-align: center">{{$usuario->nombre.' '.$usuario->apellido}}</td>
		            <td style="text-align: center">{{$usuario->email}}</td>
		            <td style="text-align: center">
		            	<a class="uk-button uk-button-default blue black-text z-depth-4" href="{{route('users.show',$usuario->id)}}" style="border:none">
	            			<i class="fa fa-eye fa-2x" aria-hidden="true"></i>
	            		</a>
	            		<a class="uk-button uk-button-default orange black-text z-depth-4" 
	            		href="{{route('users.edit',$usuario->id)}}" style="border:none">
	            			<i class="fa fa-edit fa-2x" aria-hidden="true"></i>
	            		</a>
	            		<a class="uk-button uk-button-default red black-text z-depth-4" href="{{route('users.destroy',$usuario->id)}}" style="border:none">
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
			{{ $usuarios->render() }}
		</ul>
	</div>

@endsection