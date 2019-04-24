<?php
include '../../control/ProfessionalControl.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

if (!empty($data)) {
    $ProfessionalControl = new ProfessionalControl();
    $ProfessionalControl->insert($obj);
    header('Location:list.php');
}
