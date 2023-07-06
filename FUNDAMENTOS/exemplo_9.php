<?php 
    if (isset($_POST["calcular"])){
    $n1 = $_POST  ["n1"];
    $n2 =  $_POST ["n2"];
    $soma = $n1 + $n2;
     echo "A soma é ". $soma;
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_8</title>
</head>
<body>
    <style>
            input{
                width: 100px;
                height: 30px;
                animation: movement 5s infinite;
            }

            @keyframes movement {
                from{top: 0px;}
                to{right: 200px;}
            }


    </style>
    <h2>Calculadora da Soma via POST</h2>
    <form method ="post">
        Numero 1: <input type = "text" name= "n1"> <br>
        Numero 2: <input type = "text" name= "n2"> <br>
        <input type = "submit" name = "calcular" value = "calcular">
    </form>


</body>
</html>