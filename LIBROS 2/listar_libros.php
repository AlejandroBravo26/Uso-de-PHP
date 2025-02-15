
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link rel="stylesheet" href="listar_libro.css">
</head>
<body>
   

    <h1>Listado de Libros Registrados</h1>

    <?php
    if (empty($_SESSION['libros'])) {
        echo "<p>No existen libros registrados.</p>";
    } else {
        echo "<table>
                <tr><th>Título</th><th>Autor</th><th>Precio</th><th>Cantidad</th><th>Acciones</th></tr>";
        foreach ($_SESSION['libros'] as $index => $libro) {
            echo "<tr>
                    <td>{$libro['titulo']}</td>
                    <td>{$libro['autor']}</td>
                    <td>{$libro['precio']}</td>
                    <td>{$libro['cantidad']}</td>
                    <td><a href='editar_libro.php?index=$index'>Editar</a> | <a href='eliminar_libro.php?index=$index'>Eliminar</a></td>
                </tr>";
        }
        echo "</table>";
    }
    ?>

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
