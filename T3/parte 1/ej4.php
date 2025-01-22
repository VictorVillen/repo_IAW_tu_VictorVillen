<?php
// Generar horas, minutos y segundos aleatorios entre 0 y 150
$horas = rand(0, 150);
$minutos = rand(0, 150);
$segundos = rand(0, 150);

// Calcular el valor total en segundos
$total_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

// Mostrar los resultados
echo "<h1>Cálculo de Tiempo en Segundos</h1>";
echo "<p>Horas: $horas</p>";
echo "<p>Minutos: $minutos</p>";
echo "<p>Segundos: $segundos</p>";
echo "<p>El valor total en segundos es: $total_segundos segundos</p>";
?>
