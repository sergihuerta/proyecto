<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Partitures</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_DIR;?>/app/vistas/hoja_estilo/hoja_estilo.css">

</head>
<body class="cuerpo">

	<h2>Benvingut <?php echo ucfirst($user); ?></h2>

	<h2>Partitures de concerts</h2>

	<table>

		<tr class="titulos">

			<td>Instrument</td><td>Títol</td><td>Descripció</td><td>Partitura</td>

		</tr>

		<?php for ($i= 0; $i < count($objPartituras) ; $i++) { ?>

			<tr>

				<td><?php echo $objPartituras[$i]->instrumento; ?></td><td><?php echo $objPartituras[$i]->titulo; ?></td><td><?php echo $objPartituras[$i]->descripcion; ?></td><td><?php echo "<a href='".ROOT_DIR."/".$objPartituras[$i]->partitura."'><img src='".ROOT_DIR."/app/vistas/images/logoPdf.png'></a>" ?></td>

			</tr>

		<?php } ?>

	</table>

	<a href="<?=DOMAIN?>/controlsesion/cerrar"><input type="button" value="Tanca la sessió" class="cerrar"></a>

</body>
</html>