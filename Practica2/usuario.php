<?php 
require_once 'classUsuario.php';

$objUsuario = new Usuario('Alejandro', 'ale@gmail.com', 'Admin');
echo $objUsuario->getPerfil();

echo '<br><br>';
$objUsuario->setCambiarClave("12345");
echo $objUsuario->getPerfil();
?>