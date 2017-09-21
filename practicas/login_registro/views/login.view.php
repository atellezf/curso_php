<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
      initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Iniciar Sesión</h1>
      <hr class="border">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login">
          <div class="form-group">
            <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
          </div>

          <div class="form-group">
            <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
          </div>

          <?php if (!empty($errores)): ?>
            <div class="error">
              <ul>
                <?php echo $errores ?>
              </ul>
            </div>
          <?php endif; ?>
        </form>
        <p class="texto-registrate">
          ¿Aún no tienes cuenta?
          <a href="registro.php">Registrate</a>
        </p>
    </div>
  </body>
</html>
