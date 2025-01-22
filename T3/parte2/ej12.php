<?php
echo "<table border='1' style='border-collapse: collapse;'>";
$contador = 1;

for ($fila = 1; $fila <= 10; $fila++) {
    echo "<tr>";
    for ($columna = 1; $columna <= 10; $columna++) {
        echo "<td>$contador</td>";
        $contador++;
    }
    echo "</tr>";
}
echo "</table>";
?>
