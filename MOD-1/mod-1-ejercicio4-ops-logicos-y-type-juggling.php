<?php
    /* Ejercicio 4: Operadores lógicos y type juggling

    Realiza las siguientes operaciones en código PHP (evalúa el resultado por tu cuenta antes de
    verlo en el navegador). Ten en cuenta siempre el type juggling (conversión de tipos)

        ‘1’ NO es idéntico a 1 y ‘0’ es igual a 0
        ‘1’ es igual a ‘Uno’’ o true es igual a 1
        ‘Uno’ es igual a ‘uno’ || ‘2’ es idéntico a ‘2’
        negación de (1 es igual a  1)
    */

    //           true     &&     true    -> true
    // var_dump( ('1' !== 1) && ('0' == 0) );
    //            false      ||      true    -> true
    // var_dump( ('1' == 'Uno') || (true == 1 ) );
    //              false      ||     true      -> true
    // var_dump( ('Uno' == 'uno') || ('2' === '2') );
    //        ! (true)  -> false
    var_dump( !(1 == 1));
?>