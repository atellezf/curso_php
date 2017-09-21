<?php
require __DIR__ . '/../vendor/autoload.php';

use Objetos\Util\ClaseSencilla;
use Objetos\Util\ThisA;
use Objetos\Util\ThisB;

$obj = new ClaseSencilla();
$a = new ThisA();
$b = new ThisB();

$instancia = new ClaseSencilla();
// Esto también se puede hacer con una variable
$nombreClase = 'Objetos\Util\ClaseSencilla';
$instancia = new $nombreClase();

require __DIR__ . '/../src/views/index.view.php';
?>
