<!-- Variables de session -->
<!-- Crear aunteticacion -->
<?php

    session_start(); // Mantener informacion mientras el naveh=gador esta abierto

    $_SESSION["usuario"]="luismario";
    $_SESSION["estatus"]="logueado";

    echo "Sesion Iniciada". ":<br>";

    echo "Usuario: " .$_SESSION["usuario"]. " estatus: ".$_SESSION["estatus"];


?>