<!-- Abrir un archivo -->
<?php 
// Abriendo un archivo para leer el contendio
$archivo="contenido.txt";

$archivoAbierto=fopen($archivo,"r"); // Fopen es para abrir el archivo

$contenido=fread($archivoAbierto,filesize($archivo)); // fread para leer

echo $contenido;











?>