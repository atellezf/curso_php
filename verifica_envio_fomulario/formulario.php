<?php
$errores = "";

if (isset($_POST['submit'])) {
    extract($_POST);

    if (!empty($nombre)) {
        // $nombre = trim($nombre);
        // $nombre = htmlspecialchars($nombre);
        // $nombre = stripcslashes($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo "Tu nombre es: $nombre <br>";
    } else {
        $errores .= "Por favor agrega un nombre <br>";
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= "Por favor ingresa un correo válido <br>";
        } else echo "Tu email es: $correo <br>";
    } else {
        $errores .= "Por favor agrega un correo <br>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-inline" method="post">
            <input type="text" name="nombre" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="nombre">

            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">@</div>
                <input type="text" name="correo" class="form-control" id="inlineFormInputGroup" placeholder="e-mail">
            </div>

            <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
        </form>
        <?php if(!empty($errores)): ?>
            <br>
            <div class="alert alert-danger" role="alert">
                <?php echo $errores ?>
            </div>
        <?php endif; ?>
    </body>
</html>