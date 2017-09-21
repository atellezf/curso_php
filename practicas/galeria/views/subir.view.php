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
        <h1 class="titulo">Subir Foto</h1>
      </div>
    </header>

    <div class="contenedor">
      <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="foto" name="foto">

        <label for="titulo">Título de la foto</label>
        <input type="text" id="titulo" name="titulo">

        <label for="texto">Descripción</label>
        <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

        <?php if (isset($error)): ?>
          <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <input type="submit" class="submit" value="Subir Foto">

      </form>
    </div>

    <footer>
      <p class="copyright">Galería creada por Alejandro Téllez - VainiyaSoft</p>
    </footer>
  </body>
</html>
