<?php

function contarVisitas() {
  $archivo = 'contador.txt';
  if (file_exists($archivo)) {
    $cuenta = file_get_contents($archivo) + 1;
    file_put_contents($archivo, $cuenta); // Se sobreescribe el cotenido nuevo
    return $cuenta;
  } else {
    file_put_contents($archivo, 1);
    return 1;
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contador de visitas</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
      <p class="numero"><?php echo contarVisitas();?></p>
      <p class="texto">Visitas</p>
    </div>
  </body>
</html>
