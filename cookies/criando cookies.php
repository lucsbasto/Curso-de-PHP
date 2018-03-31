<?php

$data = array(
    'nome'=>'lucas'
);
setcookie("Cookie", json_encode($data), time()+1200);
echo "coockie criado";

?>