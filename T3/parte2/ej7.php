<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);

echo "<p>Tirada de dados: $dado1, $dado2, $dado3</p>";

if ($dado1 === $dado2 && $dado2 === $dado3) {
    echo "<p>Salio un trio</p>";
} elseif ($dado1 === $dado2 || $dado1 === $dado3 || $dado2 === $dado3) {
    echo "<p>Salio una pareja</p>";
} else {
    $maximo = max($dado1, $dado2, $dado3);
    echo "<p>El mayor valor obtenido es: $maximo</p>";
}
?>
