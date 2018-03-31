<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)){
    mkdir($dir1);
}

if(!is_dir($dir2)){
    mkdir($dir2);
}

$filename = "readme.txt";
$string =  "\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.
Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing.";

if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
    $file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");
    fwrite($file, date('d-m-Y H:i:s'));
    fwrite($file, $string);
    fclose($file);
    echo "arquivo criado";
}
rename($dir1.DIRECTORY_SEPARATOR.$filename, //caminho antigo
      $dir2.DIRECTORY_SEPARATOR.$filename); //novo caminho
?>