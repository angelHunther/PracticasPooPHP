<?php 
class Usuario{
    public $strNombre;
    public $strEmail;
    public $strTipo;
    private $strClave;

    function __construct(string $nombre, string $email, string $Tipo)
    {
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $Tipo;
        $this->strClave = rand();
    }
}
?>