<?php

if(isset($_COOKIE['Cookie'])){
    //var_dump(json_decode($_COOKIE['Cookie'], 1)); //como array
    //echo "<br/>";
    $obj = json_decode($_COOKIE['Cookie']); //como objeto json
    echo $obj->nome;
}

?>