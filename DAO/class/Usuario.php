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

    public static function getList(){ //retorna uma lista ordenado por id
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY id");
    }

    public static function search($login){ //retorna os usuarios que tem o parametro em alguma parte do login
        $sql = new Sql();
        $result =  $sql->select("SELECT * FROM  tb_usuarios WHERE login LIKE :login ORDER BY id", array(
            ":login"=>"%$login%"
        ));
    }

    public function login($login, $pass){ //retorna o usuario que tiver o login e a senha passadas por parametro
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE login = :login AND senha = :password", array(
            ":login"=>$login,
            ":password"=>$pass
        ));
        if($this->isSeted($result[0])){
        }
        else {
            throw new Exception("Login e/ou senha inválidos.");
        }
    }

    public function getData($data){ //retorna os dados já formatados
        $this->setid($data['id']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert($table, $login, $pass){

        $sql = new Sql();
        $result = $this::search("$login");
        if(isset($result)){
            echo "Login já cadastrado !";
        }
        else{
            $sql->query("INSERT INTO $table(login, senha) VALUES (:login, :senha)",array(
                ":login"=> $login,
                ":senha"=>$pass
            ));
            echo "Usuário cadastrado com sucesso !";
// PEGA O ULTIMO USUARIO ADICIONADO
//            $id = $sql -> select("SELECT LAST_INSERT_ID()");
//            $id = $id[0]['LAST_INSERT_ID()'];
//            $data = $sql->select("SELECT * FROM $table WHERE id = :id", array(":id"=>$id));
//            $this->getData($data[0]);
        }
    }
}

?>