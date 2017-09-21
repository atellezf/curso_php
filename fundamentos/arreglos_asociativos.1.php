<?php
define('TELEFONO', 'tel');
define('EDAD', 'edad');
define("APELLIDO", 'apaterno');
define("PAIS", "pais");

$alejandro = array(
    TELEFONO => '555443322',
    EDAD => '38',
    APELLIDO => 'Téllez',
    PAIS =>'México'
);
function imprimeArreglo($arreglo) {
    echo $arreglo[TELEFONO]."<br>";
    echo $arreglo[EDAD]."<br>";
    echo $arreglo[APELLIDO]."<br>";
    echo $arreglo[PAIS]."<br>";
    echo "<hr>";
}

imprimeArreglo($alejandro);
$alejandro[TELEFONO] = '554499880';
imprimeArreglo($alejandro);
echo "<br> El teléfono de Alex es " . $alejandro[TELEFONO];
