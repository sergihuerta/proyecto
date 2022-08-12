<?php

namespace app\entidades;

class Usuario {

	//Atributos
	public $nombre;
	public $clave;
	public $instrumento;
	public $administrador;


	public function __construct($_nombre, $_clave, $_instrumento, $_administrador) {

		$this->nombre = $_nombre;
		$this->clave = $_clave;
		$this->instrumento = $_instrumento;
		$this->administrador = $_administrador;
		
	}
}