<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id) > 5){
    exit("sai dae doido");
}

$conn = mysqli_connect("localhost", "root", "", "db_php7");

$sql = "SELECT * FROM tb_usuarios WHERE id= $id";

$exec = mysqli_query($conn, $sql);

while ($exibe = mysqli_fetch_object($exec)){

    var_dump($exibe);

}
?>