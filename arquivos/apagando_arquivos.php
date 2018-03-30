<?php

if(!is_dir("image")){
    mkdir("image");
}
foreach (scandir("image") as $item){
    if(!in_array($item, array(".", ".."))){
    unlink("image/$item");
    print ("$item apagado !<br/>");
    }
}
echo "todos os itens apagados";
?>