<?php
include '../../control/Servicecontrol.php';
$conteudoControl = new ServiceControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>