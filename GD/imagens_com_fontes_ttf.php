<?php


// Carregar imagem já existente no servidor
$imagem = imagecreatefromjpeg( "certificado.jpg" );
$black = imagecolorallocate($imagem, 0, 0, 0);
$gray = imagecolorallocate($imagem, 70,70,70);
$date = date('d-m-Y');
$nome = "Lucas Alves de Bastos";
//Passar o caminho inteiro
$font = 'D:'.DIRECTORY_SEPARATOR.'xamp'.DIRECTORY_SEPARATOR.'htdocs'.DIRECTORY_SEPARATOR.'Curso-de-PHP'.DIRECTORY_SEPARATOR.'GD'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf';
$font1 = 'D:'.DIRECTORY_SEPARATOR.'xamp'.DIRECTORY_SEPARATOR.'htdocs'.DIRECTORY_SEPARATOR.'Curso-de-PHP'.DIRECTORY_SEPARATOR.'GD'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf';
imagettftext($imagem, 32, 0, 320, 250, $black, $font, "CERTIFICADO ");
imagettftext($imagem, 32, 0, 375, 350, $gray, $font, $nome);
imagettftext($imagem, 12, 0, 440, 370, $black,$font1, utf8_decode("Concluído em $date"));

// Header informando que é uma imagem JPEG
header( 'Content-type: image/jpeg' );
imagejpeg( $imagem);
imagedestroy($imagem);
?>
