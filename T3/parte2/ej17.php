<?php
$pares = [];

for ($i = 1; $i <= 10; $i++) {
    $pares[] = $i * 2;
}

echo "<p>Los 10 primeros números pares:</p>";
foreach ($pares as $par) {
    echo "</p>$par</p>";
}
?>
