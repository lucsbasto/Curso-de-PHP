<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <button type="submit">SEND FILE</button>
</form>


<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["upload"];
    if($file["error"]){
        throw new Exception("Error: ".$file["error"]);
    }
    $dir = "tmp";
    if(!is_dir($dir)){
        mkdir($dir);
    }
    if (move_uploaded_file($file["tmp_name"], $dir.DIRECTORY_SEPARATOR.$file["name"])){
        echo "upload realizado com sucesso !";
    }
    else{
        echo "erro no upload";
    }
}

?>