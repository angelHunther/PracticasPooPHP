<?php
require_once 'classPersona.php';
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

}