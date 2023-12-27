<?php 
class Conexion{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = 'dbsistema';
    private $conect;

    public function __construct()
    {
        //Se expesifica el nombre y la contraseña de la base de datos
        $conneccion = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            //Se crea un objeto para la conexion
            $this->conect = new PDO($conneccion, $this->user, $this->password);
            //Esto sirve para detectar los errores
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
        } catch (Exception $e) {
            $this->conect = 'Error de conexion';
            echo "ERROR: ". $e->getMessage();
        }

    }
    public function connect(){
        return $this->conect;
    }
    
    
}

?>