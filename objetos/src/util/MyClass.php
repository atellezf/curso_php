<?php namespace Objetos\Util;
class MyClass {
  public $publica = 'Propiedad Pública';
  protected $protegida = 'Propiedad Protegida';
  private $privada = 'Propiedad Privada';
  function printHello() {
    echo "Desde el método printHello() <br>";
    echo $this->publica . '<br>';
    echo $this->protegida . '<br>';
    echo $this->privada . '<br>';
  }
}
?>
