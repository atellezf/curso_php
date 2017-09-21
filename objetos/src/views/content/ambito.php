<div class="tab-pane fade" id="ambito" role="tabpanel" aria-labelledby="ambito-tab">

  <div class="card-text">
    <p class="text-muted text-justify"><small>
        La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una
        constante se puede definir anteponiendo a su declaración una de las palabras
        reservadas <i>public, protected, o private</i>. A los muembro de clase
        declarados como <b>public</b> se puede acceder desde donde sea; a los
        miembros declarados como <b>protected</b>, sólo desde la clase misma o mediante
        clases heredadas. A los miembros declarados como <b>private</b> únicamente
        se puede acceder desde la clase que los definió.
    </small></p>
      <h5 class="card-title mb-2">Visibilidad de propiedades</h5>
      <p class="card-text">
        <small class="text-muted">
          Las propiedades de clases debe ser definidas como 'public, 'private' o 'protected'.
        </small>
      </p>
      <pre><code data-language="php">
        class MyClass {
          public $publica = 'Propiedad Pública';
          protected $protegida = 'Propiedad Protegida';
          private $privada = 'Propiedad Privada';
          function printHello() {
            echo $this->publica . '<br>';
            echo $this->protegida . '<br>';
            echo $this->privada . '<br>';
          }
        }

        $obj = new MyClass();
        echo $obj->publica; // Funciona bien
        # echo $obj->protegida; // Error fatal
        # echo $objt->privada; // Error fatal
        $obj->printHello();

      </code></pre>
      <div class="code">
      <?php
        use Objetos\Util\MyClass;
        $obj = new MyClass();
        echo $obj->publica . '<br>'; // Funciona bien
        # echo $obj->protegida; // Error fatal
        # echo $objt->privada; // Error fatal
        $obj->printHello();
      ?>
      </div>
      <hr>
  </div>

</div>
