<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="card-text">
        <h5 class="card-subtitle mb-2" id="1">Acceso a atributos</h5>
        <pre><code data-language="php">
        $obj->mostrarVar()
        </code></pre>
        <div class="code">
        <?= $obj->mostrarVar() ?>
        </div>
        <hr>
    </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="2">Ejemplos de la variable $this</h5>
    <pre><code data-language="php">
      $a->testThis();
      ### DEPRECATED
      // ThisA::testThis();
      // $b->test();
      // ThisB::test();
      $a->testThis();
    </code></pre>
    <div class="code">
      <?= $a->testThis() ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="3">Creación de una Instancia</h5>
    <pre><code data-language="php">
      $instancia = new ClaseSencilla();
      // Esto también se puede hacer con una variable
      $nombreClase = 'Objetos\Util\ClaseSencilla';
      $instancia = new $nombreClase();
      print_r($instancia);
    </code></pre>
    <div class="code">
      <?= print_r($instancia) ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="4">Asignación de Objetos</h5>
    <pre><code data-language="php">
      $asignada = $instancia;
      $referencia =& $instancia;

      $instancia->var = '$asignada tendrá este valor';
      $instancia = null; // $instancia y $referencia son null

      var_dump($instancia);
      var_dump($referencia);
      var_dump($asignada);
    </code></pre>
    <div class="code">
      <?php
        ### ASIGNACION DE OBJETOS
        $asignada = $instancia;
        $referencia =& $instancia;

        $instancia->var = '$asignada tendrá este valor';
        $instancia = null; // $instancia y $referencia son null
        ?>
        <?= var_dump($instancia) ?><br>
        <?= var_dump($referencia) ?><br>
        <?= var_dump($asignada) ?><br>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="5">Creación de Objetos Nuevos</h5>
    <pre><code data-language="php">
      use Objetos\Util\{Prueba, Hija};

      $obj1 = new Prueba();
      $obj2 = new $obj();
      var_dump($obj1 !== $obj2);

      $obj3 = Prueba::getNew();
      var_dump($obj3);

      $obj4 = Hija::getNew();
      var_dump($obj4);
    </code></pre>
    <div class="code">
        <?php
        use Objetos\Util\Prueba;
        use Objetos\Util\Hija;

        $obj1 = new Prueba();
        $obj2 = new $obj();
        var_dump($obj1 !== $obj2);
        echo "<br>";

        $obj3 = Prueba::getNew();
        var_dump($obj3);
        echo "<br>";

        $obj4 = Hija::getNew();
        var_dump($obj4);
        echo "<br>";
        ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="6">Acceder a un miembro de objeto recién creado</h5>
    <pre><code data-language="php">
      echo (new DateTime())->format('Y');
    </code></pre>
    <div class="code">
        <?php echo (new DateTime())->format('Y'); ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="7">Creación de Objetos Nuevos</h5>
    <pre><code data-language="php">
      use Objetos\Util\Foo;
      $obj = new Foo();
      echo $obj->var, "&lt;br&gt;", $obj->var(), "&lt;br&gt;";
    </code></pre>
    <div class="code">
        <?php
        use Objetos\Util\Foo;

        $obj = new Foo();
        echo $obj->var, "<br>", $obj->var(), "<br>";
        ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="8">Llamar a una función anónima almacenada en una propiedad</h5>
    <pre><code data-language="php">
      use Objetos\Util\Foo2;

      // A partir de PHP 5.3.0
      $obj = new Foo2();
      $func = $obj->bar;
      echo $func(), "&lt;br&gt;";

      // Alternativamente, a partir de PHP 7.0.0
      echo ($obj->bar)(), "&lt;br&gt;";
    </code></pre>
    <div class="code">
        <?php
        use Objetos\Util\Foo2;

        // A partir de PHP 5.3.0
        $obj = new Foo2();
        $func = $obj->bar;
        echo $func(), "<br>";

        // Alternativamente, a partir de PHP 7.0.0
        echo($obj->bar)(), "<br>";
        ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="9">Herencia de clases sencilla</h5>
    <pre><code data-language="php">
      use Objetos\Util\ClaseExtendida;

      $extendida = new ClaseExtendida();
      $extendida->mostrarVar();
    </code></pre>
    <div class="code">
        <?php
        use Objetos\Util\ClaseExtendida;

        $extendida = new ClaseExtendida();
        $extendida->mostrarVar();
        ?>
    </div>
    <hr>
  </div>

  <div class="card-text">
    <h5 class="card-subtitle mb-2" id="10">Resolución de nombres de clases</h5>
    <pre><code data-language="php">
      use Objetos\Util\ClaseExtendida;
      echo ClaseExtendida::class, "&lt;br&gt;";
    </code></pre>
    <div class="code">
        <?php
        echo ClaseExtendida::class, "<br>";
        ?>
    </div>
    <hr>
  </div>
</div>
