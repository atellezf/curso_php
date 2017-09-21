<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$numeros = array(1,2,3,4,9,8,6,7,5,100);

// sort($meses);
rsort($meses);
sort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meses del Año</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Meses del Año</h1>
        <ul>
            <?php 
                foreach ($meses as $mes) {
                    echo "<li>$mes</li>";
                }
            ?>
        </ul>
        <hr>
        <h1>Números</h1>
        <ul>
            <?php 
                foreach ($numeros as $num) {
                    echo "<li>$num</li>";
                }
            ?>
        </ul>
    </body>
</html>