<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Procesa los datos (por ejemplo, enviando un correo electr�nico o guardando en una base de datos)
    // Aqu� solo imprimiremos los datos como ejemplo
    echo "Nombre: $name<br>";
    echo "Correo Electr�nico: $email<br>";
    echo "Mensaje: $message<br>";
} else {
    echo "No se enviaron datos.";
}
?>
