<!DOCTYPE html>
<html class="black">
	<head>
		<title>@yield('title', 'Default')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.min.css') }}">
		<link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/estilosFront.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/colores.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/grid.css') }}"/>
		<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
		<link rel="icon" href="{{ asset('img/ico/favicon.ico') }}">
	</head>

	<body class="white">
		
		<header>
			@include('admin.template.partials.header')
		</header>

		<!--LLAMAMOS EL CONTENIDO-->
		@yield('content')
		@if(Auth::user())
		<a href="javascript:" id="return-to-top" class="z-depth-4"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
		<div class="col s12 uk-animation-toggle" align="right" style="padding-right: 12px;padding-bottom:15px;">
			<a href="javascript:history.back()"
			 class="uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4" 
			 style="border:none">
				<i class="fa fa-arrow-left" aria-hidden="true"> Atr&#225;s</i>
			</a>
		</div>
		@endif

		<footer>
			@include('admin.template.partials.footer')
		</footer>
		
		<!--JQUERY PARA LOS EVENTOS-->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('plugins/uikit/js/uikit.js') }}"></script>
		<script src="{{ asset('plugins/uikit/js/uikit-icons.js') }}"></script>
		<script src="{{ asset('plugins/fileinput/js/fileinput.min.js') }}"></script>
		
		<script>
			$("#button1").click(function(){
			    if ($('#icon').hasClass('fa-plus')){
			        $('#icon').addClass('fa-remove');
			        $('#icon').removeClass('fa-plus');
			    }else {
			        $('#icon').removeClass('fa-remove');
			        $('#icon').addClass('fa-plus');
			    }
			});
		</script>
		
		<script>
			// ===== Scroll to Top ==== 
			$(window).scroll(function() {
			    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			        $('#return-to-top').fadeIn(200);    // Fade in the arrow
			    } else {
			        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
			    }
			});
			$('#return-to-top').click(function() {      // When arrow is clicked
			    $('body,html').animate({
			        scrollTop : 0                       // Scroll to top of body
			    }, 500);
			});
		</script>
		
		<!--LLAMAMOS LOS SCRIPTS DE CADA PAGINA-->
		@yield('js')
		
	</body>
</html>