<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="font-family: Verdana; font-size:11px;">
        <h3>Recorriendo arreglos con ciclo for</h3>
        <ol>
        <?php
            for ($i=0; $i < count($meses); $i++) { 
                echo "<li>$meses[$i]</li>"; 
            }
        ?>
        </ol>
        <hr>
        <h3>Recorriendo arreglos con ciclo while</h3>
        <ul>
        <?php
            $x = 0;
            while($x < count($meses)) {
                echo "<li>$meses[$x]</li>"; 
                $x++;
            }
        ?>
        </ul>
    </body>
</html>