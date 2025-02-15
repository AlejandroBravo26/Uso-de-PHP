<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background-color: #333; padding: 10px; }
        nav a { color: white; margin: 10px; text-decoration: none; }
        form { max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        label, input, textarea { display: block; width: 100%; margin-bottom: 10px; }
        button { background-color: #333; color: white; padding: 10px; border: none; cursor: pointer; }
        .message { margin-top: 20px; padding: 15px; background-color: #f4f4f4; border-radius: 5px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="registro_libro.php">Registrar Libro</a>
        <a href="listar_libros.php">Listado de Libros</a>
        <a href="contacto.php">Contacto</a>
    </nav>

    <h1>Contacto</h1>
    <p>Puedes enviarnos un mensaje completando el siguiente formulario:</p>

    <form action="contacto.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>

        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" rows="4" required><?php echo isset($message) ? $message : ''; ?></textarea>

        <button type="submit">Enviar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="message">
            <p>Gracias, <strong><?php echo $name; ?></strong>. Hemos recibido tu mensaje.</p>
            <p><strong>Tu correo electrónico:</strong> <?php echo $email; ?></p>
            <p><strong>Tu mensaje:</strong> <?php echo nl2br($message); ?></p>
        </div>
    <?php endif; ?>

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
