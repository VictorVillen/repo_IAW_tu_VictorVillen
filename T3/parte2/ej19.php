<?php
$secuencia1 = [];
$secuencia2 = [];
$secuencia3 = [];
$secuencia_final = [];

for ($i = 0; $i < 10; $i++) {
    $secuencia1[] = rand(0, 1);
    $secuencia2[] = rand(0, 1);
    $secuencia3[] = rand(0, 1);

    $suma = $secuencia1[$i] + $secuencia2[$i] + $secuencia3[$i];
    $secuencia_final[] = ($suma >= 2) ? 1 : 0;
}

echo "<p>Secuencia 1: " . implode('', $secuencia1) . "</p>";
echo "<p>Secuencia 2: " . implode('', $secuencia2) . "</p>";
echo "<p>Secuencia 3: " . implode('', $secuencia3) . "</p>";
echo "<p>Secuencia final: " . implode('', $secuencia_final) . "</p>";
?>
