<?php
$idiomas = ["Español", "Inglés", "Francés", "Alemán", "Italiano"];
$palabras = [
    ["Lunes", "Monday", "Lundi", "Montag", "Lunedì"],
    ["Casa", "House", "Maison", "Haus", "Casa"],
    ["Agua", "Water", "Eau", "Wasser", "Acqua"],
    ["Sol", "Sun", "Soleil", "Sonne", "Sole"],
    ["Amor", "Love", "Amour", "Liebe", "Amore"]
];

$palabra_aleatoria = rand(0, count($palabras) - 1);
$idioma_aleatorio = rand(0, count($idiomas) - 1);

echo "La palabra \"" . $palabras[$palabra_aleatoria][1] . "\" en " . $idiomas[$idioma_aleatorio] . " significa \"" . $palabras[$palabra_aleatoria][$idioma_aleatorio] . "\".";
?>
