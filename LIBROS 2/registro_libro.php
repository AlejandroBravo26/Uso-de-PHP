<?php
session_start();
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    if (agregarLibro($titulo, $autor, $precio, $cantidad)) {
        echo "<p>Libro registrado exitosamente.</p>";
    } else {
        echo "<p>Por favor, verifica los campos del formulario.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="registro_libro.css">
</head>
<body>
   

    <h1>Registrar un Nuevo Libro</h1>

    <form method="POST" action="registro_libro.php">
        Título: <input type="text" name="titulo" required><br>
        Autor: <input type="text" name="autor" required><br>
        Precio: <input type="number" step="0.01" name="precio" required><br>
        Cantidad: <input type="number" name="cantidad" required><br>
        <button type="submit">Registrar Libro</button>
    </form>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="registro_libro.php">Registrar Libro</a></li>
                <li><a href="listar_libros.php">Listado de Libros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
