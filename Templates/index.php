<?php

require_once ('vendor/autoload.php');
// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/", //tem que criar essa pasta
    "cache_dir"     => "cache/", //tem que criar essa pasta tb
);
Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Usuário" ); //variavel mostrada no index.html
$tpl->assign( "version", PHP_VERSION ); //variavel mostrada no index.html
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" ); //a extensão padrão é html
?>