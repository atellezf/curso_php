<?php

function obtenerConexion($dbconfig) {
  try {
    $conexion = new PDO($dbconfig['dsn'], $dbconfig['username'], $dbconfig['password']);
    return $conexion;
  } catch (PDOException $e) {
    return false;
  }
}

function limpiarDatos($datos) {
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = htmlspecialchars($datos);
  return $datos;
}

function obtenerPosts($post_por_pagina, $conexion) {
  $pagina_actual = obtenerPaginaActual();
  $inicio = $pagina_actual > 1 ? ($pagina_actual * $post_por_pagina) - $post_por_pagina : 0;
  $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulo LIMIT $inicio, $post_por_pagina");
  $sentencia->execute();
  return $sentencia->fetchAll();
}

function obtenerPaginaActual() {
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function formateaFecha($fecha) {
  $fecha = new DateTime($fecha);
  $fechaCorta = $fecha->format("j/m/Y");
  $tiempo = $fecha->format("H:i:s");
  $clockIcon = '<i class="fa fa-clock-o"></i>';
  $calendarIcon = '<i class="fa fa-calendar"></i>';
  return "$calendarIcon $fechaCorta &nbsp;&nbsp;&nbsp; $clockIcon $tiempo";
}

function obtenerIdArticulo($id) {
  return (int)limpiarDatos($id);
}

function obtenerPostPorId($conexion, $id) {
  $resultado = $conexion->query("SELECT * FROM articulo WHERE id = $id LIMIT 1");
  $resultado = $resultado->fetchAll();
  return ($resultado) ? $resultado[0] : false;
}

function obtenerNumeroPaginas($postsPorPagina, $conexion) {
  $totalPosts = $conexion->prepare("SELECT FOUND_ROWS() AS total");
  $totalPosts->execute();
  $totalPosts = $totalPosts->fetch()['total'];
  $numPags = $totalPosts / $postsPorPagina;
  return ceil($numPags);
}

function comprobarSesion() {
  if (!isset($_SESSION['admin'])) header('Location: ' . RUTA);
}

?>
