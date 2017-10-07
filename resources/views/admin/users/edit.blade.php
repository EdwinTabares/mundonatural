

@extends('layouts.app')
@section('title', 'Actualizar Cliente')

@section('content')

{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('nombre', $user->nombre, ['class' =>'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('apellido', $user->apellido, ['class' =>'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
</div>


<div class="form-group">
	{!! Form::label('tipo de documento', 'Tipo') !!}
	{!! Form::select('tipo_documento', ['cedulaC' => 'Cedula Ciudadania', 'cedulaE' => 'Cedula Extrangeria'], $user->type, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('numero de documento', 'Numero documento') !!}
	{!! Form::text('numero_documento', $user->numero_documento, ['class' =>'form-control', 'placeholder' => 'ingresar el numero de documento', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('salario', 'Salario') !!}
	{!! Form::text('salario', $user->salario, ['class' =>'form-control', 'placeholder' => 'ingresar salario', 'required']) !!}
</div>


<div class="form-group">
	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


@endsection