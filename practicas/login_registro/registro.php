<?php
  session_start();
  if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST); // Datos de usuario, password y password2
    $usuario = filter_var(strtolower($usuario), FILTER_SANITIZE_STRING);
    $password = hash('sha512',$password);
    $password2 = hash('sha512',$password2);

    $errores = "";
    if(empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
    } else {
      try {
        $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','root');
      } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
        die();
      }
      $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre=:nombre LIMIT 1');
      $statement->execute([':nombre' => $usuario]);
      $resultado = $statement->fetch(); // Si no hay resultset variable resultado será false
      if ($resultado != false) {
        $errores .= '<li>El nombre de usuario ya existe</li>';
      }

      if ($password != $password2) {
        $errores .= '<li>Las contraseñas no son iguales</li>';
      }

    }
    if($errores == '') {
      $statement = $conexion->prepare('INSERT INTO usuario (nombre, password) VALUES(?,?)');
      $statement->bindParam(1, $usuario);
      $statement->bindParam(2, $password);
      $statement->execute();
      header('Location: login.php');
    }
  }
  require('views/registro.view.php');
?>
