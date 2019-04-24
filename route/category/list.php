<?php
include '../../control/CategoryControl.php';
$conteudoControl = new CategoryControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>