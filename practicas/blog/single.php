<?php
require 'admin/config.php';
require 'funciones.php';

$conexion = obtenerConexion($dbconfig);
$idarticulo = obtenerIdArticulo($_GET['id']);
if(!$conexion) header('Location: error.php');

if(empty($idarticulo)) header('Location: index.php');

$post = obtenerPostPorId($conexion, $idarticulo);
if(!$post) header('Location: index.php');

require 'views/single.view.php';
?>
