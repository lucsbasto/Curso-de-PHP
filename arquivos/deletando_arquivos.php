<?php

$file = fopen("teste.txt", "w+");
$texto = "O autocontrole é fruto da experiência pessoal e consiste em aprender a regular as próprias respostas para satisfazer às necessidades pessoais, considerando princípios e valores nas mais variadas situações ";
fwrite($file, $texto);
fclose($file);
unlink("teste.txt");
echo "arquivo removido";
?>