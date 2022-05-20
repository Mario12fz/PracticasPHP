<!-- Clases en PHP -->
<!-- Una clase es como una plantillas -->
<?php


    class persona{

        public $nombre; // Propiedades

        public function asignarNombre($nuevoNombre){ // acciones o metodos

            $this->nombre= $nuevoNombre;

        }
        public function imprimirNombre(){

            echo "Hola soy " .$this->nombre;

        }

    }

    $objAlumno = new persona(); // Instancia o creacion de un objeto

    $objAlumno-> asignarNombre("Maria"); // Lamando un metodo

    $objAlumno2 = new persona();

    $objAlumno2-> asignarNombre("Luis Mario");

    $objAlumno2-> imprimirNombre();

    echo $objAlumno2->nombre . "<br>";

    echo $objAlumno->nombre; // Imprimir una propieda

 


?>