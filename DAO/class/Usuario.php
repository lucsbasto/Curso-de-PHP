<?php

class Usuario
{
    private $id;
    private $login;
    private $senha;
    private $dtcadastro;

    public function __construct($login = "", $pass = "") // recebe login e senha como usuario e seta como "" se não for passado
    {
        $this->setLogin($login);
        $this->setSenha($pass);
    }

    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function isSeted($data){ // verifica se o array $data ta setado se tiver é pq retornou algo
        if(count($data)>0){// count($result)>0
            $this->getData($data);
            return true;
        }
        else{
            return false;
        }
    }
    public function loadById($id){//select por id
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE id = :id",array(":id"=> $id));
        $this->isSeted($result[0]);
    }

    public function loadByLogin($login){//select por login
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE login = :login",array(":login"=> $login));
        $this->isSeted($result[0]);
    }

}

?>