<?php
$cantidad = rand(7, 20);
$numeros = [];

for ($i = 0; $i < $cantidad; $i++) {
    $numeros[] = rand(1, 10);
}

$frecuencias = array_count_values($numeros);

echo "<p>Numeros generados: " . implode(", ", $numeros) . "</p>";
echo "<p>Frecuencia de cada numero:</p>";
foreach ($frecuencias as $numero => $cantidad) {
    echo "<p>$numero aparece $cantidad vez/veces</p>";
}
?>
