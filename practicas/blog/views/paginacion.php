<?php $numpag = obtenerNumeroPaginas($blog_config['post_por_pagina'], $conexion); ?>
<section class="paginacion">
  <ul>
    
    <?php if (obtenerPaginaActual() === 1): ?>
      <li class="disabled">&laquo;</li>
    <?php else: ?>
      <li>
        <a href="index.php?p=<?php echo obtenerPaginaActual()-1; ?>">&laquo;</a>
      </li>
    <?php endif; ?>
    <?php for($i = 1; $i <= $numpag; $i++): ?>
      <?php if (obtenerPaginaActual() === $i): ?>
        <li class="active">
            <?php echo $i; ?>
        </li>
      <?php else: ?>
        <li>
          <a href="index.php?p=<?php echo $i; ?>">
            <?php echo $i; ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if (obtenerPaginaActual() == $numpag): ?>
      <li class="disabled">&raquo;</li>
    <?php else: ?>
      <li>
        <a href="index.php?p=<?php echo obtenerPaginaActual()+1; ?>">&raquo;</a>
      </li>
    <?php endif; ?>

  </ul>
</section>
