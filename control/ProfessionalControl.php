<?php
include '../../model/Professional.php';

class ProfessionalControl{

	function insert($obj){
		$Professional = new Professional();
		return $Professional->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Professional();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Professional();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$user = new Professional();
		return $user->findAll();
	}
}

?>