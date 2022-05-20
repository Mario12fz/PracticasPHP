<!--Operadores Aritmeticos-->
<?php

    if($_POST){

        $valorA =$_POST['valorA'];
        $valorB =$_POST['valorB'];

        // SUMA
        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $multiplicacion = $valorA * $valorB;
        $division = $valorA / $valorB;
        $resto = $valorA % $valorB;
       
        echo $suma."<br>";
        echo $resta."<br>";
        echo $multiplicacion."<br>";
        echo $division."<br>";
        echo $resto."<br>";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>

    <form action="ejercicio7.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    <br>
    valor B:
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="Calcular">

    </form>

    
    
</body>
</html>