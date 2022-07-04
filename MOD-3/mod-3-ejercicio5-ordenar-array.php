<?php
    /* Ejercicio 5 (ordenar el array)
    Copia y pega el ejercicio del vídeo anterior en un nuevo documento (mod-3-ejercicio-5.php):
    Continuando con la estructura if que escribiste en el ejercicio anterior donde preguntamos si
    existe en el array el valor “Programación”, agrega un else en donde se muestran todos los
    hobbies ordenados teniendo en cuenta los siguientes criterios:
        1.por valor
        2.alfabéticamente
        3.Sin mantener la asociación
        4.y de bajo a alto
    Comprueba que ésto funcione quitando el valor “programación” del array de la clave “hobbies”
    e imprimiendo el resultado con var_dump()
    El resultado debería ser como el siguiente:

        Bienvenido azulUser
            array(3) {
                [0]=>
                string(7) "Ajedrez"
                [1]=>
                string(6) "Correr"
                [2]=>
                string(7) "Lectura"
            }
    */
    $usuario = [
        'username' => 'azulUser',
        // 'username' => NULL,
        'password' => '1234abcd',
        // 'hobbies' => ['Lectura', 'Correr', 'Ajedrez', 'Programación']
        'hobbies' => ['Lectura', 'Correr', 'Ajedrez']
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Empty e Isset</title>
    </head>
    <body>
        <?php if( !empty($usuario) ): ?>
            <?php if( isset($usuario['username']) && isset($usuario['password']) ): ?>
                <p>Bienvenido <?= $usuario['username']?></p>
                <?php if (in_array('Programación', $usuario['hobbies'])): ?>
                    <p>Uno de mis pasatiempos favoritos es la <?= $usuario['hobbies'][3]?></p>
                    <?php else: ?>
                        <?php sort($usuario['hobbies']); var_dump($usuario['hobbies']); ?>
                <?php endif; ?>
                <?php else: ?>
                <p>Este usuario no existe o es incorrecto</p>
            <?php endif; ?>
        <?php endif; ?>
    </body>
</html>

