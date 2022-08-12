<?php

namespace app\controladores;
use \core\View;
use \app\modelo\Usuarios;
use \app\entidades\Usuario;


class ControlSesion {

	public function login() {

		View::set("mensaje", "");
        View::set("usuario", "");
        View::set("clave", "");
        View::render("formulario");
        
	}

	public function autentificar() {

		$usuario = filter_input(INPUT_POST, "usuario");

		$_SESSION["usuario"] = $usuario;

		$clave = filter_input(INPUT_POST, "clave");	
		
		$usuarioExistente = Usuarios::getByIdPassword($usuario, $clave);

		if ($usuarioExistente == null) {

			View::set("mensaje", "Usuari desconegut o clau incorrecta.");
			View::set("usuario", $usuario);
            View::set("clave", $clave);


            View::render("formulario");

		} else {

			header("Location: ".DOMAIN."/controlArchivos/mostrar");
			

			//View::render("partituras");

		}

	}

	public function cerrar() {

		$_SESSION["usuario"]= "";
		View::set("mensaje", "");
        View::set("usuario", "");
        View::set("clave", "");
		View::render("formulario");

	}

	public function inicio() {

		View::render("home");
	}

	public function multimedia() {

		View::render("multimedia");
	}

	public function contacto() {

		View::render("contacte");
	}

	public function acceder() {

		View::set("mensaje", "");
		View::set("usuario", "");
        View::set("clave", "");

		View::render("formulario");
		
	}


	public function email() {

		echo "hola";

		$name = filter_input(INPUT_POST, "nombre");
		$to = filter_input(INPUT_POST, "email");
		$subject = filter_input(INPUT_POST, "asunto");
		$message = filter_input(INPUT_POST, "texto");
		$headers = 'From: sergi.huertavng@gmail.com' . "\r\n" .
			'Reply-To: sergi.huertavng@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);


	}


}