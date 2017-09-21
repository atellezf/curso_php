<?php
namespace Objetos\Util;
class SubClass extends BaseClass {
  function __construct() {
    parent::__construct();
    echo "En el constructor de SubClass<br>";
  }
}
?>
