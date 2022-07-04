<?php

// Operadores de comparación:

// Op: < ( menor a )

// var_dump( 1 < 2 ); // retorna true
// var_dump( 1 < 1 ); // retorna false

// Op: <= ( menor o igual a )
// var_dump( 1 <= 1 ); // retorna true

// Op: > ( mayor a )
// var_dump( 1 > 1); // retorna false
// var_dump( 1 > 2 ); // retorna false
// var_dump( 2 > 1 ); // retorna true

// Op: >= ( mayor o igual a )
// var_dump( 2 >= 1 ); // retorna true
// var_dump( 2 >= 2 ); // retorna true
// var_dump( 2 >= 3 ); // retorna false

// Op: <=> ( spaceship / nave espacial)
// var_dump( 1 <=> 2 ); // el operador de la izq es menor por eso retorna -1
// var_dump( 1 <=> 0 ); // el operadorde la der es mayor por eso retorna 1
// var_dump( 1 <=> 1 ); // son iguales retorna 0


// Op: == ( Igual a )
// var_dump( "1" == 1 ); // retorna true, type jugglig

// Op: === ( Idéntico a )
// var_dump( "1" === 1 ); // retorna false
// var_dump( "1" === "1" ); // retorna true

// Op: != ( diferente a )
// var_dump( "1" != 1 ); // retorna false, type jugglig

// Op: !== ( no idéntico a)
var_dump( "1" !== 1); // retorna true
?>