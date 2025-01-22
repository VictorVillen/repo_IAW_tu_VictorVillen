<?php
// Definir tres variables enteras con valores aleatorios entre 1 y 10
$variable1 = rand(1, 10);
$variable2 = rand(1, 10);
$variable3 = rand(1, 10);

// Crear una cadena de caracteres que une las variables con comas
$cadena = $variable1 . "," . $variable2 . "," . $variable3;

// Resultado
echo "<h1>Unión de Variables</h1>";
echo "<p>Las variables generadas son: $cadena</p>";
?>
