<?php

# mysql_connect() está desaprobado y un PHP7 ha sido eliminado

$conexion = mysqli_connect( 'localhost', 'root', 'root', 'prueba_consola');
if(mysqli_connect_errno($conexion)) {
  echo 'Fallo al conectar a la base de datos: ' . mysqli_connect_error();
  die();
}

$resultados = mysqli_query($conexion, 'SELECT * FROM usuario');
while($fila = mysqli_fetch_object($resultados)) {
  echo "$fila->nombre <br>";
}

?>
