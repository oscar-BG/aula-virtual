<?php
	require_once("../Modelo/loginM.php");
	$usuario = new Usuario();

	switch ($_GET["sesion"]) {
		case 'verdadero':
			$datos = $usuario->acceder($_POST["nombre"], $_POST["clave"]);
			if(is_array($datos)==true and count($datos)>0){
				echo "1";
			}else{
				echo $_POST["nombre"];
			}
			break;
		default:
			# code...
			break;
	}
?>