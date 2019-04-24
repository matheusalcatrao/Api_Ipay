<?php

include '../../control/CategoryControl.php';

$data = file_get_contents('php://input');
$serv = json_decode($data);

if (!empty($data)) {
    $userControl = new CategoryControl();
    $userControl->insert($serv);
    header('Location:list.php');

}
?>