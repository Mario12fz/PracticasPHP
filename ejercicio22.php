<!-- Leer arreglos -->
<?php

$frutas= array("fresa", "Pera", "Manzana");

    
print_r($frutas);

echo $frutas[2]."<br>";
//Mostrara el indice numericoo de  pera 

for($indice = 0; $indice< 3; $indice++){

    echo $frutas[$indice]."<br>"; // Mostrar el arreglo

}



?>