<?php

    // importamos el archivo
    include_once( './includes/functions.php' );
    include_once( './includes/data.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto || Cursos</title>
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous"
        >
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous">
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Azul Escuela</a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Mi perfil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cursos.php">Cursos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 my-4">
                    <h2>Todos los Cursos</h2>
                    <small>
                        <b>
                            Total de cursos:
                        </b>
                        <?= count ( $courses)?>
                    </small>
                </div>
                <?php foreach($courses as $course) : ?>
                    <?= printCourse( $course ); ?>
                <?php endforeach; ?>
            </div>
        </section>
    </body>
</html>