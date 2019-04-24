<?php
include "../../model/Category.php";

class CategoryControl {

	function insert($cat){
	    $conteudo = new Category;
	    return $conteudo->insert($cat);
	    header('location:listar.php'); 
	}

	function update($cat,$id){
	    $conteudo = new Category();
	    return $conteudo->update($cat,$id);
	}
	function delete($serv,$id){
	    $conteudo = new Category();
	    return $conteudo->delete($cat,$id);
	}
	function find($id = null){


	}
	function findAll(){
	    $category = new Category();
	    return $category->findAll();
	}
}
?>