<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$alejandro = array(
    'teléfono' => '555443322',
    'edad' => '38',
    'país' =>'México'
);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h3>Meses del año (Usando arreglo indexado)</h3>
        <ul>
            <?php
                foreach ($meses as $mes) {
                    echo "<li>$mes</li>";
                }
            ?>
        </ul>
        <hr>
        <h3>Datos de contacto(Usando arreglo asociativo)</h3>
        <ul>
            <?php
                foreach ($alejandro as $dato => $valor) {
                    echo "<li> $dato : $valor</li>";
                }
            ?>
        </ul>
    </body>
</html>