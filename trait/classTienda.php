<?php 
require_once ('Producto.php');
require_once 'carrito.php';

class tienda{
    use Productos, Carrito;
    public $flttotal = 0;

    public function getCarrito(){
        $this->flttotal = $this->fltPrecio * $this->intCantidad;
        $infoCarrito = "
        <h2>Carrito</h2>
        <hr>
        Producto : {$this->strProducto} <br>
        Cantidad : {$this->intCantidad} <br>
        Precio : {$this->fltPrecio} <br>
        Total : {$this->flttotal} <br>
        ";
        return $infoCarrito;
    }
}

?>