<?php

header('Content-Type: image/jpeg');
$file = "wallpaper.jpg";
$new_width = 500;
$new_height = 500;
//imagecreatetruecolor() cria a imagem com a paleta de 16 milhões de cores
$new_image = imagecreatetruecolor($new_width, $new_height);
//cria uma a partir de uma outra imagem
$old_image = imagecreatefromjpeg($file);



//pega as posições e atribui as variaveis nas respectivas posições
list($old_width, $old_height) = getimagesize($file);

//imagem destino, imagem origem, eixo x da destino, eixo y da destino, eixo x da antiga, eixo y da antiga,
// largura destino, altura destino, largura antiga, altura antiga
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image, "wallpaper-01.jpg");
imagedestroy($new_image);
imagedestroy($old_image);
echo "$old_width -- $old_height";
?>