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

}

?>