<?php
    /* Ejercicio EXTRA

    Para combinar PHP y HTML en el mismo documento hay varias formas; pero para éste ejercicio
    simplemente puedes hacer lo siguiente:

        <p>  <?php echo $miVariable; ?>  </p>

    separamos HTML de PHP por medio de las etiquetas correspondientes de cada lenguaje.

    Para realizar el ejercicio, en documento php

        1.Crea 4 variables: $nombre, $apellido, $edad y $profesion
        2.Asigna un valor correspondiente a cada variable
        3.Ahora con HTML crea una lista desordenada que complementada con las variables PHP
          que acabas de crear se muestre algo como lo siguiente:
            Nombre: Carlos
            Apellido: Hernández
            Edad: 28
            Profesión: Desarrollador web
    pista: <li> Nombre: <?php echo $nombre; ?> </li>
    */

    $nombre = "Carlos";
    $nombre2 = "Monserrat";
    $apellido = "Hernández";
    $apellido2 = "Vásquez";
    $edad = 28;
    $edad2 = 27;
    $profesion = "Desarrollador web";
    $profesion2 = "Frontend, Backend, Fullstack, Desarrollo Web"
?>
    <h2>Profesor del Curso profesional de PHP</h2>
    <ul style="list-style-type:square">
        <li>
            Nombre: <?php echo $nombre; ?>
        </li>
        <li>
            Apellido: <?php echo $apellido; ?>
        </li>
        <li>
            Edad: <?php echo $edad . " años"; ?>
        </li>
        <li>
            Profesion: <?php echo $profesion; ?>
        </li>
    </ul>

    <h2>Estudiante de Azul School</h2>
    <ul style="list-style-type:circle">
        <li>
            Nombre: <?php echo $nombre2; ?>
        </li>
        <li>
            Apellido: <?php echo $apellido2; ?>
        </li>
        <li>
            Edad: <?php echo $edad2; ?>
        </li>
        <li>
            Campo de interés: <?php echo $profesion2; ?>
        </li>
    </ul>
