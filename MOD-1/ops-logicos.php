<?php

// TODOS LOS NÚMEROS, excepto: 0 y 0.0 son considerados: TRUE
// TODOS LOS STRINGS, excepto: '' y '0' son considerados: TRUE;


// Operador &&
//          true   &&   true    -> true
// var_dump ( (8 < 9) && (9 < 10) );
//      true && false -> false
// var_dump( 1 && 0 );
//      true && false -> false
// var_dump( 1 && 0.0 );
//      true && true -> true
// var_dump( 10 && 8 );

// Operador ||
//              false        ||         true            -> true
// var_dump( ('hola' != 'hola') || ('adiós' != 'goodbye') );
//              false        ||         false            -> false
// var_dump( ('hola' != 'hola') || ('adiós' != 'adiós') );

// Operador !
// var_dump(!true); // false
// var_dump(!false); // true
//        !( ( true    &&          true        )      -> true) -> false
var_dump( !( (8 <= 10) && ('carlos' != 'CARLOS') ) );
?>