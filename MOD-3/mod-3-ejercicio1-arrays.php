<?php
  /* Ejercicio 1 (arrays)
    1.Crea un nuevo documento PHP (mod-3-ejercicio-1.php) y agrega la estructura básica HTML5.
    2.Entre etiquetas PHP define un array array que al contenga los días de la semana (Lunes – Viernes)
    3.Mediante una lista desordenada HTML5 imprime cada uno de los días del array
    4.A cada día del array que está en la lista desordenada agrega un texto que describa una
      actividad del día. El resultado debería ser como el siguiente:
            Lunes – Estudiar Curso PHP en AzulSchool
            Martes – Hacer Cardio
            Miércoles – Jugar LOL
            Jueves – Salir con mi Pareja
            Viernes – Leer dos horas
  */

  $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
  // var_dump($dias);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Arrays</title>
  </head>
  <body>
    <h1>Días de la semana</h1>
    <ul>
      <li><?= $dias[0]; ?> - Estudiar Curso PHP en Azul School</li>
      <li><?= $dias[1]; ?> - Hacer Cardio</li>
      <li><?= $dias[2]; ?> - Jugar LOL</li>
      <li><?= $dias[3]; ?> - Salir con mi Pareja</li>
      <li><?= $dias[4]; ?> - Leer dos horas</li>
    </ul>
  </body>
</html>