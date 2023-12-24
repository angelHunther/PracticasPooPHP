<?php
require_once 'classTienda.php';

$objProducto = new tienda();
$strProducto = "Teclado";
$fltPrecio = 100;
$intStock = 15;

$intCantidadVendida = 2;
$objProducto->setProductos($strProducto, $fltPrecio, $intStock );

echo $objProducto->getProductos();


$objProducto->setCarrito($strProducto, $intCantidadVendida);
$objProducto->setStock($intCantidadVendida);
echo $objProducto->getProductos();
echo $objProducto->getCarrito();
?>