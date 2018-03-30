<?php

function teste($callBack){
    
    //Processo Lento
    $callBack();

}

teste(function(){

    echo "Terminou";

});