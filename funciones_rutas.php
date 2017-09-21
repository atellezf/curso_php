<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Funciones de rutas</title>
  </head>
  <body>
    <div class="card" style="width: 25rem;margin: auto;">
      <h6 class="card-header">
          FUNCIONES DE RUTAS
      </h6>
      <div class="card-block">
        <h6>PATHINFO_BASENAME</h6>
        <?php  echo pathinfo('archivos/documento.txt', PATHINFO_BASENAME);?>
        <hr>

        <h6>PATHINFO_DIRNAME</h6>
        <?php  echo pathinfo('archivos/documento.txt', PATHINFO_DIRNAME);?>
        <hr>

        <h6>PATHINFO_EXTENSION</h6>
        <?php  echo pathinfo('archivos/documento.txt', PATHINFO_EXTENSION);?>
        <hr>

        <h6>PATHINFO_FILENAME</h6>
        <?php  echo pathinfo('archivos/documento.txt', PATHINFO_FILENAME);?>
        <hr>

        <h6>GLOB()</h6>
        <!-- Obtiene todos los archivos con extensión php, html o txt -->
        <?php $archivos = glob('fundamentos/a*.{php,html,txt}', GLOB_BRACE);?>
        <ul>
          <?php foreach ($archivos as $archivo): ?>
            <li><?php echo $archivo; ?></li>
          <?php endforeach; ?>
        </ul>
        <hr>

        <h6>BASENAME()</h6>
        <?php  echo basename('archivos/documento.txt');?>
        <hr>

        <h6>BASENAME() Sin Extensión</h6>
        <?php  echo basename('archivos/documento.txt','.txt');?>
        <hr>

        <h6>DIRNAME()</h6>
        <?php  echo dirname('fundamentos/css/style.txt');?>s

      </div>
    </div>
  </body>
</html>
