<?php

$images = scandir("images");
$data = array();

foreach($images as $img){
    if(!in_array($img,array(".", ".."))){
        $filename = "images".DIRECTORY_SEPARATOR."$img";//caminho do arquivo

        $info = pathinfo($filename);//adicionando as informações do arquivo

        $info["size"]= filesize($filename);//tamanho do arquivo

        $info['modified'] = date("d-m-y H:i:s", filemtime($filename));

        $info['url'] = "http://localhost/dir/".str_replace("\\", "/", $filename);

        array_push($data, $info);//criando um array de informações
    }
}
echo json_encode($data);

?>