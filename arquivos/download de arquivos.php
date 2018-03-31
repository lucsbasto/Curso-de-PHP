<?php

$link = "https://jovemnerd.com.br/wp-content/uploads/2017/08/v-it-a-coisa-760x428.jpg";//link da img

$content = file_get_contents($link); //conteudo da img em bytes

$parse = parse_url($link); // conteudo da img organizado em scheme, host e path
$basename = basename($parse['path']); //pegando o nome da img ex: img.jpg


$file = fopen("img.jpg", "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?=$basename?>">
