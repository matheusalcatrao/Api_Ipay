<?php
include '../../control/Servicecontrol.php';
 
$data = file_get_contents('php://input'); 
$serv =  json_decode($data);

var_dump($serv);

$id = $serv->id_service; // acessando o json na api

if(!empty($data)){	
    $serviceControl = new ServiceControl();
    $serviceControl->update($serv , $id);
    header('Location:list.php');
}


