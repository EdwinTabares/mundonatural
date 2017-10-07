
@extends('layouts.app')


@section('content')

<<<<<<< HEAD
{!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true] ) !!}
=======
{!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af

<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', null, ['class' =>'form-control', 'placeholder' => 'Nombre producto', 'required']) !!} 
</div>


<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion') !!}
	{!! Form::textarea('descripcion', null, ['class' =>'form-control', 'placeholder' => 'Descripcion producto', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('valor', 'Valor') !!}
	{!! Form::text('valor', null, ['class' =>'form-control', 'placeholder' => 'valor producto', 'required']) !!}
</div>

<div class="uk-margin col s12" align="center">					
	{!! Form::file('imagen') !!}
</div>


<div class="form-group">
	{!! Form::submit('Agregar producto', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection