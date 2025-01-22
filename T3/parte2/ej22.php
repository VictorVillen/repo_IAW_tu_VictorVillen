<?php
$cantidad = rand(5, 10);
$numeros = [];

for ($i = 0; $i < $cantidad; $i++) {
    $numeros[] = rand(1, 10);
}

echo "<p>Numeros generados: " . implode(", ", $numeros) . "</p>";
echo "<p>Numero mas alto: " . max($numeros) . "</p>";
echo "<p>Numero mas bajo: " . min($numeros) . "</p>";
?>
