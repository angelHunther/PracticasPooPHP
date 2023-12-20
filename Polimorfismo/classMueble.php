<?php 
require_once 'classProducto.php';

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strStatus = "Agotado";

    function __construct(string $descripcion, float $precio, string $marca, string $color, string $material)
    {
        parent ::__construct($descripcion, $precio);
        $this->strColor = $color;
        $this->strMaterial = $material;

    }
    public function getInfoProducto()
    {
        $productos = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Stock' => $this-> intStockMinimo,
            'Estado' => $this->strStatus,
            'Color' => $this->strColor,
            'Material' => $this->strMaterial
        );
        return $productos;
    }
    
}
?>