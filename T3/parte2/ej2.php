<?php
$valor1 = rand(1, 100);

if ($valor1 == 50) {
    print "<p>$valor1 es igual a 50</p>";
}   elseif ($valor1 < 50) {
    print "<p>$valor1 es menor que 50</p>";
}   else {
    print "<p>$valor1 es mayor que 50</p>";
}
?>