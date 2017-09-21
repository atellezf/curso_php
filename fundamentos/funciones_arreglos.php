<?php
$amigo = array('telefono'=>5544332, 'edad'=>20, 'pais'=>'México');
$semana = array('Lunes', 'Martes', 'Miércoles','Jueves', 'Viernes', 'Sábado', 'Domingo');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FUNCIONES PARA ARREGLOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" style="width: 25rem;margin: auto;">
            <h6 class="card-header">
                FUNCIONES PARA ARREGLOS
            </h6>
            <div class="card-block">

                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCION EXTRACT()
                </h6>
                <?php
                    extract($amigo);
                    echo "$telefono <br>";
                    echo "$edad <br>";
                    echo "$pais <br>";
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN ARRAY_POP()
                </h6>
                <?php
                    echo array_pop($semana);
                ?>
                <br><br>
                <ul><?php
                foreach ($semana as $dia) {
                    echo "<li>$dia</li>";
                }
                ?></ul>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN JOIN()
                </h6>
                <?php
                    echo join(', ', $semana);
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN COUNT()
                </h6>
                <?php
                    echo count($semana);
                ?>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN ARRAY_REVERSE()
                </h6>
                <?php
                    $semana_rev = array_reverse($semana);
                ?>
                <ul><?php
                foreach ($semana_rev as $dia) {
                    echo "<li>$dia</li>";
                }
                ?></ul>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN SORT()
                </h6>
                <?php
                    sort($semana);
                ?>
                <ul><?php
                foreach ($semana as $dia) {
                    echo "<li>$dia</li>";
                }
                ?></ul>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">
                    FUNCIÓN RSORT()
                </h6>
                <?php
                    rsort($semana);
                ?>
                <ul><?php
                foreach ($semana as $dia) {
                    echo "<li>$dia</li>";
                }
                ?></ul>


            </div>
        </div>
    </body>
</html>
