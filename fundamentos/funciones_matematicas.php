<?php
$numero = 15.185;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FUNCIONES MATEMATICAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" style="width: 25rem;">
            <h6 class="card-header">
                FUNCIONES MATEMATICAS
            </h6>
            <div class="card-block">

                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCION ROUND()
                </h6>
                <?php
                    echo round($numero,1);
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCION RAND()
                </h6>
                <?php
                    echo rand(1,10);
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCION CEIL()
                </h6>
                <?php
                    echo ceil($numero);
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    CONSTANTE PI
                </h6>
                <?php
                    echo M_PI;
                ?>
                
            </div>
        </div>
    </body>
</html>