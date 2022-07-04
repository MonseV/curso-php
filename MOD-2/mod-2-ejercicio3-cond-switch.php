<?php
    /* Ejercicio 3: switch

    Mensaje de bienvenida a un curso

    1.Define la variable $curso la cual podrá tener el nombre de un curso,
      por ejemplo “curso profesional de PHP” (tu puedes elegir el nombre)
    2.Escribe un bloque switch…case que evalue la variable $curso y que
      tenga al menos tres casos(case) para diferentes nombres de cursos
    3.Para cada case imprime en el navegador un mensaje de bienvenida
      para ese curso, algo como: “Bienvenido a tu curso de “ . $curso
    4.Define un default y en él escribe un mensaje: “no se ha registrado a ningún curso”
    */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Switch</title>
    </head>
    <body>
        <?php
            // $curso = 'Curso Profesional de PHP';
            // $curso = 'Curso Profesional de HTML, CSS y JS';
            // $curso = 'Curso de Java y Blue J';
            $curso = '';

            switch ($curso) {
                case 'Curso Profesional de PHP':
                    echo "<h1>Bienvenido al Curso Profesional de PHP.</h1>";
                    break;
                case 'Curso Profesional de HTML, CSS y JS':
                    echo "<h1>
                                Bienvenido al Curso Profesional de HTML, CSS y JS, introducción
                                al mundo del desarrollo web.
                        </h1>";
                    break;
                case 'Curso de Java y Blue J':
                    echo "<h1>
                                Bienvenido al Curso Colaborativo entre Juan Villalvazo, de Vida de programador,
                                y Azul School.
                        </h1>";
                    break;
                default:
                    echo "<h1>No se ha registrado a ningún curso.</h1>";
                    break;
            }
        ?>
    </body>
</html>