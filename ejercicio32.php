<!-- Valores del input text -->
<?php

    $txtNombre = "";
    $rdgLenguaje="";

    $chkphp="";
    $chkhtml="";
    $chkcss="";

    $lsAnime="";
    $txtComentario="";
    if($_POST){

        $txtNombre= (isset($_POST['txtNombre']))? $_POST['txtNombre']:""; 
        $rdgLenguaje= (isset($_POST['lenguaje']))? $_POST['lenguaje']:""; // If ternario , el ? sigfica de lo contrario hacer esto
        $chkphp= ( isset($_POST['chkphp'])=="si")?"chkphp":"";
        $chkhtml= ( isset($_POST['chkhtml'])=="si")?"chkhtml":"";
        $chkcss=( isset($_POST['chkcss'])=="si")?"chkcss":"";
        $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"";
        $txtComentario= (isset($_POST['txtComentario']))? $_POST['txtComentario']:"";
        
        // Instrucion de insertar
        // Rutina de algun calculo
        // Aqui puedes alteras esos valores para mostrar diferentes valores modificados

    }                

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>

        <strong> Hola </strong>: <?php echo $txtNombre; ?> 
        <br>
        <strong> Tu lenguaje es: </strong>  <?php echo $rdgLenguaje; ?>
        <br>
        <strong> Estas aprendiendo: </strong> <br>
        -  <?php echo ($chkphp=="chkphp")?"PHP":""; ?><br>
        -  <?php echo ($chkhtml=="chkhtml")?"HTML":""; ?><br>
        -  <?php echo ($chkcss=="chkcss")?"CSS":""; ?><br>
        <br>
        <strong> Anime que te gusta: </strong> 
        <?php echo  $lsAnime; ?>
        <br>

        <strong> Tu mensaje es</strong> <?php  echo $txtComentario; ?>

   <?php } ?>
    
    <form action="ejercicio32.php" method="post">

        Nombre: <br>
        <input  value="<?php echo $txtNombre?>" type="text" name= "txtNombre" id="">
        <br>
        Te gusta?<br>
        <!-- Utilizando el radio -->
        <br>php:<input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""><br>
        <br>html:<input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""><br>
        <br>css:<input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""><br>

        <!-- Utilizando el checkbox -->
        Estas aprendiendo....<br>
        <br> php:<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br> html:<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id="">
        <br> css:<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id="">
        <br>

        <!-- Valores select option -->

        Que anime te gusta?...<br>
        <select name="lsAnime" id="">

        <option value="">[Ninguna serie]</option>
        <option value="shingeki" <?php echo ($lsAnime=="shingeki")? "selected":"";  ?>>Shingeki no kiojin</option>
        <option value="demon"  <?php echo ($lsAnime=="demon")? "selected":"";  ?>>Demon Slayer</option>
        <option value="dragon"  <?php echo ($lsAnime=="dragon")? "selected":"";  ?>>Dragon Ball z</option>
        </select>
        <br>
        <br>

        Tienes alguna duda?<br>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario;?>
        </textarea>
        <br>

        <input type="submit" value="Enviar informacion">


    </form>
    
</body>
</html>