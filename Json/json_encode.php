<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Silas',
    'idade' => 29
));

echo json_encode($pessoas);

?>