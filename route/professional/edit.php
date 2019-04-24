<?php
include '../../control/ProfessionalControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id_users;

if(!empty($data)){	
    $ProfessionalControl = new ProfessionalControl();
    $ProfessionalControl->update($obj , $id);
    header('Location:list.php');
}
