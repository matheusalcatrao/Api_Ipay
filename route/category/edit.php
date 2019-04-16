<?php
include '../../control/CategoryControl.php';
 
$data = file_get_contents('php://input'); 
$serv =  json_decode($data);

var_dump($serv);

$id = $serv->category_id; // acessando o json na api

if(!empty($data)){	
    $serviceControl = new CategoryControl();
    $serviceControl->update($cat , $id);
    header('Location:list.php');
}


