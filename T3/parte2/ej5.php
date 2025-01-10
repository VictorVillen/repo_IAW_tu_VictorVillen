<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

echo "<p>Tirada de dados: $dado1 y $dado2</p>";

if ($dado1 % 2 === 0 && $dado2 % 2 !== 0) {
    echo "<p>Objetivo de paridad consegido</p>";
} else {
    echo "<p>No se logró el objetivo de paridad.</p>";
}
?>
