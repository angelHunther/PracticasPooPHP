<?php 
trait Productos{
    public $strProducto;
    public $fltPrecio;
    public $intStock;

    public function setProductos(string $productos, float $precio, int $stock)
    {
        $this->strProducto = $productos;
        $this->fltPrecio = $precio;
        $this->intStock = $stock;

    }

    public function getProductos():string
    {
        $strinfo = "
        Producto: {$this->strProducto}<br>
        Precio: {$this->fltPrecio}<br>
        stock: {$this->intStock}<br><br>
        ";
        return $strinfo;
    }
    public function setStock(int $cantidad)
    {
        $this->intStock = $this->intStock - $cantidad;
    }
}

?>