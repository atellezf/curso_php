<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FORMULARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="card" style="width: 25rem;">
            <h6 class="card-header">
                FORMULARIOS CON PHP
            </h6>
            <form action="recibe.php" method="get">

                <div class="card-block">

                        <fieldset class="form-group">
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control">
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="genero" value="hombre" class="form-check-input">
                                    Hombre
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="genero" value="mujer" class="form-check-input">
                                    Mujer
                                </label>              
                            </div>
                        </fieldset>

                        <fieldset class="form-group">                   
                            <select name="year" class="form-control">
                                <?php
                                    for ($i=2000; $i <= 2010 ; $i++) { 
                                        echo "<option value='$i'>$i</option>";
                                    }    
                                ?>
                            </select>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="terminos" class="form-check-input" value="ok">
                                    Aceptar los Términos
                                </label>
                            </div>
                        </fieldset>
                    
                </div>
                <div class="card-footer text-center">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>
</html>