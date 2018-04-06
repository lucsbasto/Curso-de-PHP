<?php
//só da um composer update e colocar o arquivo vender/slim/slim/.htacess na pasta raiz
require_once ("vendor\autoload.php");

$app = new \Slim\Slim();
$app->get("/", function(){
    echo "Home Page !";
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

?>

