<?php
include '../../model/User.php';

class UserControl{

	function insert($obj){
		$conteudo = new User();
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new User();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new User();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$user = new User();
		return $user->findAll();
	}
}

?>