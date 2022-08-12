<?php

namespace app\entidades;

class Partitura {

	//Atributos
	public $titulo;
	public $instrumento;
	public $descripcion;
	public $partitura;


	public function __construct($_titulo, $_instrumento, $_descripcion, $_partitura)
	{

		$this->titulo = $_titulo;
		$this->instrumento = $_instrumento;
		$this->descripcion = $_descripcion;
		$this->partitura = $_partitura;
	}
}
