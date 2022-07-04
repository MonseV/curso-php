<?php

    // importamos el archivo
    include_once( './includes/functions.php');
    include_once( './includes/data.php');

    $user = [
        'name' => 'Carlos',
        'featured' => 'avatar.png',
        'lastName' => 'Hernández',
        'age' => 28,
        'username' => 'CarlosH',
        'profession' => 'Web Developer',
        'interests' => [
            'Desarrollo Web',
            'Desarrollo de videojuegos'
        ]
    ];

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
        <!-- contenedor de ancho completo -->
        <section class="container-fluid">
            <!-- clase de Bootstrap que
                 justifica el contenido y lo centra
            -->
            <div class="row justify-content-center">
            <!-- col-auto -> la columna se dimensiona en función
                             del contenido
                 m -> margen
                 y -> establece
                        top -> parte superior
                        bottom -> abajo
                 4 -> espacio definido por Boostrap
            -->
                <div class="col-auto my-4 text-center">
                    <h2>Mi perfil</h2>
                    <img
                        src = "./images/<?= $user['featured'] ?>"
                        class = "img-fluid"
                        width = "200"
                        alt = "Foto de perfil <?= $user['name'] ?>"
                    /> <!-- class = 'img-fluid -> imagen responsiva -->
                    <p><?= $user['username'] ?></p>
                    <p><?= $user['profession'] ?></p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-4">
                    <h2>Mis Cursos</h2>
                </div>
                <?php foreach($courses as $course) : ?>
                    <?php if( $course['subscribed'] ): ?>
                        <?= printCourse( $course );?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
    </body>
</html>