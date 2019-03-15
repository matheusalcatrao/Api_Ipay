<?php
include '../../control/UserControl.php';
$conteudoControl = new UserControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>