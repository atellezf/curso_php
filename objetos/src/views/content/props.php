<div class="tab-pane fade" id="props" role="tabpanel" aria-labelledby="props-tab">

    <div class="card-text">
        <h5 class="card-subtitle mb-2" id="1">Declaración de propiedades</h5>
        <pre><code data-language="php">
        namespace Objetos\Util;

        class ClaseSencilla {
            // Declaración de una propiedad
            public $var = "Una variable de tipo cadena";

            // Declaración de un método
            public function mostrarVar() {
                return $this->var;
            }
        }
        </code></pre>
        <div class="code">
        <?php
        use Objetos\Util\ClaseSencilla;
        $obj = new ClaseSencilla();
        echo $obj->mostrarVar();
        ?>
        </div>
        <hr>
    </div>

    <div class="card-text">
        <h5 class="card-subtitle mb-2" id="1">Constantes de clases</h5>
        <pre><code data-language="php">
          namespace Objetos\Util;
          class MiClase {
              const CONSTANTE = 'valor constante';
              function mostrarConstante() {
                  echo self::CONSTANTE . "&lt;br&gt;";
              }
          }

          echo MiClase::CONSTANTE . "&lt;br&gt;";

          $obj = new MiClase();
          $obj->mostrarConstante();
        </code></pre>
        <div class="code">
          <?php
          use Objetos\Util\MiClase;
          echo MiClase::CONSTANTE . "<br>";
          $obj = new MiClase();
          $obj->mostrarConstante();
          ?>
        </div>
        <hr>
    </div>

    <div class="card-text">
        <h5 class="card-subtitle mb-2" id="1">Constructores y Destructores</h5>
        <pre><code data-language="php">
          namespace Objetos\Util;
          class BaseClass {
            function __construct() {
              echo "En el constructor de BaseClass<br>";
            }
          }

          class SubClass extends BaseClass {
            function __construct() {
              parent::__construct();
              echo "En el constructor de SubClass<br>";
            }
          }

          class OtherSubClass extends BaseClass {
            // heradando el constructor BaseClass
          }

          class MyDestructableClass {
            function __construct() {
              $this->name = self::class;
              print "En el constructor de $this->name <br>";
            }
            function __destruct() {
              print "Destruyendo $this->name <br>";
            }
          }
        </code></pre>
        <div class="code">
          <?php
          use Objetos\Util\{BaseClass, SubClass, OtherSubClass, MyDestructableClass};
          $obj1 = new BaseClass();
          $obj2 = new SubClass();
          $obj3 = new OtherSubClass();
          $obj4 = new MyDestructableClass();
          $obj4 = null;
          ?>
        </div>
        <hr>
    </div>


</div>
