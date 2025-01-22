<?php
// Generar el peso aleatorio entre 50 y 100 kg
$peso = rand(50, 100);

// Generar la altura aleatoria entre 1.50 y 2.00 metros (en decimales)
$altura = rand(150, 200) / 100; // Dividimos entre 100 para obtener el formato decimal (1.50 - 2.00)

// Calcular el IMC: IMC = peso / altura^2
$imc = $peso / ($altura * $altura);

// Redondear el IMC a un decimal
$imc_redondeado = round($imc, 1);

// Mostrar los resultados
echo "<h1>Cálculo del IMC</h1>";
echo "<p>Peso: $peso kg</p>";
echo "<p>Altura: $altura m</p>";
echo "<p>IMC: $imc_redondeado</p>";
?>
