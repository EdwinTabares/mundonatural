@extends('admin.template.main')

@section('title', 'Noticias | Bienvenido')

@section('content')
<a href="{{ route('products.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>descripcion</th>
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