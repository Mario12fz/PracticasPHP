<!-- Operadores Logicos [&&, ||, ] --> 
<?php

    if($_POST){

        $valorA =$_POST['valorA'];
        $valorB =$_POST['valorB'];

        if ( ($valorA != $valorB) || ($valorA > $valorB) ){ // && significa "Y" y lo que hace es confirmar 

            echo "El valor de A es mayor que el valor de B y tambien es mayor";
        }
        // || significa que si cumple un valor lo tomara
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>
<body>

    <form action="ejercicio9.php" method="post">
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
