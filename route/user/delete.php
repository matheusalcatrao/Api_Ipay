<?php
include '../../control/UserControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id_users;



if(!empty($data)){	
    $userControl = new UserControl();
    $userControl->delete($obj,$id);
    header('Location:list.php');
}
