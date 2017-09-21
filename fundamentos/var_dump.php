<?php

$texto = "Alejandro";
$numero = 10;
$numero2 = '5';
$numero3 = 3.1416;
$arreglo = array("Lucy", "Denver", "Camy");
$arreglo_asociativo = array('nombre'=>'Alejandro', edad=>38);
$booleano = false;

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
        <div class="card" style="width: 25rem;">
            <div class="card-block">
                <h3 class="card-title">Function var_dump()</h3>
                <hr>
                <pre><?php
                    var_dump($texto); echo "<br>";
                    var_dump($numero); echo "<br>";
                    var_dump($numero2); echo "<br>";
                    var_dump($arreglo); echo "<br>";
                    var_dump($arreglo_asociativo); echo "<br>";
                    var_dump($booleano); echo "<br>";
                ?></pre>
            </div>
        </div>
    </body>
</html>