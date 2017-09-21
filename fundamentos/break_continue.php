<?php

$paises = array(
    'México','España','Colombia','Perú','Argentina','Venezuela', 'Guatemala'
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
        <h3>Países Latinoamericanos</h3>
        <?php
            foreach ($paises as $pais) {
                if ($pais == "España") continue;
                // if ($pais == "España") break;
                echo "$pais <br>";
            }
        ?>
    </body>
</html>