<?php

namespace app\controladores;

use \core\View;
use \app\modelo\Partituras;
use \app\entidades\Partitura;

class ControlArchivos {

	public function mostrar() {

		$partituras = Partituras::getAll();

		$usuario = $_SESSION["usuario"];

		//var_dump($usuario);

		View::set("objPartituras", $partituras);
		View::set("user", $usuario);

		if (isset($_SESSION['usuario']) && $_SESSION['usuario'] !== "") {

			View::render("partituras");

		} else {

			View::set("mensaje", "");
			View::set("usuario", "");
			View::set("clave", "");
			View::render("formulario");
		}

		
	}
}