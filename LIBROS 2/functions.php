<?php

// Función para agregar un libro
function agregarLibro($titulo, $autor, $precio, $cantidad) {
    if (!empty($titulo) && !empty($autor) && $precio > 0 && $cantidad > 0) {
        $_SESSION['libros'][] = [
            'titulo' => htmlspecialchars($titulo),
            'autor' => htmlspecialchars($autor),
            'precio' => (float)$precio,
            'cantidad' => (int)$cantidad,
        ];
        return true;
    }
    return false;
}

// Función para editar un libro
function editarLibro($index, $titulo, $autor, $precio, $cantidad) {
    $_SESSION['libros'][$index] = [
        'titulo' => htmlspecialchars($titulo),
        'autor' => htmlspecialchars($autor),
        'precio' => (float)$precio,
        'cantidad' => (int)$cantidad,
    ];
    return true;
}

// Función para eliminar un libro
function eliminarLibro($index) {
    unset($_SESSION['libros'][$index]);
    $_SESSION['libros'] = array_values($_SESSION['libros']);
}
?>
