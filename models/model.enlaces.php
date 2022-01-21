<?php 

class EnlacesPaginas{

    public static function enlacesPaginasModel($vistaModel){
        if(file_exists("views/modules/".$vistaModel.".php")){
            $modulo = "views/modules/".$vistaModel.".php";
        }elseif($vistaModel == 'login'){
            $modulo = "views/modules/login.php";
        }else{
            $modulo = "views/modules/login.php";
        }
        return $modulo;
    }

}

?>