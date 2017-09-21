<?php
$semana = array('Lunes','Martes', 'Miércoles','Jueves', 'Viernes', 'Sábado', 'Domingo');
$semana[10] = "Chimichanga";

$semana2 = ['Lunes','Martes', 'Miércoles','Jueves', 'Viernes', 'Sábado', 'Domingo'];

$arreglo = ["Cadenas de texto", 1234, true, array(123, 456)];

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
        <?php echo $semana[0], ' ', count($semana); ?> <br>
        <?php echo $semana2[1], ' ', count($semana2); ?> <br>
        <?php echo $arreglo[3], ' ', count($arreglo); ?> 
        <hr>
        <?php
        echo $semana[0] . '<br/>';
        echo $semana[1] . '<br/>';
        echo $semana[2] . '<br/>';
        echo $semana[3] . '<br/>';
        echo $semana[4] . '<br/>';
        echo $semana[5] . '<br/>';
        echo $semana[6] . '<br/>';
        ?>
    </body>
</html>