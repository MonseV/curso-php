<?php
    /* Ejercicio 2: if-else-elseif

    Suma, resta, multiplicación

    1.Define una variable llamada $op la cual tendrá asignado uno de tres valores:
        ‘suma’, ‘resta’, ‘multiplicación’ (puedes comenzar con el valor que gustes).
    2.Define dos variables $num1 y $num2 con los valores numéricos que gustes.
    3.Luego escribe un bloque if y compara si $op es igual a ‘suma’y en
      caso de que fuera así imprime con echo el siguiente mensaje que
    muestre el resultado de la suma entre las variables $num1 y $num2
    4.Continua con un bloque elseif y compara si la variable $op es igual a
      ‘resta’ y si fuera así imprime un mensaje que muestre el resultado de
      la resta entre $num1 y $num2
    5.Agrega otro elseif y compara si la variable $op es igual a
      ‘multiplicación’ y si en caso de ser así imprime un mensaje con el
      resultado de la multiplicación entre $num1 y $num2
    6.Por último agrega else e imprime un mensaje que diga: ‘Esa operación
      no es válida’
    7.Prueba colocando los diferentes posibles valores en la variable $op e
      incluso para ver si funciona cada uno de los casos que haz escrito.
    */

    // $op = 'suma';
    // $op = 'resta';
    // $op = 'multiplicación';
    $op = "";
    $num1 = 10;
    $num2  = 2.5;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ejercicio If-Else-ElseIf</title>
  </head>
  <body>
    <p>
      El valor del primer número es: <?php echo $num1; ?><br />
      El valor del segundo número es: <?php echo $num2; ?>
    </p>
    <?php if($op == 'suma'): ?>
      <p>El resultado de la suma es: <?php echo $num1 + $num2; ?></p>
      <?php elseif($op == 'resta'): ?>
        <p>El resultado de la resta es: <?php echo $num1 - $num2; ?></p>
      <?php elseif($op == 'multiplicación'): ?>
        <p>El resultado de la multiplicación es: <?php echo $num1 * $num2; ?></p>
      <?php else: ?>
        <p>Esa operación no es válida</p>
    <?php endif; ?>
  </body>
</html>