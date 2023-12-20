<?php 
require_once 'classMueble.php';

class Mesa extends Mueble
{
    private $strForma = "";
    protected $strTamaño;
    public $strStatus = 'activo';

    function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamaño)
    {
        parent::__construct($descripcion, $precio, $marca, $color, $material);
        $this->strTamaño = $tamaño;
    }
    public function setForma(string $forma){
        $this->strForma = $forma;
    }
    public function getInfoProducto()
    {
        $productos = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Stock' => $this-> intStockMinimo,
            'Estado' => $this->strStatus,
            'Color' => $this->strColor,
            'Material' => $this->strMaterial,
            'Tamaño' => $this->strTamaño,
            'Forma' => $this->strForma
        );
        return $productos;
    }
}

?>