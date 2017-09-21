<?php
if (file_exists('documento.txt')) {
  echo "El archivo sí existe<br>";
  echo file_get_contents('documento.txt');
  echo "<pre>";
  // file_put_contents('documento.txt', "Hola Alejandro ツ \n", FILE_APPEND);
  
  file_put_contents('documento.txt','');
  for ($i=0; $i < 10; $i++) {
    file_put_contents('documento.txt', "$i \n", FILE_APPEND);
  }


  $archivo = file('documento.txt');
  print_r($archivo);

  echo "</pre>";

} else {
  echo "El archivo no existe<br>";
}
?>
