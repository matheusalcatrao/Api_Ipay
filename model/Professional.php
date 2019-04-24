<?php
include "../../conexao/Conexao.php";

class Professional extends Conexao
{

    private $name;
    private $last;
    private $age;
    private $phone;
    private $whatsapp;

    //get
    //set

    

    public function insert($obj)
    {
        $sql = "INSERT INTO professional(name, sobrenome, email, password, phone, whatsapp, professional_type) VALUES (:name,:last, :email, :password, :phone,:whatsapp, 1)";
        $rs = $this->bindValueAll($sql, $obj, null);
        return $rs;
    }

    public function update($obj, $id = null)
    {                                           
        $sql = "UPDATE professional SET name = :name, sobrenome = :last, phone = :phone, whatsapp = :whatsapp, birth_date = :date WHERE id_professional = :id";
        $rs = $this->bindValueAll($sql, $obj, $id);
        return $rs;
    }

    public function delete($obj, $id)
    {
        
        $sql = "DELETE FROM professional WHERE id_professional = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
        return $consulta->execute();

    }

    public function findAll()
    {
        $sql = "SELECT * FROM professional";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function bindValueAll($_sql, $_obj, $id)
    {
        $query = Conexao::prepare($_sql);
        $query->bindValue('name', $_obj->name);
        $query->bindValue('last', $_obj->sobrenome);
        $query->bindValue('email', $_obj->email);
        $query->bindValue('phone', $_obj->phone);
        $query->bindValue('whatsapp', $_obj->whatsapp);
        
        $query->bindValue('password', md5($_obj->password));
        $query->bindValue('date', $_obj->birth_date);

        if ($id != null) {
            $query->bindValue('id_professional', $id);
        }
        return $query->execute();
    }
}
