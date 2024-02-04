<?php 

$nombre = 'Ivan';
$pais = "México";
$edad = 18;
$precio = 170;

if($edad > 17){
    print 'Mayor de edad';
}else
{
    echo 'Menor de edad';
}

function saludar(string $name, string $country){
    return "Saludos a todos por $name desde $country";
}

function agregarEtiqueta($cadena_texto, $etiqueta){
    return "<$etiqueta>$cadena_texto</$etiqueta>";
}

function saludar_con_etiqueta(){
    agregarEtiqueta(  saludar('Ivan', 'Mexico'), 'p'  );
}

print saludar($nombre, $pais);

saludar_con_etiqueta();

var_dump($_GET);
var_dump($_POST);