<?php

namespace app\Modelo;
use \core\Database;
use \app\entidades\usuario;


class Usuarios {

	 /**
	 * Devuelve un listado con todos los usuarios registrados
	 * @access public
	 * @return array Array de objetos Usuario
	 */

	public static function getAll() : array {

		$usuarios = [];

		try {

			$db = new Database;

			$sql = "SELECT * from usuarios";

			$query = $db->run($sql);

			//bucle obtencion de resultados
			while( $reg = $query->fetch()) {

				//creacion de obj usuario por cada registro a matriz de resultados
				array_push($usuarios, new Usuario($reg['usuario'],
													$reg['clave'],
													$reg['instrumento'],
													$reg['administrador']));
			}

			//var_dump($usuarios);


			return $usuarios;


		} catch (\PDOException $e) {

			print "Error!: " . $e->getMessage();
		}
	}


	public static function getByIdPassword(string $id, $key) {

	    try {

	        $db = new Database;

	        $sql = "SELECT * from usuarios WHERE usuario LIKE :usuario AND clave LIKE :clave";

	        $query = $db->run($sql, [':usuario' => $id,
	                                    ':clave' => $key]);

	        $reg = $query->fetch();

	        return ( ($reg !== false )?

	        //retorno obj usuario recuperado o NULL

	            new Usuario($reg['usuario'],
	                        $reg['clave'],
	                        $reg['instrumento'],
	                        $reg['administrador']): NULL);

	    } catch(\PDOException $e) {

	        print "Error!: " . $e->getMessage();

	    }

	}

}