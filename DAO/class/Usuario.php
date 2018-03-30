<?php

class Usuario
{
    private $id;
    private $login;
    private $senha;
    private $dtcadastro;

    public function __construct($login = "", $pass = "")
    {
        $this->setLogin($login);
        $this->setSenha($pass);
    }

}

?>