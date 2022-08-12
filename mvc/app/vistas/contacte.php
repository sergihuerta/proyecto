<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="author" content="Sergi Huerta">
	<meta name="keywords" content="música, orquestra, cultura, Vilanova i la Geltrú, art, Eduard Toldrà, Auditori Eduard Toldrà">
	<meta name="description" content="Pàgina web de l'orquestra Camerata Eduard Toldrà de Vilanova i la Geltrú">
	<title>Contacte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<main class="principal">

		<h2>Contacte</h2>

			<div class="formulario1">

				<p>Formulari de contacte:</p>
				<form action="<?=DOMAIN?>/controlsesion/email" method="post">
					<input class="nombre" type="text" name="nombre" id="nombre" placeholder="Nom">
					<input class="email" type="text" name="email" id="email" placeholder="Email">
					<input class="asunto" type="text" name="asunto" id="asunto" placeholder="Tema">
					<textarea class="texto" name="texto" maxlenght="300"></textarea>
					<input class="boton" type="submit" value="Enviar">
				</form>

			</div>

			<div class="mapa">

				<h2>La nostra seu</h2>

				<figure id="sede">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.5598246745185!2d2.1549183149271!3d41.383647204190865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a288f85e22e3%3A0x9d2effd8dc34b843!2sCIPSA!5e0!3m2!1ses!2ses!4v1594739480440!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

					<figcaption>Cipsa</figcaption>

				</figure>

			</div>

	</main>

	<footer class="pie">

		<p class="parrafoPie">&copy;<time datetime="2022">2022 Sergi Huerta</time></p>

	</footer>

</body>
</html>