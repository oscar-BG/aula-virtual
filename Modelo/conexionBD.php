<?php
   class Conexion{
       static public function cBD(){
        try {
            $bd = new PDO("mysql:host=localhost;dbname=aula_virtual","root","");
            return $bd;
        } catch (PDOException $e) {
            echo "Error ".$e;
        }
       }
   }
?>