<?php

include '../../control/Servicecontrol.php';

$data = file_get_contents('php://input');
$serv = json_decode($data);

if (!empty($data)) {
    $userControl = new ServiceControl();
    $userControl->insert($serv);
    header('Location:list.php');

}
?>