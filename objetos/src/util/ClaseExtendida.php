<?php namespace Objetos\Util;
use Objetos\Util\ClaseSencilla;

class ClaseExtendida extends ClaseSencilla {

  // Redefinición del método padre
  public function mostrarVar() {
    echo "Clase extendida<br>";
    echo parent::mostrarVar();
  }

}

?>
