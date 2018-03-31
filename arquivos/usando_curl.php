<?php

$cep = "77600000";

$link = "https://viacep.com.br/ws/$cep/json/";
$curl = curl_init($link);
// curl_setopt(variavel do curl init, constante dizendo se espera um valor de retorno, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt(variavel do curl init, constante dizendo se precisa verificar se tem certificado, false)
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//aqui ele vai executar tudo
$response = curl_exec($curl);
//pra fechar a conexão
curl_close($curl);
echo $response;//printando como json
//$data = json_decode($response, true);//true pra transformar em array, se não colocar o true ele transforma em objeto
?>