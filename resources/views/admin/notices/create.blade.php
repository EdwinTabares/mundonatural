
@extends('layouts.app')


@section('content')

{!! Form::open(['route' => 'notices.store', 'method' => 'POST', 'files' => true] ) !!}

<div class="form-group">
	{!! Form::label('titulo', 'Titulo') !!}
	{!! Form::text('titulo', null, ['class' =>'form-control', 'placeholder' => 'titulo', 'required']) !!} 
</div>


<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion') !!}
	{!! Form::textarea('descripcion', null, ['class' =>'form-control', 'placeholder' => 'Descripcion producto', 'required']) !!}
</div>


<div class="form-group" >					
	{!! Form::file('imagen') !!}
</div>


<div class="form-group">
	{!! Form::submit('Agregar noticia', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection