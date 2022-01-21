<?php 

/*ini_set('session.cache_expire', 600);
ini_set('session.gc_maxlifetime', 36000);
ini_set('session.cookie_lifetime',36000);
header('Content-Type: text/html; charset=UTF-8');
header('Expires: Mon, 25 Dec 2021 00:00:00 GMT'); // Aquí estoy poniendo una fecha 2 meses después del día de hoy
session_cache_expire(600);
session_set_cookie_params(36000);*/
// session_start();



ob_start();
error_reporting(0);
require_once('core/core.php');
require_once('controllers/controller.enlaces.php');


require_once('models/model.enlaces.php');

$mvc = new MvcController();
$mvc -> plantilla();

?>