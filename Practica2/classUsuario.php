<?php 
class Usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

    function __construct(string $nombre, string $email, string $Tipo)
    {
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $Tipo;
        $this->strClave = rand();
        $this->strFechaRegistro = date('Y-m-d H:m:s');
    }
    public function getNombre():string{
        return $this->strNombre;
    }
    public function getPerfil(){
        echo "datos del usuario<br>";
        echo "nombre: ". $this->strNombre."<br>";
        echo "Email: ". $this->strEmail."<br>";
        echo "Tipo: ". $this->strTipo."<br>";
        echo "Clave: " . $this->strClave."<br>";
        echo "Fecha Registro: ". $this->strFechaRegistro."<br>";
        echo "Estado: ". self::$strEstado."<br>";
    }
    public function setCambiarClave(string $Pass){
        $this->strClave = $Pass;
    }
}
?>