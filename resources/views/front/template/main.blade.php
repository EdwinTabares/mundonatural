<!DOCTYPE html>
<html class="blue darken-1">
	<head>
		<title>@yield('title', 'Default')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/estilosFront.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/colores.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/grid.css') }}"/>
		<link rel="stylesheet" href="{{ asset('plugins/fancybox/dist/fancybox.css') }}"/>
		<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
		<link rel="icon" href="{{ asset('img/favicon.png') }}">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPlVvoLsKL3FszSTr0X7ZgY8MpRtm-eK0&callback=initMap" async defer></script>
	</head>

	<body class="white">
	
		<header>
			@include('front.template.partials.header')
		</header>

		<!--LLAMAMOS EL CONTENIDO-->
		@yield('content')
	
		<a href="javascript:" id="return-to-top" class="z-depth-4" style="z-index:100"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
		<div class="col s12 uk-animation-toggle white" align="right" style="padding-right: 12px;padding-bottom:15px;">
			<a href="javascript:history.back()"
			 class="uk-animation-shake uk-animation-reverse uk-button uk-button-default black white-text z-depth-4" 
			 style="border:none">
				<i class="fa fa-arrow-left" aria-hidden="true"> Atr&#225;s</i>
			</a>
		</div>
		
		<footer>
			@include('front.template.partials.footer')
		</footer>
		
		<!--JQUERY PARA LOS EVENTOS-->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('plugins/uikit/js/uikit.js') }}"></script>
		<script src="{{ asset('plugins/uikit/js/uikit-icons.js') }}"></script>
		<script src="{{ asset('plugins/fancybox/dist/fancybox.js') }}"></script>
		
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