<?php
define('RUTA','/curso_php/practicas/blog');
$dbconfig = array(
  'dsn' => 'mysql:host=localhost;dbname=curso_blog',
  'username' => 'root',
  'password' => 'root'
);
$blog_config = array(
  'post_por_pagina' => 2,
  'carpeta_imagenes' => 'imagenes/'
);
$blog_admin = array(
  'usuario' => 'alejandro',
  'password' => '12345'
);

?>
