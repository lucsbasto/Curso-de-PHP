<?php

$filename = "users.csv";
if(file_exists($filename)){
    $file = fopen($filename, 'r');
    $headers = explode(",", fgets($file));
    //var_dump($headers);
}
$content = array();
while ($row = fgets($file)){
    $linha = array();
    $rowData = explode(",", $row);
    for($i = 0; $i<count($headers); $i++){
        $linha[$headers[$i]] = $rowData[$i];
    }
    array_push($content, $linha) ;
}
$json = json_encode($content);
echo $json;
fclose($file);
$file_r = fopen("users.txt", "w+");
fwrite($file_r, $json);
?>