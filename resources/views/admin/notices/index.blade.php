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