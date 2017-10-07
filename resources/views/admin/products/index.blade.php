<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Lista de productos')



@section('content')
<a href="{{ route('products.create')}}" class="btn btn-info">Registrar nuevo producto</a>
=======
@extends('admin.template.main')

@section('title', 'Noticias | Bienvenido')

@section('content')
<a href="{{ route('products.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
<<<<<<< HEAD
		<th>Descripcion</th>
		<th>valor</th>
	
=======
		<th>descripcion</th>
		<th>valor</th>

>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->id}}</td>
			<td>{{ $product->nombre}}</td>
			<td>{{ $product->descripcion}}</td>
			<td>{{ $product->valor}}</td>
<<<<<<< HEAD

						@endforeach
					</tbody>

				</table>
				{!! $products->render() !!}
				@endsection()
=======
			
			@endforeach
		</tbody>

	</table>
	{!! $products->render() !!}
	@endsection()
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
