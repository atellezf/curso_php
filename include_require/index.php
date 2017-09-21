<?php
    function suma($num1, $num2) {
        return $num1 + $num2;
    }

    include 'vista.php'; // Aunque no exista el archivo sigue evaluando el resto de la página
    echo "<b>Hola</b>";
    require 'vista.php'; // Si no existe el archivo no continúa evaluando el resto de la página
    echo "<b>Hola</b>";

    include_once 'vista.php';
    echo "<hr>";
    include_once 'vista.php';

?>