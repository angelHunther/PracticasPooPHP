<?php 
//Sirve para definir los metodos que se van a ocupar
//en alguna clase, esos metodos deben ser publicos
interface Operacion{
    public function raizCuadrada(float $numero):float;
    public function potencia(int $numero, int $potencia):int;
}

?>