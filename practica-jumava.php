<?php
/**
 * Función para sumar dos números.
 * 
 * @author Juan Maldonado
 * @version 1.0
 * @param int $num1 primer número a sumar
 * @param int $num2 segundo número a sumar
 * @return int devolvemos el resultado de la suma de los dos números
 * @access private
 * @param string $claveprivada contraseña que no debe verse
 */
function sumar($num1, $num2){
    $suma = $num1 + $num2;
    return $suma;
}

/**
 * Función para restar dos números.
 * 
 * @author Juan Maldonado
 * @version 1.0
 * @param int $num1 primer número a restar
 * @param int $num2 segundo número a restar
 * @return int devolvemos el resultado de la resta de los dos números
 * @access private
 * @param string $oculto elemnto oculto.
 */
function restar($num1, $num2){
    $resta = $num1 - $num2;
    return $resta;
}

/**
 * Invocamos las funciones.
 * @access public
 */
echo "La suma de 6 + 4 es: ".sumar(6,4);
echo "La resta de 6 - 4 es: ".restar(6, 4);

//Añado esta linea
echo "he añadido una linea";
