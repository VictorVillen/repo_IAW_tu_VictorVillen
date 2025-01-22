<?php
$año = rand(1582, 2100);
echo "El año generado es: $año</p>";

if (($año % 4 === 0 && $año % 100 !== 0) || ($año % 400 === 0)) {
    echo "<p>El año $año es bisiesto</p>";
} else {
    echo "<p>El año $año no es bisiesto</p>";
}
?>
