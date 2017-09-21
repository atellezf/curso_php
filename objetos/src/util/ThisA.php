<?php namespace Objetos\Util;

class ThisA {
    function testThis() {
      if(isset($this)) {
        echo '$this está definida ( ';
        echo get_class( $this );
        echo ")<br>";
      } else {
        echo '$this no está definida.<br>';
      }
    }
}

?>
