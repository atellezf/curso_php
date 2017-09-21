<?php
    // Cadena de texto
    $nombre = "Alejandro";
    // Número entero
    $numero = 5;
    // Número decimal
    $numero_decimal = 5.7;
    // Valor lógico ( true / false )
    $verdadero = false;

    // TIPOS DE DATOS
    # String: cadena de texto
    # Integer: Números enteros
    # Double: Números con decimales
    # Boolean: Verdadero o falso
    # Array: Arreglo
    # Object: Objeto
    # Class: Clase
    # Null: Cuando una variable no se le ha asignado ningún valor

    $edad;

    echo $nombre."<br>";
    echo $numero;
    echo "<br>";
    echo "Hola, $nombre <br>";

    echo gettype($nombre);

    echo gettype($numero_decimal);

?>