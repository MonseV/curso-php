<?php
    // Varibles SuperGlobales
    // var_dump($_POST); // por default lo guarda en la varible POST y en un Array
    // var_dump($_GET); // lo mismo qu POST pero la diferecia es que tambien se visualiza en la URL
    // var_dump($_COOKIE); // guarda la cookie


    /* COOKIES = almacenamiento de datos en el propio navegador del usuario (del lado del cliente)
                 solo debes configurarlas si no hay salida anterior en la web (HTML, eco y otra
                 función similar que envíe alguna salida
    */
    // Solo si el formulario se ha enviado
    if( !empty( $_POST) ) {
        // 'nombre_cookie(es_el_valor_valido)','valor', fecha_de_expiracion
        // time -> retorna el tiempo actual
        // formula normal que se le da a las cookies = 30dias*24hrs*60mins*60s
        setcookie( 'username', $_POST['username'], time() + 30*24*60*60);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de bienvenida</title>
</head>
<body>
    <!-- Si el formulario se envia o no -->
    <?php if( !empty( $_POST) ): ?>
        <p>Hola y bienvenido: <?= $_POST['username'] ?></p>
        <p>Tu email es: <?= $_POST['email'] ?> </p>
    <?php else: ?>
        <p>Rayos! no tienes permiso para acceder a ésta página</p>
    <?php endif; ?>
</body>
</html>

