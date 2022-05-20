<?php

if($_POST){

$num1 = $_POST['txtNum1'];
$num2 = $_POST['txtNum2'];

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multi = $num1 * $num2;


echo "La suma de " .$num1 ." + " .$num2 ." = " . $suma;
echo '<br>';
echo "La resta de " .$num1 ." - " .$num2 ." = " . $resta;
echo '<br>';
echo "La multiplicacion  de " .$num1 ." X " .$num2 ." = " . $multi;


}




?>