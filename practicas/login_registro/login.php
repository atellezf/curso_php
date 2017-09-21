<?php
session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  $password = hash('sha512', $_POST['password']);
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','root');
  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
  }

  $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre=? AND password=?');
  $statement->bindParam(1, $usuario);
  $statement->bindParam(2, $password);
  $statement->execute();
  $resultado = $statement->fetch();
  if($resultado !== false) {
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
  } else {
    $errores .= '<li>Datos incorrectos</li>';
  }



}
require('views/login.view.php');
?>
