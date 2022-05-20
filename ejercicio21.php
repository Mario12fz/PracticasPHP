<!-- Arreglos Asociativos -->
<!-- indice son los numeros o cararcteres -->
<?php

    $frutas= array("f" => "fresa", "m" =>"Manzana", "p" => "Pera");

    print_r($frutas);

    echo $frutas["m"]. "<br>"; // Navegando en el arreglo

    foreach($frutas as $indice=> & $valor){

        echo "El valor " .$valor ." Tiene el valor indice: " .$indice. "<br>";

    }

?>
