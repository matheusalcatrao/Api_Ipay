<?php
include '../../control/UserControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

var_dump($obj);

$id = $obj->id_user;

if(!empty($data)){	
    $userControl = new UserControl();
    $userControl->update($obj , $id);
    header('Location:list.php');
}
