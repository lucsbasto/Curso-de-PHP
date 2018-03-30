<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Silas","idade":29}]';

$data = json_decode($json, true);

var_dump($data);

?>