<!-- Funciones -->
<!-- Son instruciones que nosotros podemos utilizar muchas veces -->
<?php

    function imprimirNombre($nombre, $apellido = ""){ //Cuando yo invoque genere ciertas rutinas
        // Rutinas (Instrucciones)

        echo "Hola " .$nombre. " " .$apellido ."<br>";

    }

    //Llamar a la funcion
    imprimirNombre("Mario", "Fuentes"); 
    imprimirNombre("Alondra", "Lopez");
    imprimirNombre("Estefany", "Azucena");


    function InvitarFiesta($invitar, $nombre){

        echo $invitar. " " .$nombre;

    }

    InvitarFiesta("Bienvenido a la fiesta", "Luis Mario");

?>