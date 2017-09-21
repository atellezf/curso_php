<?php session_start();
// ARCHIVO INDEX ADMIN
require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = obtenerConexion($dbconfig);
if(!$conexion) header('Location: error.php');

$posts = obtenerPosts($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.vew.php';
?>
