<?php
require_once 'config.php';
$img = imagecreatefromjpeg('certificado.jpg');
$black = imagecolorallocate($img, 0,0,0);
$gray = imagecolorallocate($img, 100,100,100);
$date = date('d-m-Y');
imagestring($img,5, 450, 150, 'Certificado', $black);
imagestring($img,5, 440, 350, 'Lucas Alves', $black);
imagestring($img,3, 440, 370, utf8_decode("Concluído em ").date('d/m/Y'), $gray);
header("Content-Type: image/jpeg");
imagejpeg($img, "certificado-$date.jpg", 100);
imagedestroy($img);

?>