<?php
include '../../control/CategoryControl.php';
 
$data = file_get_contents('php://input'); //
$serv =  json_decode($data);
//echo $obj->titulo;

$id = $serv->category_id;


if(!empty($data)){	
    $servControl = new CategoryControl();
    $servControl->delete($serv,$id);
    header('Location:list.php');
}
