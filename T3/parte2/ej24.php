<?php
$num_dados = rand(2, 7);
$dados = [];

for ($i = 0; $i < $num_dados; $i++) {
    $dados[] = rand(1, 6);
}

sort($dados);

echo "Tirada de dados ordenada: " . implode(", ", $dados);
?>
