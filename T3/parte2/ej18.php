<?php
$valores = [
    "a" => rand(1, 100),
    "b" => rand(1, 100),
    "c" => rand(1, 100),
    "d" => rand(1, 100),
];

foreach ($valores as $clave => $valor) {
    echo "<p>\$v[$clave] = $valor;</p>";
}
?>
