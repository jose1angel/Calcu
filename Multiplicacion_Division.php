<?php
 {
case '*':
    $resultado = $operando1 * $operando2;
 break;
case '/':
 $resultado = $operando1 / $operando2;
 break;
default:
 echo "Operador inválido";
 break;
}

// Mostrar el resultado
echo "El resultado de la operación es: " . $resultado;
?>