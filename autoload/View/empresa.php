<?php
require_once '../autoload.php';
// require_once '../Controller/Empleado.php';
// require_once '../Controller/Cliente.php';
// require_once '../Controller/Persona.php';


use Controller\Cliente;
use Controller\Empleado;
use Controller\Persona;

// //objeto de empleado
// $objEmpleado = new Empleado(1, 'Jorge', 34);
// $objEmpleado->setPuesto('Administrador');
// echo $objEmpleado->getDatosPesonales();
// echo "Puesto: ".$objEmpleado->getPuesto();
// require_once 'autoload.php';


// //Objeto de Cliente
$objCliente = new Cliente(12, 'angel', 20);
$objCliente->setCredito(1000);

$objCliente->setMensaje('Bienvenido Cliente');
echo $objCliente->getMensaje();
echo $objCliente->getDatosPesonales();
echo "Credito: ".$objCliente->getCredito();
echo '<br><br>';

$objEmpleado = new Empleado(1222, 'Andres', 12);
$objEmpleado->setMensaje('Bienvenido Empleado');
echo $objEmpleado->getMensaje();
echo $objEmpleado->getDatosPesonales();

echo '<br>';
$mensaje = new Persona();
echo $mensaje->Saludar();


?>