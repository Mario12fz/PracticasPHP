<!-- Conexion con la base de datoss -->
<!-- PDO es una clase que permite conectarme a la base de datos linea 11 -->
<?php

    $servidor="localhost";
    $usuario= "root";
    $contrasenia="";

    try{    // Es como una condicional de errores

        $conexion= new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia );
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Un dia que fui muy feliz', 'foto.jpg')"; // Insertando datos en la base de datos album

        $conexion->exec($sql); // ejecuntando la conexion

        echo "Conexion establecida";

    }catch(PDOException $error){

        echo "Conexion erronea" .$error;

    }




?>