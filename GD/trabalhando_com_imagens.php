<?php

header('Content-Type:image/png');

$img = imagecreate(256, 256); // largura e altura

$black = imagecolorallocate($img,0, 0, 0); //variavel resource, rgb
$white = imagecolorallocate($img, 255, 255, 255);//variavel resource, rgb

imagestring($img, 5, 60, 120, "Curso de PHP 7", $white);//variavel resource, tamanho, eixo x, eixo y, string e cor
imagepng($img); //renderiza a imagem
imagedestroy($img);//destroi a variavel resource pra não dar erro, mesma coisa de fechar um arquivo

?>