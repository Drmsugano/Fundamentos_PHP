<?php 
    //Crie um program para receber 3 programas para receber o delta da Bhaskara
    function delta ($v1,$v2,$v3){
        return ($v2*$v2)-4*$v3*$v1;
    }
    $n1 = $_GET ["p1"];
    $n2 = $_GET ["p2"];
    $n3 = $_GET ["p3"];

    $delta = delta($n1,$n2,$n3);
    echo "O delta de A = ". $n1 . ", B = ". $n2 .", C = ". $n3. "<br>" . "DELTA = ". $delta. "<br> E sua Bhaskara I é ". (($n2+sqrt($delta))/(2*$n1)). "<br> E sua Bhaskara II é ". (($n2 -sqrt($delta))/(2*$n1));
?>