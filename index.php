<?php 

require_once 'conexion/Conexion.php';
require_once 'controller/Tblpersona_controller.php';

$controller = new Tblpersona_controller();

if(!empty($_REQUEST['accion'])){
    $metodo = $_REQUEST['accion'];
    if(method_exists($controller, $metodo)){
        $controller->$metodo();
    }else{
        $controller->index();
    }
}else{
    $controller->index();
}

$controller->index();

?>