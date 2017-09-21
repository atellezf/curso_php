<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <?php if (!empty($foto['titulo'])): ?>
          <h1 class="titulo"><?php echo $foto['titulo']; ?></h1>
        <?php else: ?>
          <h1 class="titulo"><?php echo $foto['imagen']; ?></h1>
        <?php endif; ?>
      </div>
    </header>

    <div class="contenedor">
      <div class="foto">
        <img src="fotos/<?php echo $foto['imagen'];?>" alt="">
        <p class="texto"><?php echo$foto['texto'];?></p>
        <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
      </div>
    </div>

    <footer>
      <p class="copyright">Galería creada por Alejandro Téllez - VainiyaSoft</p>
    </footer>
  </body>
</html>
