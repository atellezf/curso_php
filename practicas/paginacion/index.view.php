<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paginación</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="contenedor">
      <h1>Artículos</h1>
      <section class="articulos">
        <ul>
          <?php foreach ($articulos as $articulo): ?>
            <li><?php echo $articulo['id'] . '.-' . $articulo['nombre']?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="paginacion">
        <ul>
          <!-- Establecemos cuando el botón de "anterior" estará deshabilitado -->
          <?php if ($pagina==1): ?>
            <li class="disabled">&laquo;</li>
          <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina-1 ?>">&laquo;</a></li>
          <?php endif; ?>

          <!-- Ejecutamos un ciclo para mostrar las páginas -->
          <?php
            for ($i=1; $i <= $numeroPaginas ; $i++) {
              if($pagina == $i) {
                echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
              } else {
                echo "<li><a href='?pagina=$i'>$i</a></li>";
              }
            }
          ?>

          <!-- Establecemos cuándo el botón de "Siguiente" estará deshabilitado -->
          <?php if ($pagina==$numeroPaginas): ?>
            <li class="disabled">&raquo;</li>
          <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina+1 ?>">&raquo;</a></li>
          <?php endif; ?>
        </ul>
      </section>
    </div>
  </body>
</html>
