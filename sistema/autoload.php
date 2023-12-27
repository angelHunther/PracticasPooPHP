<?php 
//Funcion para cargar automaticamente las clases que se ocupen
 function Autoload ($class){
    require_once $class.'.php';
 }

 //Ejecuta la funcion para cargar el requiere_once
 spl_autoload_register('Autoload');

?>