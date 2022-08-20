<?php
$nombre="";
$apellido="";
$edad= 0 ;
$telefono="";
$direccion="";
$DUI="";

echo "Ingrese su nombre";
if ($nombre = readline($nombre)) {
    
} 
echo "Ingrese su apellido";
if ($apellido = readline($apellido)) {
    
}

echo "Ingrese su edad";
if ($edad = readline($edad)) {

}

echo "Ingrese su numero de telefono";
if ($telefono = readline($telefono)) {
    
}

echo "Ingrese su direccion";
if ($direccion = readline($direccion)) {
    
}

echo "Ingrese su DUI";
if ($DUI = readline($DUI)) {
    
}
echo "...................................................................................." . '<br>';

echo "Datos";
echo "Nombre: " . $nombre . $apellido;
echo "Edad: " . $edad;
echo "Numero de telefono: " . $telefono;
echo "Direccion: " . $direccion;
echo "DUI: " . $DUI;


?>