
@extends('layouts.app')


@section('content')

{!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', null, ['class' =>'form-control', 'placeholder' => 'Nombre producto', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('imagen', 'imagen') !!}
	{!! Form::text('imagen', null, ['class' =>'form-control', 'placeholder' => 'imagen', 'required']) !!}
</div>


<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion') !!}
	{!! Form::text('descripcion', null, ['class' =>'form-control', 'placeholder' => 'Descripcion producto', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('valor', 'Valor') !!}
	{!! Form::text('valor', null, ['class' =>'form-control', 'placeholder' => 'valor producto', 'required']) !!}
</div>



<div class="form-group">
	{!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection