<?php
function calcular_area_triangulo($base, $altura) {
    return ($base * $altura)/2;
}
$area = calcular_area_triangulo(10, 10);
echo "El triángulo tiene un área de $area m<sup>2</sup>"
?>