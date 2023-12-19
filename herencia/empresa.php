<?php
require_once 'classEmpleado.php';
require_once 'classCliente.php';

//objeto de empleado
$objEmpleado = new Empleado(1, 'Jorge', 34);
$objEmpleado->setPuesto('Administrador');
echo $objEmpleado->getDatosPesonales();
echo "Puesto: ".$objEmpleado->getPuesto();


//Objeto de Cliente
$objCliente = new Cliente(12, 'angel', 20);
$objCliente->setCredito(1000);
echo $objCliente->getDatosPesonales();
echo "Credito: ".$objCliente->getCredito();


?>