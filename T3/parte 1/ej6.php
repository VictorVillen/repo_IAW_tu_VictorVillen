<?php
// Generar numero aleatorio del 1 al 6 como un dado
$numero_tirada1 = rand(1, 6);
$numero_tirada2 = rand(1, 6);

// Calcular suma de las dos tiradas
$suma = $numero_tirada1 + $numero_tirada2;

// Mostrar resultados
echo "<p>Primera tirada de dado: $numero_tirada1</p>";
echo "<p>Segunda tirada de dado: $numero_tirada2</p>";
echo "<p>Suma de las dos tiradas: $suma</p>";