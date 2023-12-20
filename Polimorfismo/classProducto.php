<?php 
class Producto{
    public $strDescripcion;
    public $fltPrecio = 0;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";

    function __construct(string $descripcion, float $precio)
    {
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }
    public function getInfoProducto()
    {
        $productos = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Stock' => $this-> intStockMinimo,
            'Estado' => $this->strStatus
        );
        return $productos;
    }
}
?>