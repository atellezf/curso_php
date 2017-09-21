<?php namespace Objetos\Util;
  class MyDestructableClass {
    function __construct() {
      $this->name = self::class;
      print "En el constructor de $this->name <br>";
    }
    function __destruct() {
      print "Destruyendo $this->name <br>";
    }
  }
?>
