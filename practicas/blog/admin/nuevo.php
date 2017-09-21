<?php session_start();
// ARCHIVO INDEX ADMIN
require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $titulo = limpiarDatos($_POST['titulo']);
  $extracto = limpiarDatos($_POST['extracto']);
  $texto = $_POST['texto'];
  $thumb = $_FILES['thumb']['tmp_name'];
  $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
  move_uploaded_file($thumb, $archivo_subido);

  $statement = $conexion->prepare('INSERT INTO articulo(titulo, extracto, texto, thumb) VALUES(?,?,?,?)');
  $statement->bindParam(1, $titulo);
  $statement->bindParam(2, $extracto);
  $statement->bindParam(3, $texto);
  $statement->bindParam(4, $_FILES['thumb']['name']);
  $statement->execute();

  header('Location: ' . RUTA . '/admin');
}

require '../views/nuevo.view.php';
?>
