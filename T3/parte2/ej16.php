<?php
$num_dados = rand(2, 7);
$dados = [];

for ($i = 0; $i < $num_dados; $i++) {
    $dados[] = rand(1, 6);
}

echo "<p>Tirada de $num_dados dado(s):</p>";
foreach ($dados as $index => $dado) {
    echo "<p>Dado " . ($index + 1) . ": $dado</p>";
}
?>
