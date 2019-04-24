<?php
//AQUI VOU CRIAR AS FUNCOES
include "../../conexao/Conexao.php";

class Category extends Conexao
{
    //ATRIBUTOS
    private $idCategory;
    private $nameCategory;
  


    //METODOS
    public function getIdCategory()
    {
        return $this->idCategory; // sempre coloca a variavel
    }
    public function setIdCategory($Category)
    {
        $this->idCategory=$idCategory;
    }
    public function getNameCategory()
    {
         return $this->nameCategory;
    }
    public function setNameCategory($nameCategory)
    {
        $this->nameCategory=$nameCategory;
    }
    
/// FIM METODOS
   public function insert($cat)
   {
       $sql = "INSERT INTO category (name_category) VALUES (:category)";
       $rs = $this->formatarCampo($sql, $cat, null); // não sei pra que serve esse
       return $rs;
   }
   public function update($cat, $id = null)
   {
       $sql = "UPDATE category SET name_category = :category WHERE category_id = :id";
       $rs = $this->formatarCampo($sql, $cat, $id);
       return $rs;
   }
   public function delete($cat, $id)
   {
      $sql = "DELETE FROM category WHERE id_category = :id";
      $consulta = Conexao::prepare($sql);
      $consulta->bindValue('id', $id);
      return $consulta->execute();
    
   }
   public function findAll(){
      $sql = "SELECT * FROM category";
      $query = Conexao::prepare($sql);
      $query->execute();
      return $query->fetchAll();

   }

   public function formatarCampo($_sql, $_cat, $_id) {
        $conn = Conexao::prepare($_sql);
        $conn->bindValue('category', $_cat->name_category);

        if($_id != null){
            $conn->bindValue('id',$_id);
        }
        return $conn->execute();
   }
 
}
?>