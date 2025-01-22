<?php
$total_compra = rand(10, 2000) / 10;
echo "El importe total de la compra es: $total_compra €";

if ($total_compra < 30) {
    echo "<p>Compra más o te cobraremos 8,95€ de gastos de envío.</p>";
} elseif ($total_compra < 90) {
    $diferencia = 90 - $total_compra;
    echo "<p>Con sólo $diferencia € más podrás tener gastos de envío gratuitos.</p>";
} else {
    echo "<p>Gastos de envío incluidos.</p>";
}
?>