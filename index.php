<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica1</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form action="ejercicio2.php" method="post">
        Numero 1:
        <input type="text" name="txtNum1" id="">
        <br>
        <br>
        Numero 2:
        <input type="text" name="txtNum2" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <h2>METODO GET</h2>
    <br>
    <hr>
    <form action="ejercicio3.php" method="get">
    Nombre:
    <input type="text" name="txtnombre" id="">
    <br>
    <hr>
    <input type="submit" name="Enviar">


    </form>
    
    
    <style>
        body{
            background-color: blanchedalmond;
        }
    </style>  
</body>
</html>