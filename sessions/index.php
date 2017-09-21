<?php
  session_start();
  $_SESSION['nombre'] = "Alejandro";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>Página de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la página 2</a>
  </body>
</html>
