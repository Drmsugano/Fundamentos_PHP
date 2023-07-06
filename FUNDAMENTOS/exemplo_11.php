<?php 
    function somar ($n1,$n2){
        $soma = $n1 + $n2;
        return $soma;
    }
    if (isset($_POST["calcular"])){
    $v1 = $_POST  ["n1"];
    $v2 =  $_POST ["n2"];
    $soma = somar($v1,$v2);
    $mensagem = "A soma é ". $soma;
    echo "<div class='alert alert-primary' role='alert'>
    $mensagem
    </div>";
    }
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<form method= "post">
  <div class="mb-3">
    <label for="n1" class="form-label">Numero 1</label>
    <input type="text" name = "n1" class = "form-control" id = "n1">
  </div>
  <div class="mb-3">
    <label for="n2" class="form-label">Numero 2</label>
    <input type="text" name = "n2" class = "form-control" id = "n2">
  </div>
  <button type="submit" name = "calcular" class="btn btn-primary">CALCULAR</button>
</form>
</div>
</body>
</html>