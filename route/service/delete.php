<?php
include '../../control/Servicecontrol.php';
 
$data = file_get_contents('php://input'); //
$serv =  json_decode($data);
//echo $obj->titulo;

$id = $serv->id_service;


if(!empty($data)){	
    $servControl = new ServiceControl();
    $servControl->delete($serv,$id);
    header('Location:list.php');
}
