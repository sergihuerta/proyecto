<?php

namespace app\Modelo;

use \core\Database;
use \app\entidades\partitura;

class Partituras {

	public static function getAll() : array {

		$partituras = [];

		try {

			$db = new Database;

			$sql = "SELECT * from partituras";

			$query = $db->run($sql);

			while ($reg = $query->fetch()) {

				array_push($partituras, new Partitura($reg["titulo"],
														$reg["instrumento"],
														$reg["descripcion"],
														$reg["partitura"]));
			}

			/*echo "<pre>";
			var_dump($partituras);*/


			return $partituras;

		} catch (\PDOException $e) {

			print "Error!: " . $e->getMessage();

		}


	}
	
}