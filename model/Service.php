<?php
//AQUI VOU CRIAR AS FUNCOES
include "../../conexao/Conexao.php";

class Service extends Conexao
{
    //ATRIBUTOS
    private $idServico;
    private $addServico;
    private $closeServico;
    private $editServico;
    private $updateServico;


    //METODOS
    public function getIdServico()
    {
        return $this->idServico; // sempre coloca a variavel
    }
    public function setIdServico($servico)
    {
        $this->idServico=$idServico;
    }
    public function getAddServico()
    {
         return $this->addServico;
    }
    public function setServico($addServico)
    {
        $this->addServico=$addServico;
    }
    public function getCloseServico()
    {
        return $this->closeServico;
    }
    public function setCloseServico($closeServico)
    {
        $this->closeServico = $closeServico;
    }
    public function getEditServico()
    {
        return $this->editServico;
    }
    public function setEditServico($editServico)
    {
        $this->editServico = $editServico;
    }
    public function  getUpdateServico()
    {
        return $this->updateServico;
    }
    public function setUpdateServico($updateServico)
    {
        $this->updateServico = $updateServico;
    }
/// FIM METODOS
   public function insert($serv)
   {
       $sql = "INSERT INTO service(name_service, description_service, link_service) VALUES (:service, :description, :link)";
       $rs = $this->formatarCampo($sql, $serv, null); // não sei pra que serve esse
       return $rs;
   }
   public function update($serv, $id = null)
   {
       $sql = "UPDATE service SET name_service = :service, description_service = :description, link_service = :link WHERE id_service = :id";
       $rs = $this->formatarCampo($sql, $serv, $id);
       return $rs;
   }
   public function delete($serv, $id)
   {
      $sql = "DELETE FROM service WHERE id_service = :id";
      $consulta = Conexao::prepare($sql);
      $consulta->bindValue('id', $id);
      return $consulta->execute();
    
   }
   public function findAll(){
$sql = "SELECT * FROM service";
$query = Conexao::prepare($sql);
$query->execute();
return $query->fetchAll();

   }

   public function formatarCampo($_sql, $_serv, $_id) {
        $conn = Conexao::prepare($_sql);
        $conn->bindValue('service', $_serv->name_service);
        $conn->bindValue('description', $_serv->description_service);
        $conn->bindValue('link', $_serv->link_service);

        if($_id != null){
            $conn->bindValue('id',$_id);
        }
        return $conn->execute();
   }
 
}
?>