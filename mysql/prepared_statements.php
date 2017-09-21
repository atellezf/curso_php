<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;

    try {
        echo "<pre>";
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', 'root');
        $statement = $conexion->prepare("SELECT * FROM usuario WHERE id = :id");
        $statement->execute( [':id'=>$id] );
        $resultset = $statement->fetch();
        print_r($resultset);

        echo "<hr>BIND PARAM <br>";

        $sentencia = $conexion->prepare("SELECT * FROM usuario WHERE id = ?");
        $sentencia->bindParam(1, $id);

        $id=1;
        $sentencia->execute();
        $resultset = $sentencia->fetch();
        print_r($resultset);

        $id=2;
        $sentencia->execute();
        $resultset = $sentencia->fetch();
        print_r($resultset);

        echo "</pre>";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
