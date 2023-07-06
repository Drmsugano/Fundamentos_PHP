<?php 
//Crie um Script para pegar 3 valores da URL e mostrar a Soma.
function soma ($v1,$v2,$v3){
    return $v1 + $v2 + $v3;
}

$parametro1 = $_GET ['p1'];
$parametro2 = $_GET ['p2'];
$parametro3 = $_GET ['p3'];


$soma = soma ($parametro1, $parametro2, $parametro3) ;

echo "A soma é " . $soma. "<br>";
?>