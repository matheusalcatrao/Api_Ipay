<?php
include "../../model/Service.php";

class ServiceControl {

    function insert ($serv){
    $conteudo = new Service;
    return $conteudo->insert($serv);
    header('location:listar.php'); 
    }

function update($serv,$id){
    $conteudo = new Service();
    return $conteudo->update($serv,$id);
}
function delete($serv,$id){
    $conteudo = new Service();
    return $conteudo->delete($serv,$id);
}
function find($id = null){


}
function findAll(){
    $service = new Service();
    return $service->findAll();
}
}
?>