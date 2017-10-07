@extends('layouts.app')

@section('title', 'Lista de productos')



@section('content')
<a href="{{ route('products.create')}}" class="btn btn-info">Registrar nuevo producto</a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>valor</th>
	
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->id}}</td>
			<td>{{ $product->nombre}}</td>
			<td>{{ $product->descripcion}}</td>
			<td>{{ $product->valor}}</td>

						@endforeach
					</tbody>

				</table>
				{!! $products->render() !!}
				@endsection()