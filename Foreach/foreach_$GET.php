<form>
    <input type = "text" name ="Nome">
    <input type = "date" name ="Nascimento">
    <input type = "submit" value ="OK">
</form>
<?php

if(isset($_GET)){


    foreach ($_GET as $key => $value) {
        echo "Nome : " . $key . "<br/>";
        echo "Nascimento: " . $value;

        echo "<hr>";

    }
}
