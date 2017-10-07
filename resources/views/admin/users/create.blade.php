
@extends('layouts.app')
@section('title', 'Crear Usuario')

@section('content')

{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('name', null, ['class' =>'form-control', 'placeholder' => 'Nombre ', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('correo', 'Correo') !!}
	{!! Form::text('email', null, ['class' =>'form-control', 'placeholder' => 'correo', 'required']) !!}
</div>



<div class="form-group">
	{!! Form::label('clave', 'Clave') !!}
	{!! Form::text('password', null, ['class' =>'form-control', 'placeholder' => 'clave', 'required']) !!}
</div>




<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


@endsection