<?php namespace Objetos\Util;

class Foo {
  public $var = 'propiedad';
  
  /**
  * PHP 7 añade soporte para declaraciones de tipo de devolución
  */
  public function var(): string {
    return 'método';
  }
}

?>
