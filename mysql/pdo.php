<?php

$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','root');

    // Así susceptible de injectar código desde la URL ej.
    // http://localhost/curso_php/mysql/pdo.php?id=1%20or%20id=4
    $resultset = $conexion->query("SELECT * FROM usuario WHERE id=$id");
    foreach ($resultset as $fila) {
      echo $fila['id'] . ": " . $fila['nombre'] . "<br>";
    }

    // $resultados = $conexion->query("INSERT INTO usuario(nombre, email) VALUES('Blanca','blanca@correo.com')");
    // print_r($resultados);

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>
