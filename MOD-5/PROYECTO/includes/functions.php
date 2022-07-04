<?php

    // Funcion que imprime los cursos
    function printCourse( $course ) {
        $result =
                    '<div class="col-3 my-4">'.
                        // Cards Bootstrap
                        '<div class="card m-auto" style="width: 18rem;">'.
                            '<img src="./images/'.$course['featured'].
                                  '"class="card-img-top"
                                  alt="...">'.
                            '<div class="card-body">'.
                                '<h5 class="card-title">'.
                                    $course['name'].
                                '</h5>'.
                                '<p class="card-text">
                                    Profesor:
                                        <b>'.
                                            $course['teacher'].
                                        '</b>
                                </p>'.
                                '<p class="card-text">
                                    Some quick example text to build on the card title and
                                    make up the bulk of the card\'s content.
                                </p>'.
                                '<a href="#" class="btn btn-primary">
                                    Go somewhere
                                </a>'.
                            '</div>'.
                        '</div>'.
                    '</div>';

        return $result;
    }