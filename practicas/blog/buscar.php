<?php
require 'admin/config.php';
require 'funciones.php';

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

if($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['busqueda'])) {
  $texto = limpiarDatos($_GET['busqueda']);

  $statement = $conexion->prepare('SELECT * FROM articulo WHERE titulo LIKE :valor or texto LIKE :valor');
  $statement->bindValue(":valor", "%$texto%");
  $statement->execute();
  $resultset = $statement->fetchAll();

  if(empty($resultset)) {
    $titulo = "No se encontraron artículos con el texto: \"$texto\"";
  } else {
    $titulo = "Resultados de la búsqueda \"$texto\"";
  }

} else {
  header('Location: index.php');
}

require 'views/buscar.view.php';
?>
