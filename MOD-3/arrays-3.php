<?php
    $menu = ['Inicio', 'Cursos', 'Mi perfil']; // Array en forma de Lista

    $user = [
        'nombre' => 'Carlos',
        'apellido' => 'Hernández',
        'edad' => 28,
        'username' => 'CarlosH',
        'intereses' => ['Desarrollador web', 'Desarrollador de videojuegos']
    ]; // Array en forma de Mapa

    // $cursos = ['Curso de PHP', NULL];
    $cursos = ['Curso de PHP', 'Curso de HTML', 'Curso de Javascript'];
    // var_dump($cursos);
    // var_dump(empty($cursos)); // está vacío
    // var_dump(!empty($cursos));
    // var_dump(isset($cursos[1])); // existe o el valor es null
    // var_dump(isset($cursos[0]));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>empty() e isset()</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><?php echo $menu[0]; ?></li>
                <li><?php echo $menu[1]; ?></li>
                <li><?php echo $menu[2]; ?></li>
            </ul>
        </nav>

        <h1>Bienvenido, <?php echo $user['username']; ?></h1>
        <h2>Éstos son tus datos: </h2>
        <p>Nombre y Apellido: <?php echo $user['nombre'] . ' ' . $user['apellido']; ?></p>
        <p>Intereses: </p>
            <ul>
                <li><?php echo $user['intereses'][0]; ?></li>
                <li><?php echo $user['intereses'][1]; ?></li>
            </ul>

        <h2>Mis cursos</h2>
        <!-- Si (NO está vacío el array) -->
        <?php if( !empty($cursos) ): ?> <!-- determina si una variable está vacía -->
            <ul>
                <li><?= $cursos[0]; ?></li> <!-- sintaxis corta de echo y php -->

                <!-- Si (existe el indice 1) -->
                <?php if( isset($cursos[1]) ): ?> <!-- determina si la varible está definida y no es NULL -->
                    <li><?= $cursos[1]; ?></li>
                <?php endif; ?>

                <?php if( isset($cursos[2]) ): ?>
                    <li><?= $cursos[2]; ?></li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </body>
</html>