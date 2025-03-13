<?php 
require_once "usuario.php";

$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$celular = $_POST["telefono"];

$objUsuario = new Usuario();
$registroExitoso = $objUsuario->insertUsuario($nombre, $celular, $correo);

if ($registroExitoso) {
    header("Location: sistema.php"); // Cambia 'index.php' por la página principal
    exit();
} else {
    echo "Error al registrar el usuario.";
}
?>
