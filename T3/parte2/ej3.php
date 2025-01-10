<?php
$dia_ingles = date('D');
$dia_espanol = '';

if ($dia_ingles === 'Mon') {
    $dia_espanol = 'Lunes';
} elseif ($dia_ingles === 'Tue') {
    $dia_espanol = 'Martes';
} elseif ($dia_ingles === 'Wed') {
    $dia_espanol = 'Miércoles';
} elseif ($dia_ingles === 'Thu') {
    $dia_espanol = 'Jueves';
} elseif ($dia_ingles === 'Fri') {
    $dia_espanol = 'Viernes';
} elseif ($dia_ingles === 'Sat') {
    $dia_espanol = 'Sábado';
} elseif ($dia_ingles === 'Sun') {
    $dia_espanol = 'Domingo';
}

echo "El día de la semana es: $dia_espanol";
?>