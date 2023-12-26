<?php 
namespace Model;
//clase Padre
abstract class Persona{
    public $intDpi;
    public $strNombre;
    public $intEdad;
    public $mensaje;
    
    function __construct(int $Dpi, string $nombre, int $edad)
    {
        $this->intDpi = $Dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }
    abstract public function getDatosPesonales();
    abstract public function setMensaje(string $mensaje);
    abstract public function getMensaje():string;

}

?>