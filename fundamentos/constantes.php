<?php
include('persona.php');
define('PI', 3.1416);
$nombre = "Alejandro";
$nombre = 25;
$persona = new Persona();
$persona->nombre="Alejandro";
$persona->apellido="Téllez";
$persona->edad=38;
$persona->email="alejandro.tellez@gmail.com";
echo $nombre, "<br>";
?>
<?php echo PI; ?>
<br>
<?php echo $persona->toString();?>