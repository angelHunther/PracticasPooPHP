<?php
require_once 'Operaciones.php';
require_once 'OperacionesBasicas.php';

class Calcular implements Operacion, OperacionesBasicas{
    public function raizCuadrada(float $numero):float
    {
        $total = sqrt($numero);
        return $total;
    }
    public function potencia(int $numero, int $potencia):int
    {
        $total = pow($numero, $potencia);
        return $total;
    }
    public function suma(float $num1,float $num2, string $operacion)
    {
        if ($operacion == '+') {
            $resu = $num1 + $num2;
        }elseif($operacion== '-'){
            $resu = $num1 - $num2;
        }elseif($operacion== '*'){
            $resu = $num1 * $num2;
        }elseif($operacion== '/'){
            $resu = $num1 / $num2;
        }else {
            $resu = 'Operacion Invalida';
        }
        return $resu;
    }

}
?>