<?php
$num_dados = rand(1, 10);
$valores = [];

echo "<p>Tirada de $num_dados dado(s):</p>";
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6);
    $valores[] = $dado;
    echo "<p>Dado $i: $dado</p>";
}

$maximo = max($valores);
$frecuencia = array_count_values($valores)[$maximo];

echo "<p>El valor maximo es: $maximo</p>";
echo "<p>Aparecio $frecuencia vez/veces</p>";
?>
