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
        <h1 class="titulo">Mi increíble galería en PHP y MySQL</h1>
      </div>
    </header>
    <section class="fotos">

      <div class="contenedor">
        <?php foreach ($fotos as $foto): ?>
          <div class="thumb">
            <a href="foto.php?id=<?php echo $foto['id']; ?>">
              <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
            </a>
          </div>
        <?php endforeach; ?>

        <div class="paginacion">
          <?php if ($pagina_actual > 1): ?>
            <a href="index.php?p=<?php echo $pagina_actual-1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
          <?php endif; ?>
          <a href="subir.php" style="display: inline-block;">Subir Foto</a>
          <?php if ($total_paginas != $pagina_actual): ?>
            <a href="index.php?p=<?php echo $pagina_actual+1 ?>" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
          <?php endif; ?>
        </div>

      </div>
    </section>
    <footer>
      <p class="copyright">Galería creada por Alejandro Téllez - VainiyaSoft</p>
    </footer>
  </body>
</html>
