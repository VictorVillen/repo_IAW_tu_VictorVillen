<?php
//Numero aleatorio del 1 al 3
$var1 = rand(1, 3);
//Mostrar el numero generado
print "<p>El numero generado es: $var1</p>";
//Condicional para que te diga en letra el numero que ha salido
if ($var1 == 1) {
    print "<p>Numero en letra: uno</p>";
}   elseif ($var1 == 2) {
    print "<p>Numero en letra: dos</p>";
}   else{
    print "<p>Numero en letra: tres</p>";
}
?>