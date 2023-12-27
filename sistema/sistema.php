<?php 
require_once 'autoload.php';

$objUsuario = new Usuario();
// $insert = $objUsuario->insertUsuario('Jorgito', 5565173413, 'jorigito@gmail.com');
// echo $insert;

$busqueda = $objUsuario->getUsuarios();
print_r('<pre>');
print_r($busqueda);
print_r('</pre>');

?>