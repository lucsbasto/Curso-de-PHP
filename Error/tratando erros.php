<?php
function error_handler($code, $message, $file, $line){
// o php manda os parametros na seguinte ordem: código, mensagem, arquivo, linha
    echo json_encode(array(
        "Code"=>$code,
        "Message"=>$message,
        "File"=>$file,
        "Line"=>$line
    ));
}
set_error_handler("error_handler");

$a= 100/0;
?>