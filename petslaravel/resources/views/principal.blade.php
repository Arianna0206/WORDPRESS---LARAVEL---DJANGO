<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="wiewport"  content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
	<header class="principal">
	    <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('portafolio') }}">Portafolio</a>
            <a href="{{ route('mascotas') }}">Mascotas</a>
            <a href="">Contactos</a>
        </nav>
	</header>
     <div class="contenedor"> 
		<section class="contenido">@yield('content')
		</section>
		<section class="contenido2">@yield('content2')
		</section>
		<section class="contenido3">@yield('content3')
		</section>
		<section class="contenido4">@yield('content4')
		</section>
	</div>
	<footer>
		<section class="footer1">@yield('footer1')
		</section>
	</footer>

</body>
</html>