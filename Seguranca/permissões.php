<?php

$pasta = "arquivos";
$permissao = "0755"; // dono tem permissão de tudo, grupo e convidade tem permissao pra leitura e execução
if(!is_dir($pasta)){
    mkdir($pasta, $permissao);
    // 0 = sem permissão,
    // 1 = execução,
    // 2 = gravação,
    // 3 = 1 e 2,
    // 4 = leitura,
    // 5 = 4 e 1,
    // 6 = 4 e 2,
    // 7 é permissão total
    echo "diretorio criado";
}


?>