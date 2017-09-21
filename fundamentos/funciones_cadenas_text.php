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
                <h3 class="card-title">FUNCIONES DE CADENAS</h3>
                <hr>
                <h6>HTML SPECIAL CHARS</h6>
                <?php
                    $texto = '< > & "" ';
                    echo htmlspecialchars($texto) . "<br>";
                    $texto = "<b>Hola</b>";
                    echo htmlspecialchars($texto);
                    echo "<br>";
                    echo "<br>";
                ?>
                <hr>
                <h6>FUNCIÓN TRIM()</h6>
                <?php
                    $texto = "          Hola             ";
                    echo trim($texto);
                ?>
                <hr>
                <h6>FUNCIÓN STRLEN()</h6>
                <?php
                    $texto = "Hola";
                    echo strlen($texto);
                ?>
                <hr>
                <h6>FUNCIÓN SUBSTR()</h6>
                <?php
                    $texto = "Hola Alejandro";
                    echo substr($texto, 1, 2);
                ?>
                <hr>
                <h6>FUNCIÓN STRTOUPPER()</h6>
                <?php
                    $texto = "Hola Alejandro";
                    echo strtoupper($texto);
                ?>
                <hr>
                <h6>FUNCIÓN STRTOLOWER()</h6>
                <?php
                    $texto = "Hola Alejandro";
                    echo strtolower($texto);
                ?>
                <hr>
                <h6>FUNCIÓN STRPOS()</h6>
                <?php
                    $texto = "Hola Alejandro";
                    echo strpos($texto, 'Ale');
                ?>
            </div>
        </div>
    </body>
</html>