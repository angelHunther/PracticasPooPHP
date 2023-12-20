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
    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }
    public function getMensaje():string
    {
        return $this->mensaje.''. $this->strNombre;
    }



}
?>