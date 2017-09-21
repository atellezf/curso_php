<?php session_start();

require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $titulo = limpiarDatos($_POST['titulo']);
  $extracto = limpiarDatos($_POST['extracto']);
  $texto = $_POST['texto'];
  $id = limpiarDatos($_POST['id']);
  $thumb = $_FILES['thumb'];
  if(empty($thumb['name'])) {
    $thumb = $_POST['thumb-guardada'];
  } else {
    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
    $thumb = $_FILES['thumb']['name'];
  }

  $statement = $conexion->prepare("UPDATE articulo SET titulo=?, extracto=?, texto=?, thumb=? WHERE id=?");
  $statement->bindParam(1,$titulo);
  $statement->bindParam(2,$extracto);
  $statement->bindParam(3,$texto);
  $statement->bindParam(4,$thumb);
  $statement->bindParam(5,$id);
  $statement->execute();

  header('Location: ' . RUTA . "/admin");

} else {
  $idArticulo = obtenerIdArticulo($_GET['id']);
  if(empty($idArticulo)) header('Location: ' . RUTA . '/admin');
  $post = obtenerPostPorId($conexion, $idArticulo);
  if(!$post) header('Location: ' . RUTA . '/admin');

}

require '../views/editar.view.php';
?>
