<?php
    $numero = 10;
    // LAS FUNCIONES NO PUEDEN ACCEDER A VARIABLES FUERA DE LA FUNCION MISMA
    // function mostrarNumero() {
    //     echo $numero;
    // }
    // mostrarNumero();

    function mostrarNumero($numero) {
        echo $numero;
    }
    mostrarNumero($numero);
?>