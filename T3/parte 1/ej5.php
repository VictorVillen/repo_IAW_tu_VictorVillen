<?php
// Generar una cantidad de segundos aleatoria entre 0 y 10000
$segundos_totales = rand(0, 10000);

// Calcular horas, minutos y segundos
$horas = floor($segundos_totales / 3600); 
$resto = $segundos_totales % 3600;       
$minutos = floor($resto / 60);          
$segundos = $resto % 60;                 

// Mostrar los resultados
echo "<h1>Conversión de Segundos</h1>";
echo "<p>Segundos totales: $segundos_totales</p>";
echo "<p>Horas: $horas</p>";
echo "<p>Minutos: $minutos</p>";
echo "<p>Segundos: $segundos</p>";
?>
