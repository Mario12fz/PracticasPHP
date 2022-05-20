<?php

echo "HOLA MUNDO" ; 
echo "<br>";
$num1 = 8;
$num2 = 1;
$suma;
 
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multi = $num1 * $num2;
$div = $num1 / $num2;
$resto = $num1 % $num2;

echo "La suma es " .$suma;
echo "<br>";
echo "La resta es " .$resta;
echo "<br>";
echo "La multiplicacion es " .$multi;
echo "<br>";
echo "La division es " .$div;
echo "<br>";
echo "El resto es " .$resto;
echo "<br>";

if ($suma > 10){
    echo "Bienvenido";
}else{
    echo "Sos pro en HD";
}
?>