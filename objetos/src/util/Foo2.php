<?php namespace Objetos\Util;

class Foo2 {

  public $bar;

  public function __construct() {
    $this->bar = function() {
      return 42;
    };
  }
}

?>
