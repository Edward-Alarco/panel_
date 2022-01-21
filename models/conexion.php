<?php 

class Conexion{
    public static function conectar(){
        $bd = new PDO('mysql:host=localhost;dbname=panel', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $bd;
    }
    
}

?>