<!-- Valores input file -->
<?php 

    if($_POST){

        print_r($_POST);
    
        print_r($_FILES['archivo']['name']);

        move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']); // Obtener el archivo original
        // Para guardar en el servidor
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>

    <form action="ejercicio33.php" enctype="multipart/form-data" method="post">

        Imagen:
        <input type="file" name="archivo" id=""><br>
        <br>
        <input type="submit" name="enviar" value="Enviar informacion">


    </form>
    
</body>
</html>