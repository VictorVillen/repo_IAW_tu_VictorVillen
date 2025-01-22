<?php
$clasificacion = [
    "Alonso" => ["Valencia" => 1, "China" => 1, "Brasil" => 1],
    "Hamilton" => ["Valencia" => 4, "China" => 4, "Brasil" => 4],
    "Massa" => ["Valencia" => 2, "China" => 2, "Brasil" => 2],
    "Raikonen" => ["Valencia" => 3, "China" => 3, "Brasil" => 3]
];

$puntos = [1 => 10, 2 => 8, 3 => 7, 4 => 6];
$resultados = [];

foreach ($clasificacion as $piloto => $carreras) {
    $total = 0;
    foreach ($carreras as $lugar => $posicion) {
        $total += $puntos[$posicion];
    }
    $resultados[$piloto] = $total;
}

arsort($resultados);

echo "<p>Clasificacion final:</p>";
foreach ($resultados as $piloto => $total) {
    echo "<p>$piloto: $total puntos</p>";
}
?>
