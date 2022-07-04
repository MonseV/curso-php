<?php
    /* Ejercicio 4 (buscar en el array)
    Copia y pega el ejercicio del vídeo anterior(Buscando en arrays en un nuevo documento (mod-3-ejercicio-4.php):
    Al arreglo usuario agrega una clave más llamada “hobbies” la cual tendrá como valor un array
    en forma de lista, como se muestra aquí:
        $usuario = [
            “username” => “azulUser”,
            “password” => “1234abcd”,
            “hobbies” => [“Lectura”, “Correr”, “Ajedrez”, “Programación”]
        ];
    Dentro del segundo if que escribiste en el ejercicio anterior donde se comprueba que
    “username” y “password” existen, escribe otro if que pregunte mediante la función in_array
    si existe el valor “Programación” en el array de la clave “hobbie”, si el valor existe, crea un párrafo
    y muestra mensaje como el siguiente: Uno de mis pasatiempos favoritos es la Programación.
    */

    $usuario = [
        'username' => 'azulUser',
        // 'username' => NULL,
        'password' => '1234abcd',
        'hobbies' => ['Lectura', 'Correr', 'Ajedrez', 'Programación']
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Buscar en el Array</title>
    </head>
    <body>
        <?php if( !empty($usuario) ): ?>
            <?php if( isset($usuario['username']) && isset($usuario['password']) ): ?>
                <p>Bienvenido <?= $usuario['username']?></p>
                <?php if (in_array('Programación', $usuario['hobbies'])): ?>
                    <p>Uno de mis pasatiempos favoritos es la <?= $usuario['hobbies'][3]?></p>
                <?php endif; ?>
                <?php else: ?>
                <p>Este usuario no existe o es incorrecto</p>
            <?php endif; ?>
        <?php endif; ?>
    </body>
</html>