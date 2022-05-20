<!-- Metodos estaticos -->

<?php 

    class UnaClase{

        public static function unMetodo(){

            echo "Hola soy un metodo estatico";

        }



    }

    $obj= new UnaClase();  // accediendo por clase
    $obj-> unMetodo();

    unaClase::unMetodo(); // accediendo al metodo , de forma estatica




?>