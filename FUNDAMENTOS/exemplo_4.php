<?php 
    echo "Antes do For <br>";
    for ($i= 0; $i < 10 ; $i++) { 
        if ($i == 4) {
            break;
        }
        echo $i. "<br>";
    }

    echo "DEPOIS DO FOR <br>"
?>