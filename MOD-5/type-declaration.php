<?php
declare( strict_types = 1); // modo estricto con los tipos de datos
                            // es decir no permite el type jugglig

    // Con parámetros por default:
    //                                                                    tipo de dato que retorna
    function addNumbers(int $num1, int $num2, bool $printResult = false): int {
        // Variables locales
        $sum = $num1 + $num2;

        if( $printResult ){
            echo "El resultado de la suma es: " . $sum;
        }

        return $sum;
    }

    // $result = addNumbers("cinco", 7, true); // error porque espera un entero
    // $result = addNumbers(5, 7, true);
    // $result = addNumbers(7, 7, false);

    // echo $result;

    /* Tipos de Datos */
        // int -> entero
        // float -> flotante
        // string -> cadena
        // bool -> booleano
        // array -> arreglo
        // Nombre de clase -> instancia de esa clase
?>
