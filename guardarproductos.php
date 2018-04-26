<?php
//guardar.php
require "queries.php";

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

insertPrueba($codigo,$descripcion,$cantidad,$precio);

?>
