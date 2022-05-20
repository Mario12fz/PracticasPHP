<!-- Funcion para json_decode -->
<!-- Son informacion que nos envian como una API -->
<?php 

$jsonContenido= '[

    {"nombre":"Oscar", "apellido": "Uh"},
    {"nombre":"Raton", "apellido": "Perez"}

]';

$resultado = json_decode($jsonContenido);
//print_r($resultado);

foreach ($resultado as $persona){

    echo ($persona->nombre) ." ". ($persona->apellido)."<br>";

}





?>