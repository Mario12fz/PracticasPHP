<!-- Visibilidad de datos -->

<?php


    class persona{

        public $nombre; // Propiedades
        private $edad; 
        protected $altura;

        public function asignarNombre($nuevoNombre){ // acciones o metodos

            $this->nombre= $nuevoNombre;

        }
        public function imprimirNombre(){

            echo "Hola soy " .$this->nombre;

        }
        public function mostrarEdad(){
            $this ->edad= 20;
            return $this->edad;
        }

    }

    $objAlumno = new persona(""); // Instancia o creacion de un objeto
    $objAlumno-> asignarNombre("Maria"); // Lamando un metodo

    $objAlumno2 = new persona("");
    $objAlumno2-> asignarNombre("Luis Mario");
    $objAlumno2-> imprimirNombre();

    echo $objAlumno2->nombre . "<br>";
    echo $objAlumno2->mostrarEdad();

    echo $objAlumno->nombre; // Imprimir una propieda

 


?>