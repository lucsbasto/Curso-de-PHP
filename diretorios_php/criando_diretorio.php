<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);//cria diretorio
    echo "Diretorio $name criado com sucesso !";
}
else{
    //rmdir($name); //apaga diretorio
    echo "Diretorio $name já existe !";
}

?>