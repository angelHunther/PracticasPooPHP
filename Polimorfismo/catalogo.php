<?php 
require_once 'classMesa.php';

$objCama = new Producto('cama', 1344);
$arrProducto = $objCama->getInfoProducto();

print_r('<pre>');
print_r($arrProducto);
print_r('</pre>');


$objMueble = new Mueble('Closet',3000,'acme', 'cafe', 'madera');
$arrMueble = $objMueble->getInfoProducto();
print_r('<pre>');
print_r($arrMueble);
print_r('</pre>');

$objMesa = new Mesa('Mesa', 1233, 'acme', 'dorado', 'vidrio', 'Grande');
$objMesa->setForma('Redonda');
$arrMesa = $objMesa->getInfoProducto();
print_r('<pre>');
print_r($arrMesa);
print_r('</pre>');


?>