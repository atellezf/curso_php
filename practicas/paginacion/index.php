<?php
try {
  $conexion = new PDO('mysql:host=localhost;dbname=curso_paginacion','root','root');
} catch (PDOException $e) {
  echo "ERROR: " . $e->getMessage();
  die();
}
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = $pagina > 1 ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulo LIMIT $inicio, $postPorPagina");
$articulos->execute();
$articulos = $articulos->fetchAll();

if (!$articulos) {
  header('Location: index.php');
}

$totalArticulos = $conexion->query("SELECT FOUND_ROWS() as total");
// $totalArticulos = $totalArticulos->fetch()['total'];
$totalArticulos = $totalArticulos->fetchColumn(); // Sólo tiene una columna, obtiene la primera columna del resultset

$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require("index.view.php");
?>
