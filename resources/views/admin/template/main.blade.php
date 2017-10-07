<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'defauld') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">

	
</head>
<body class="admin-body">



	@include('template.partials.nav')

	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>

			<div class="panel-body">

@include('template.partials.errors')
@yield('content')
	

		</div>
		</div>




	</section>

	<footer class="admin-footer">
		<nav class="navbar navbar-desault">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
				
						<p>pie de pagina prueba medrar</p>

				</div>
			</div>
		</nav>
	</footer>

	<script src="{{ asset('plugins/jquery/js/jquery-3.1.0.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>

	
	@yield('js')

</body>
</html>