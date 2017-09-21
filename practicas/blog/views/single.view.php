<?php require 'header.php'; ?>

<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
      <p class="fecha"><?php echo formateaFecha($post['fecha']); ?></p>
      <div class="thumb">
        <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
      </div>
      <p class="extracto">
        <?php echo nl2br($post['texto']); ?>
      </p>
      <a href="#" onclick="window.history.back();" class="continuar"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
    </article>
  </div>

</div>
<?php require 'footer.php'; ?>
