<?php

class Sql extends PDO{
    private $conn;
    public  function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=db_php7","root","");
    }

    private function setParams($stmt, $params = array()){ //separa o array params em chave e valor
        foreach ($params as $key => $value){
            $this -> setParam($stmt, $key,$value);
        }
    }

    private function setParam($stmt, $key, $value){ //junta a chave e o valor mandado pela função setParams
        $stmt -> bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()){ //faz a junção da query com os params pra evitar sqlinject
        $stmt = $this -> conn -> prepare($rawQuery);
        $this -> setParams($stmt, $params);
        $stmt -> execute();
        return $stmt;
    }
}
?>