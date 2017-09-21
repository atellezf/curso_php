<?php
require('funciones.php');
$conexion = obtenerConexion('galeria_practica', 'root', 'root');
if (!$conexion) {
  die();
  // header('Location: index.php'); // Es prudente mandar a una pagina de error
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
  $check = @getimagesize($_FILES['foto']['tmp_name']);
  if($check !== false) {
    $carpeta_destino = 'fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    $statement = $conexion->prepare('INSERT INTO fotos(titulo, imagen, texto) VALUES(?,?,?)');
    $statement->bindParam(1, $_POST['titulo']);
    $statement->bindParam(2, $_FILES['foto']['name']);
    $statement->bindParam(3, $_POST['texto']);
    $statement->execute();

    header('Location: index.php');
  } else {
    $error = "El archivo no es una imagen o el archivo es muy pesado";
  }
}

require 'views/subir.view.php';

 ?>
