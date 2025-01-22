<?php
$num_dados = rand(1, 10);
$pares = 0;
$impares = 0;

echo "<p>Tirada de $num_dados dado(s):</p>";
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6);
    echo "<p>Dado $i: $dado</p>";
    if ($dado % 2 === 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "<p>Numeros pares: $pares</p>";
echo "<p>Numeros impares: $impares</p>";
?>
