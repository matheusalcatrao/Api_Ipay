<?php
include '../../control/ProfessionalControl.php';
$ProfessionalControl = new ProfessionalControl();

header('Content-Type: application/json');

foreach($ProfessionalControl->findAll() as $valor){
	echo json_encode($valor);
}


?>