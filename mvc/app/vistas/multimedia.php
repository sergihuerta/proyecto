<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sergi Huerta">
	<meta name="keywords" content="música, orquestra, cultura, Vilanova i la Geltrú, art, Eduard Toldrà, Auditori Eduard Toldrà">
	<meta name="description" content="Pàgina web de l'orquestra Camerata Eduard Toldrà de Vilanova i la Geltrú.">
	<title>Multimèdia</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_DIR;?>/app/vistas/hoja_estilo/hoja_estilo.css">
	
</head>
<body>

	<header>

		<div class="cabecera">

			<h1>Orquestra Camerata Eduard Toldrà</h1>

		</div>

	</header>

	<div class="menu">

			<a class="primero" href="<?php echo DOMAIN;?>/controlsesion/inicio">Inici</a>
			<a href="<?php echo DOMAIN;?>/controlsesion/multimedia">Multimèdia</a>
			<a href="<?php echo DOMAIN;?>/controlsesion/contacto">Contacte</a>
			<a href="<?php echo DOMAIN;?>/controlsesion/acceder">Accedir</a>
	</div>

	<main>

		<h2 class="multimedia">Multimèdia</h2>

		<figure class="cajaVideo">

			<iframe class="video" src="https://www.youtube.com/embed/BXll9iGWFsA" title="CAMERATA EDUARD TOLDRÀ I LAURA FARRÉ ROZADA. La flor de l’atzavara de FELIU GASULL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<figcaption class="pieVideo">La flor de l'atzavara, 7 de febrer de 2021</figcaption>

		</figure>

		<figure class="cajaVideo">

			<iframe class="video" src="https://www.youtube.com/embed/wYPcMO7x5Uc" title="Camerata Eduard Toldrà" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<figcaption class="pieVideo">Entre França i Amèrica, 2 de juny de 2019</figcaption>

		</figure>

	</main>

	<footer class="pie">

		<p class="parrafoPie">&copy;<time datetime="2022">2022 Sergi Huerta</time></p>

	</footer>

</body>
</html>