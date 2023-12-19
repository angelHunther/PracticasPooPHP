<?php 

//clase Padre
class Persona{
    public $intDpi;
    public $strNombre;
    public $intEdad;
    
    function __construct(int $Dpi, string $nombre, int $edad)
    {
        $this->intDpi = $Dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }
    public function getDatosPesonales()
    {
        $datos ="
        <h2>Datos Pesonales</h2>
        DPI: {$this->intDpi}</br>
        Nombre: {$this->strNombre}</br>
        Edad: {$this->intEdad}</br>
        ";
        return $datos;
    }

}

?>