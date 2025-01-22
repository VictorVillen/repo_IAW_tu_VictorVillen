<?php
$dado = rand(1, 6);
$valores = ["uno", "dos", "tres", "cuatro", "cinco", "seis"];

echo "<p>La tirada del dado es: $dado</p>";
echo "En letras: " . $valores[$dado - 1];
?>
