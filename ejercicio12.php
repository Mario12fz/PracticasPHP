<!-- Como usar switch -->
<?php

    if($_POST){

        $boton= $_POST['btnValor']; //Recibiendo el boton

        switch($boton){ //Switch evalua lo que hace el usuario, en este caso evalua cual boton fue oprimido.

            case 'dia1': //caso dado es 1, imprimir el siguiente mensaje
                echo "Bienvenido a tu primer dia de programacion <br>";
                echo "curso de JAVA Y PYTHON <br>";
                $hoy = date( "Y - m - d");
                echo $hoy;
                break; /*Hace que no continue la evaluacion
                           y tambien los case son condicionales  */
            case 'dia2':
                echo "Bienvenido a tu segundo dia de programacion";
                break;
            case 'dia3':
                echo "Bienvenido a tu tercer dia de programacion";
                break;

        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de switch</title>
</head>
<body>
    <form action="ejercicio12.php" method="post">

        <input type="submit" name="btnValor" value="dia1">
        <br>
        <input type="submit" name="btnValor" value="dia2">
        <br>
        <input type="submit" name="btnValor" value="dia3">

    </form>
    
</body>
</html>