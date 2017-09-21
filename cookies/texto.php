<?php
if (isset($_COOKIE['font-size'])) {
  $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
  $tamaño = '15px';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Texto</title>
    <link rel="stylesheet" href="../css/style.css">
    <style media="screen">
      p {
        font-size: <?php echo $tamaño; ?>
      }
    </style>
  </head>
  <body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="index.php">Regresar</a>
  </body>
</html>
