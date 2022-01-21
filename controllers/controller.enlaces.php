<?php

class MvcController{
    #LLAMADA A LA PLANTILLA
    public function plantilla(){
        include "views/template.php";
    }

    #INTERACCION USUARIO
    public function enlacesPaginasController(){
        if(isset( $_GET['views'])){
            $rutas = explode("/", $_GET['views']);
            $vistaController = $rutas[0];
		}else{
            $vistaController = 'login';
        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($vistaController);
        include $respuesta;
    }
    
}

?>