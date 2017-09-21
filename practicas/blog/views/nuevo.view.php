<?php require 'header.php'; ?>

<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo">Nuevo Artículo</h2>
      <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="titulo" placeholder="Título del artículo">
        <input type="text" name="extracto" placeholder="Extracto del artículo">
        <textarea name="texto" placeholder="Texto del artículo"></textarea>
        <input type="file" name="thumb">

        <input type="submit" value="Crear Artículo">
      </form>
    </article>
  </div>

</div>
<?php require 'footer.php'; ?>
