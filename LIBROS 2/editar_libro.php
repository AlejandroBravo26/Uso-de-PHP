<?php
session_start();
include('functions.php');

$index = $_GET['index'];
$libro = $_SESSION['libros'][$index];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    if (editarLibro($index, $titulo, $autor, $precio, $cantidad)) {
        echo "<p>Libro editado exitosamente.</p>";
    } else {
        echo "<p>Error al editar el libro.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="editar_libro.css">
</head>
<body>
   

    <h1>Editar Libro</h1>

    <form method="POST" action="editar_libro.php?index=<?php echo $index; ?>">
        Título: <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>" required><br>
        Autor: <input type="text" name="autor" value="<?php echo $libro['autor']; ?>" required><br>
        Precio: <input type="number" step="0.01" name="precio" value="<?php echo $libro['precio']; ?>" required><br>
        Cantidad: <input type="number" name="cantidad" value="<?php echo $libro['cantidad']; ?>" required><br>
        <button type="submit">Actualizar Libro</button>
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
