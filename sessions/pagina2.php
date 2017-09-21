<?php
  session_start();
  extract($_SESSION);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página 2</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <?php if(isset($nombre)): ?>
      <h1>Hola, <?php echo $nombre; ?></h1>
    <?php else: ?>
      <h1>No has iniciado sesión</h1>
    <?php endif; ?>
    <a href="cerrar.php">Cerrar Sesión</a> <hr>
    <pre><?php print_r($_SESSION); ?></pre>
  </body>
</html>
