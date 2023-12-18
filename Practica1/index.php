<?php 
require_once 'classOperacion.php';
//creacion de objetos
$operacion1 = new Operacion(1, 2);

$totalSUma = $operacion1->getSuma();
echo "<br>Total Suma:". $totalSUma;

$totalResta = $operacion1->getResta();
echo "<br>Total Resta:". $totalResta;

$totalMulti = $operacion1->getMultiplicacion();
echo "<br>Total Multi:". $totalMulti;
?>