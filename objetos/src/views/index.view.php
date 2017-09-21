<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pruebas con Objetos</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/github_theme.css">
  </head>
  <body>
    <div class="card w-75" style="margin: auto; margin-top: 15px;">
      <h4 class="card-header"><i class="fa fa-code"></i> Programación Orientada a Objetos con PHP</h4>
      <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Intro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="props-tab" data-toggle="tab" role="tab" aria-controls="props" href="#props">Propiedades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="ambito-tab" data-toggle="tab" role="tab" aria-controls="ambito" href="#ambito">Visibilidad</a>
            </li>
          </ul>
      </div>
      <div class="card-body tab-content">
        <?php require_once 'content/intro.php'; ?>
        <?php require_once 'content/props.php'; ?>
        <?php require_once 'content/ambito.php'; ?>

        
      </div>
    </div>
    <script src="/script/rainbow-custom.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
