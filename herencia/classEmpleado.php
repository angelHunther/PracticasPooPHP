<?php 
require_once 'classPersona.php';
class Empleado extends Persona{
    protected $strPuesto;
    function __construct(int $Dpi, string $nombre, int $edad)
    {
        parent::__construct($Dpi, $nombre, $edad);
    }
    public function setPuesto(string $Puesto){

        $this->strPuesto = $Puesto;
    }
    public function getPuesto():string
    {
       return $this->strPuesto;
    }

}
?>