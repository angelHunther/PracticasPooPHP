<?php
namespace Controller;

// require_once '../Model/Persona.php';
use Model\Persona;
// require_once 'autoload.php';
class Cliente extends Persona{
    protected $fltCredito;
    function __construct(int $Dpi, string $nombre, int $edad)
    {
        parent::__construct($Dpi, $nombre, $edad);
    }
    public function setCredito(string $credito){

        $this->fltCredito = $credito;
    }
    public function getCredito():string
    {
       return $this->fltCredito;
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