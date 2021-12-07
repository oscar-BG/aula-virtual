<?php
	requiere_once "conexionBD.php";
	class Usuario extends Conexion{
		public function acceder($nombre, $clave){
			$pdo = Conexion::cBD()->prepare("SELECT `id`, `nombre`, `apellido_materno`, `apellido_paterno`, `nombre_usu`, `clave`, `nivel`, `foto` FROM `usuarios` WHERE nombre_usu=:usuario AND clave=:clave");
			$pdo -> bindParam(":usuario",$nombre, PDO::PARAM_STR);
			$pdo -> bindParam(":clave",$clave, PDO::PARAM_STR);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
	}
?>