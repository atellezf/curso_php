<?php
if(!$_POST) header('Location: index.php');
extract($_POST);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FORMULARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" style="width: 25rem;">
                <h6 class="card-header">
                    BIENVENIDO
                </h6>
                <div class="card-block">
                    <?php echo "Hola $nombre, eres $genero"; ?>
                </div>
        </div>
    </body>
</html>
