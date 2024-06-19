<?php
echo "My first PHP script!";
echo "<br>";
echo "Mis datos";
$nombre = "David Sierra";
$edad = 25;
$estatura = 1.73;
echo " Soy ... " . strtoupper($nombre) . " Tengo " . $edad . " años y mido " . $estatura . "metros"; 
echo "<br>";
var_dump($nombre);
echo "<br>";

$x = 34;
$y = 356.78;

$suma = $x + $y;
echo "La suma de $x + $y = $suma"; echo "<br>";

$resta = $x - $y;
echo "La resta de $x - $y = $resta"; echo "<br>";

$multiplicacion = $x * $y;
echo "La multiplicacion de $x * $y = $multiplicacion"; echo "<br>";

$divicion = $x / $y;
echo "La suma de $x / $y = $divicion"; echo "<br>";

$residuo = $x % $y;
echo "El residuo de $x % $y = $residuo"; echo "<br>";



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>
    Hola!!
</body>
</html>