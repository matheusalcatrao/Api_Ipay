<?php
include '../../control/ProfessionalControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id_users;



if(!empty($data)){	
    $ProfessionalControl = new ProfessionalControl();
    $ProfessionalControl->delete($obj,$id);
    header('Location:list.php');
}
