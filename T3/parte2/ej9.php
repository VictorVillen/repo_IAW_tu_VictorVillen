<?php
$num_dados = rand(1, 10);
$total = 0;

echo "<p>Tirada de $num_dados dado(s):</p>";
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6);
    $total += $dado;
    echo "<p>Dado $i: $dado</p>";
}

echo "<p>Total de puntos obtenidos: $total</p>";
?>
