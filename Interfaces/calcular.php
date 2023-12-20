<?php 
require_once 'classOperacion.php';

$objRaiz = new Calcular();
echo $objRaiz->raizCuadrada(2);
echo '<br>';
echo $objRaiz->potencia(4,2);
echo '<br>';
echo $objRaiz->suma(1,2,'+');
?>