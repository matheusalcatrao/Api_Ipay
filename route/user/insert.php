<?php
include '../../control/UserControl.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

if (!empty($data)) {
    $userControl = new UserControl();
    $rs = $userControl->insert($obj);
    header("Retorno : $rs");
}
