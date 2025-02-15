<?php
session_start();
include('functions.php');

$index = $_GET['index'];
eliminarLibro($index);

header("Location: listar_libros.php");
exit;
?>
