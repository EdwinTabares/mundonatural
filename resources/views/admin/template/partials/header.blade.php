@if(Auth::user())
<nav class="uk-navbar-container z-depth-4" uk-navbar id="navMax" style="background-color: #0099FF;">

	<div class="uk-navbar-left">
		<ul class="uk-navbar-nav">
			<li class="uk-active">
				<a href="{{ route('panel.index') }}" class="uk-animation-toggle">
					<img src="{{ asset('img/logoMedrarHeader.png') }}" class="logoHeader uk-animation-shake uk-animation-reverse"/>
				</a>
			</li>            
		</ul>
	</div>

	<div class="uk-navbar-right">
		<ul class="uk-navbar-nav">
			<li class="uk-active">
				<a href="{{ route('panel.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
				onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
				Inicio
			</a>
		</li>
		<li class="uk-active">
			<a href="{{ route('users.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
			onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
			Usuarios
		</a>
	</li>
	<li class="uk-active">
		<a href="{{ route('notices.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
		onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
		Noticias
	</a>
</li>
<li class="uk-active">
	<a href="{{ route('contacts.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
	onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
	Contactos
</a>

<li class="uk-active">
	<a href="{{ route('products.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
	onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
	productos
</a>

</li>
<li class="uk-active">
	<a type="button" class="white-text"  onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2); font-size: 16px;'" 
	onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
	{{ Auth::user()->nombre . ' ' . Auth::user()->apellido }} <i style="padding-left:10px;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div uk-dropdown="mode: click;pos: bottom-justify" class="z-depth-4-white" style="background-color: #0099ff;">
	<ul class="uk-nav uk-dropdown-nav">
		<li class="uk-active">
			<a href="{{ route('front.index') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
			onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
			Ir a Pagina Principal
		</a>
	</li>
	<li class="uk-active">
		<a href="{{ route('auth.logout') }}" class="white-text" onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);font-size: 16px;'" 
		onMouseOut="this.style.cssText='background-color: transparent;font-size: 14px;'">
		Salir
	</a>
</li>
</ul>
</div>
</li>
</ul>
</div>   
</nav>

<div class="uk-navbar-container z-depth-4" uk-navbar id="navMin" style="background-color: #0099FF;">
	<div class="uk-navbar-left">
		<button class="uk-button uk-button-default" id="button1" type="button" 
		style="margin:20px; border:none; width: 70px; height: 50px" 
		onMouseOver="this.style.cssText='background-color: rgba(255, 255, 255, 0.2);border:none;width: 70px; height: 50px;margin:20px;'" 
		onMouseOut="this.style.cssText='background-color: transparent;border:none;width: 70px; height: 50px;margin:20px;'">
		<i id="icon" class="fa fa-plus white-text" align="center" style="font-size:18px" aria-hidden="true" 
		onMouseOver="this.style.cssText='font-size: 20px;'" 
		onMouseOut="this.style.cssText='font-size: 18px;'"></i>
	</button>
	<div uk-dropdown="mode: click;pos: bottom-justify"   style="background-color: #0099FF;" class=" z-depth-4-white">
		<ul class="uk-nav uk-dropdown-nav">
			<li class="uk-active">
				<a href="{{ route('panel.index') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
				onMouseOut="this.style.cssText='font-size: 14px;'">
				Inicio
			</a>
		</li>
		<li class="uk-active">
			<a href="{{ route('users.index') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
			onMouseOut="this.style.cssText='font-size: 14px;'">
			Usuarios
		</a>
	</li>
	<li class="uk-active">
		<a href="{{ route('notices.index') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
		onMouseOut="this.style.cssText='font-size: 14px;'">
		Noticias
	</a>
</li>
<li class="uk-active">
	<a href="{{ route('contacts.index') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
	onMouseOut="this.style.cssText='font-size: 14px;'">
	Contactos
</a>
</li>
<li class="uk-active">
	<a type="button" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
	onMouseOut="this.style.cssText='font-size: 14px;'">
	{{ Auth::user()->nombre . ' ' . Auth::user()->apellido }} <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<div uk-dropdown="mode: click;pos: bottom-justify" class="z-depth-4-white" style="background-color: #0099ff;">
	<ul class="uk-nav uk-dropdown-nav">
		<li class="uk-active">
			<a href="{{ route('front.index') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
			onMouseOut="this.style.cssText='font-size: 14px;'">
			Ir a Pagina Principal
		</a>
	</li>
	<li class="uk-active">
		<a href="{{ route('auth.logout') }}" class="white-text" onMouseOver="this.style.cssText='font-size: 16px;'" 
		onMouseOut="this.style.cssText='font-size: 14px;'">
		Salir
	</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>

<div class="uk-navbar-center">
	<ul class="uk-navbar-nav">
		<li class="uk-active">
			<a class="uk-animation-toggle">
				<img src="{{ asset('img/logoMedrarHeader.png') }}" class="logoHeader uk-animation-shake uk-animation-reverse"/>
			</a>
		</li>            
	</ul>
</div>
</div>
@endif