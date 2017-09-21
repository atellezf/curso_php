<?php

/* OPERADORES DE COMPARACIÓN

== Igualdad
<   Menor que
>   Mayor que
<=  Menor o igual que
>=  Mayor o igual que
!=  Diferente
!   Negación

*/

/* OPERADORES LOGICOS

&&  Evalúa que se cumpla las dos condiciones
||  Evalúa que se cumpla al menos una condición.
xor Evalúa que se cumpla una y solo una condición

*/

$edad = 18;
$nombre = "Alejandro";

if($edad >= 18 && $nombre == "Alejandro") {
    echo "<h1>Bienvenido $nombre</h1>";
} else {
    echo "<h1>$nombre, eres menor de edad y/o no eres Alejandro</h1>";
}

?>