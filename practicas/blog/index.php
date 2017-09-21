<?php
require 'admin/config.php';
require 'funciones.php';

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

$posts = obtenerPosts($blog_config['post_por_pagina'], $conexion);

require 'views/index.view.php';
?>
