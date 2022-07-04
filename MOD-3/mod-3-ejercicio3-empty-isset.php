<?php
    /* Ejercicio 3 (empty e isset)
    Éste ejercicio es de vital importancia debido a que los ejercicios subsecuentes se derivan de éste.
    Vamos a escribir todo un script empleando todo lo que hemos y vayamos aprendiendo durante el
    resto del módulo.

        Crea un nuevo documento PHP (mod-3-ejercicio-3.php) y agrega la estructura básica HTML5.
        Define el siguiente array:
            $usuario = [
                “username” => “azulUser”,
                “password” => “1234abcd”
            ];
        en el body escribe un bloque if que pregunte si $usuario NO está vacío (mediante la función empty)
        dentro del bloque if, escribe otro bloque if que pregunte si existen valores para las claves
        “username” Y ”password” y si la condición resulta true entonces imprime un mensaje de
        bienvenida al usuario mostrando su username SINO imprime un mensaje: Este usuario no existe o
        es incorrecto
        Cuando pruebes por primera vez debería mostrar el mensaje de Bienvenida para el usuario.
        Después prueba cambiando el valor de una de las dos claves a NULL y vuelve a probar, ahora
        debería mostrar el mensaje de “error”
    */

    $usuario = [
        // 'username' => 'azulUser',
        'username' => NULL,
        'password' => '1234abcd'
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
                <?php else: ?>
                    <p>Este usuario no existe o es incorrecto</p>
            <?php endif; ?>
        <?php endif; ?>
    </body>
</html>