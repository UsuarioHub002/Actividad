<?php

$cato1 = 0;
$cato2 = 0;
$hip = 0; 

$cato1 = readline($cato1);
$cato2 = readline($cato2);

$hip = ($cato1 * 2) + ($cato2 * 2) * 2;

echo "la hipotenusa del triangulo cuyos catetos son " . $cato1 . " " . "y " . $cato2 . " " . "es: ". $hip;
?>