<?php
$alejandro = array(
    'telefono' => '555443322', 
    'edad' => '38',
    'apellido' => 'Téllez',
    'pais' =>'México'
);
function imprimeArreglo($arreglo) {
    echo $arreglo['telefono']."<br>";
    echo $arreglo['edad']."<br>";
    echo $arreglo['apellido']."<br>";
    echo $arreglo['pais']."<br>";
    echo "<hr>";
}

imprimeArreglo($alejandro);
$alejandro['telefono'] = '554499880';
imprimeArreglo($alejandro);
?>
