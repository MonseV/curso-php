<?php
  /* Ejercicio 2 Operadores de incremento / decremento
  1.Teniendo en cuenta una variable $x = 0;
    escribe un if() que evalúe la siguiente expresión
      $x++ > 0
    y en el cuerpo de if imprime con echo el valor de
    $x. Observa el resultado ¿imprimió algo?
  2.Luego de comprobar el resultado,
    cambia la expresión de tal forma que ahora el operador
    de incremento esté a la izquierda de la variable $x
    y observa el nuevo resultado.
  */

  $x = 0;

  // Primero devuelve el valor y despues incremeta
  // if( $x++ > 0 ) { // x = 0 y por eso no entra al if
  //   echo $x; // no imprime
  // }

  // Primero incrementa y despues devuelve el valor
  if( ++$x > 0) { // x = 1, entra al if
    echo $x; // imprime, x = 1
  }
?>