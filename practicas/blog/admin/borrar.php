<?php session_start();

require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

$id = limpiarDatos($_GET['id']);
if(!$id) header('Location: ' . RUTA . '/admin');

$statement = $conexion->prepare('DELETE FROM articulo WHERE id = ?');
$statement->bindParam(1, $id);
$statement->execute();

header('Location: ' . RUTA . '/admin');

?>
