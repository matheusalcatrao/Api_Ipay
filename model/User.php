<?php
include "../../conexao/Conexao.php";

class User extends Conexao
{

    private $name;
    private $last;
    private $age;
    private $phone;
    private $whatsapp;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLast()
    {
        return $this->last;
    }

    public function setLast($last)
    {
        $this->last = $last;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO users(name_user, last_name_user, age_user, phone_user, whatsapp_user, email_user, password) VALUES (:name,:last,:age,:phone,:whatsapp, :email, :password)";
        $rs = $this->bindValueAll($sql, $obj, null);
        return $rs;
    }

    public function update($obj, $id = null)
    {                                           
        $sql = "UPDATE users SET name_user = :name, last_name_user = :last, age_user = :age, phone_user = :phone, whatsapp_user = :whatsapp WHERE id_users = :id";
        $rs = $this->bindValueAll($sql, $obj, $id);
        return $rs;
    }

    public function delete($obj, $id)
    {
        
        $sql = "DELETE FROM users WHERE id_users = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
        return $consulta->execute();

    }

    public function findAll()
    {
        $sql = "SELECT * FROM users";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function bindValueAll($_sql, $_obj, $id)
    {
        $query = Conexao::prepare($_sql);
        $query->bindValue('name', $_obj->name_user);
        $query->bindValue('last', $_obj->last_name_user);
        $query->bindValue('age', $_obj->age_user);
        $query->bindValue('phone', $_obj->phone_user);
        $query->bindValue('whatsapp', $_obj->whatsapp_user);
        $query->bindValue('email', $_obj->email_user);
        $query->bindValue('password', md5($_obj->password));

        if ($id != null) {
            $query->bindValue('id', $id);
        }
        return $query->execute();
    }
}
