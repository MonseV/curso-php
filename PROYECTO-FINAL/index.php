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
    <body style="background-color: #FAFBFD;">
        <?php require_once('./includes/menu.php') ?>



        <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 style="color: #000000;
                               font-size: 40px;
                               line-height: 1.3em;">
                        <b>
                            Azul School,
                        </b>
                        más que un simple sitio web de cursos.
                    </h1>
                    <div style="padding-top: 25px; padding-bottom: 25px;" >
                    </div>
                    <a href="register.php" type="button" class="btn btn-outline-danger btn-lg">
                        ENTRAR
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-6">
                    <img src="./images/azul-school.jpg"
                         class="img-fluid float-right" width="640" height="505">
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="row">
                <div class="col-3">
                    <p>
                        Cursos nuevos cada dos meses, incluidos en tu memnbresía sin costo adicional.
                    </p>
                </div>
                <div class="col-3">
                    <p>
                        Los cursos tiene asesoría del maestro. Contamos con grupos de estudio y foros.
                    </p>
                </div>
                <div class="col-3">
                    <p>
                        Red social de programadores. Conoce gente con las mismas metas que tu en tu país o ciudad.
                    </p>
                </div>
                <div class="col-3">
                    <p>
                        Mensajería privada. Comunicante con tus amigos y maestros de forma privada.
                    </p>
                </div>
            </div>
        </div>
        <?php require_once('./includes/footer.php') ?>
    </body>
</html>