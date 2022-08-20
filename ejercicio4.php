<?php

$horastrabajadas= 45;
$sueldo= 4;
$extra= 5;

if ($horastrabajadas<=40) {
    $Sueldototal=$horastrabajadas * $sueldo;
    echo "no hay cambios en el sueldo";
} else ($horastrabajadas >= 40) {
    $Sueldototal=$horastrabajadas - $extra * 6;
    echo "el sueldo mas horas extra es" . $Sueldototal;
}
?>