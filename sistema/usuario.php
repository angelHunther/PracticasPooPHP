<?php 
require_once 'autoload.php';
class Usuario extends Conexion{
    private $strNombre;
    private $intTel;
    private $strEmail;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function insertUsuario(string $usuario, int $cel, string $email)
    {
        $this->strNombre = $usuario;
        $this->intTel = $cel;
        $this->strEmail = $email;

        $sql = "INSERT INTO usuario(nombre, cel, correo)
        Values(?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strNombre,$this->intTel,$this->strEmail);
        $restInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return true;

    }
    public function getUsuarios()
    { 
        $sql = "SELECT * FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;

    } 

}
?>