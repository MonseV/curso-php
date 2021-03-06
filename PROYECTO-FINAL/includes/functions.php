<?php
// Funcion que imprime los cursos
function printCourse( $course, $username = false ): string {
    // Si el usuario está registrado
    if( $username ) {
        // Se muestra el botón
        $button = '<form action="profile.php" method="GET">'.
                    '<input type="hidden" name="name" value="'. $course['name'] .'">'.
                    '<input type="hidden" name="featured" value="'. $course['featured'] .'">'.
                    '<input type="hidden" name="teacher" value="'. $course['teacher'] .'">'.
                    '<button type="hidden" type="submit" class="btn btn-primary"> Inscribirme </button>'.
                  '</form>';
    } else {
        // Se oculta el botón
        $button = '';
    }

    $result = '<div class="col-3 my-4">'.
                // Cards Bootstrap
                '<div class="card m-auto" style="width: 18rem;">'.
                    '<img src="./images/'. $course['featured'] .'" class="card-img-top" alt="...">'.
                    '<div class="card-body">'.
                        '<h5 class="card-title">'. $course['name'] .'</h5>'.
                        '<p class="card-text">Profesor: <b>' . $course['teacher'] . '</b> </p>'.
                        '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'.
                        $button.
                    '</div>'.
                '</div>'.
              '</div>';

    return $result;
}