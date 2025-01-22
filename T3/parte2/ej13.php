<?php
define("FILAS", 10);
define("COLUMNAS", 10);

echo "<table border='1' style='border-collapse: collapse;'>";
$contador = 1;

for ($fila = 1; $fila <= FILAS; $fila++) {
    $color_fondo = ($fila % 2 === 0) ? "#CCCCCC" : "#FFFFFF";
    echo "<tr style='background-color: $color_fondo;'>";
    for ($columna = 1; $columna <= COLUMNAS; $columna++) {
        echo "<td>$contador</td>";
        $contador++;
    }
    echo "</tr>";
}
echo "</table>";
?>
