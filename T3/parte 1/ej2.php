<?php
// Generar dos números aleatorios entre 0 y 100
$numero1 = rand(0, 100);
$numero2 = rand(0, 100);

// Calcular la media aritmética
$media = ($numero1 + $numero2) / 2;

// Mostrar los números y su media
echo "<h1>Números al azar</h1>";
echo "<p>El primer número es: $numero1</p>";
echo "<p>El segundo número es: $numero2</p>";
echo "<p>La media aritmética de los dos números es: $media</p>";
?>
