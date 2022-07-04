<?php
    // Importamos el archivo
    include_once('./includes/functions.php');
    include_once( './includes/data.php' );

    /* MÉTODO POST */
    // Si el "arreglo post" no esta vacio y el "arreglo post" tiene seteado "username"
    if( !empty($_POST) && isset( $_POST['username'] ) ) {
        echo "Método POST";
        // Generar información del usuario: cookies
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $time = time() + 30 * 24 * 60 * 60;

        // setear las cookies
        setcookie('username', $username, $time);
        setcookie('email', $email, $time);
        setcookie('age', $age, $time);
        setcookie('profession', $profession, $time);
        echo "<br>Cookies de usuario registrado creadas!";
    /* MÉTODO GET */
    } else {
        echo "Método GET";
        // Generar información del usuario: cookies
        // Si el "arreglo cookie" no esta vacio y el "arreglo cookie" tiene seteado "username"
        if( !empty($_COOKIE) && isset($_COOKIE['username']) ) {
            $username = $_COOKIE['username'];
            $email = $_COOKIE['email'];
            $age = $_COOKIE['age'];
            $profession = $_COOKIE['profession'];
            $time = time() + 30 * 24 * 60 * 60;
        }
        // Agregar curso a archivo JSON
        // Si el "arreglo get" no esta vacio y el "arreglo get" tiene seteado "name"(nombre del curso)
        if( !empty($_GET) && isset( $_GET['name'] ) ) {
            // Leer el contenido del JSON
            $coursesJSON = file_get_contents('./includes/myCourses.json');
            // Sirve para actualizar(agregar datos viejos con los nuevos)
            $tempArray = json_decode($coursesJSON, true); // si el archivo json no contiene un valor
                                                          // entonces devuelve null
            // Si "tempArray" es nulo
            if( is_null($tempArray) ) {
                // entonces imprime un array vacío
                $tempArray = [];
            }
            // Ingresa un elemento al array
            array_push( $tempArray, $_GET );
            // Convertirlo a un JSON
            $jsonData = json_encode($tempArray);
            // Escribir contenido en el JSON
            file_put_contents('./includes/myCourses.json', $jsonData);
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
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
        <?php require_once('./includes/menu.php')?>
        <section class="container-fluid">
            <div class="row justify-content-center">
            <!-- Si tiene seteado(contiene) "username" -->
            <?php if( isset($username) ): ?>
                <div class="col-auto my-4 text-center">
                    <h2>Mi perfil</h2>
                    <img
                        src = "./images/avatar.png"
                        class = "img-fluid"
                        width = "125"
                        alt = "Foto de perfil <?= $username?>"
                    />
                    <p>
                        <?= $username ?>
                    </p>
                    <p>
                        <?= $profession ?>
                    </p>
                </div>
            <?php else: ?>
                <div class="col-auto my-4">
                    <a href="register.php" class="btn btn-primary">
                        Ir a registro
                    </a>
                </div>
            <?php endif; ?>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row justify-content-center">
            <!-- Si tiene seteado(contiene) "username" -->
            <?php if(isset($username)): ?>
                <?php
                    // Obtiene los cursos del usuario:
                    $myCoursesJSON = file_get_contents('./includes/myCourses.json');
                    $myCoursesArray = json_decode($myCoursesJSON, true);
                ?>
                <?php if(!empty($myCoursesArray)):?>
                    <?php $totalCourses = count($myCoursesArray); ?>
                    <div class="col-12 text-center mb-4">
                        <h2>
                            Mis Cursos
                        </h2>
                        <small>
                        <b>
                            Total de cursos:
                        </b>
                        <?= $totalCourses ?>
                        </small>
                    </div>
                    <?php foreach($myCoursesArray as $course) : ?>
                        <?= printCourse( $course ) ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center mb-4">
                        <p class="text-center">
                            <a href="courses.php">
                                Inscríbete
                            </a> a cursos!
                        </p>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <p class="text-center">
                    <a href="register.php">
                        Regístrate
                    </a> para poder inscribirte a a cursos
                </p>
            <?php endif; ?>
            </div>
        </section>
        <?php require_once('./includes/footer.php') ?>
    </body>
</html>