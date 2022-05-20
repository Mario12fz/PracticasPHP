<!-- If anidado php -->
<!-- If significa "Si pasa algo realiza esto" -->
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

        if($valorA == $valorB){ // == significa una comparacion y solo el = es una asignacion

            echo "El valor de A es igual al valor de B <br>";

            if($valorA == 4){ // Se pregunta si el valor A es igual a 4

                echo " El valor es 4 <br>";
            }
            if($valorA == 5){
                echo " El valor es 5";
            }
        }
        if ( ($valorA == $valorB) && ($valorA == 4) ){

            echo "El valor de A es igual a B y es un numero 4";

        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidado</title>
</head>
<body>

    <form action="ejercicio10.php" method="post">
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