@extends('layouts.app')

@section('title', 'Lista de usuarios')



@section('content')
<a href="{{ route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>nombre</th>
		<th>Email</th>
		<th>password</th>
	
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id}}</td>
			<td>{{ $user->name}}</td>
			<td>{{ $user->email}}</td>
			<td>{{ $user->password}}</td>
		
			<td>
				<a href="{{ route('users.edit', $user) }}" class="btn btn-success"> <span class="glyphicon glyphicon-wrench
					" aria-hidden="true"></span></a> 


					{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user],'style'=>'display:inline']) !!}
					{!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}


			

						</td>		
						@endforeach
					</tbody>

				</table>
				{!! $users->render() !!}
				@endsection()