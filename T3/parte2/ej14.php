<?php
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

for ($base = 1; $base <= 4; $base++) {
    echo "<tr>";
    for ($potencia = 1; $potencia <= 4; $potencia++) {
        echo "<td>" . pow($base, $potencia) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
