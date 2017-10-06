<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/tax-paramo-png-3850x1619.png" type="image/x-icon">
  <meta name="description" content="Website Maker Description">
  <title>Noticias</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qwj9hvUW43" once="menu" id="menu1-1d" data-rv-view="159">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                         <img src="assets/images/tax-paramo-png-3850x1619.png"  title="" media-simple="true" style="height: 5.3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-primary display-4" href="{{ route('front.index') }}">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Inicio</a>
                </li>
                </ul>
            
        </div>
    </nav>
</section>

    
    <div class="white"> 
    
  <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true" class="container grey lighten-5 delay-2">
    <div class="row z-depth-2" style="padding-left:10px;padding-right:10px;">      
     
      <div class="col s12" style="margin: 60px;">
        <div class="col s12" align="center" style="padding-bottom: 10px;padding-top:20px;">
          <h1><i class="fa fa-quote-left noticias" aria-hidden="true"></i> Blog <i class="fa fa-quote-right" aria-hidden="true"></i></h1>
        </div>

        @foreach($noticias as $noticia)
            <div class="row">
              <div class="col s6 z-depth-2">
               
                <div class="col s12 m6 l6" align="center">
                  <a href="{{ asset('/storage/noticias/'.$noticia->imagen) }}" data-fancybox>
                    <img src="{{ asset('/storage/noticias/'.$noticia->imagen) }}" style="padding-top: 15px;padding-bottom: 15px;width: 60%; height: 300px;" class="uk-animation-scale-up delay-3"/>
                  </a>
                </div>
                
                <div class="col s12 m6 l6" >
                  <h2 align="center" class="uk-animation-scale-up delay-1" style="word-wrap: break-word;">{{ $noticia->titulo }}</h2>
                  <hr class="uk-divider-icon">
                  <p style="word-wrap: break-word;" align="center" class="uk-animation-scale-up delay-1">
                    {{ $noticia->descripcion }}
                  </p>
                </div>
              </div>
          </div>
        @endforeach
      </div>
      {{ $noticias->render() }}
    </div>
  </div>

</div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
  </body>
</html>

