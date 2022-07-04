<!-- mensaje de bienvenida al usuario por medio de la cookie -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <!-- Validar que la cookie existe(no esta vacia) y si el array cookie contiene la llave username -->
    <?php if( !empty( $_COOKIE ) && isset( $_COOKIE['username'] ) ): ?>
        <h1>Bienvenido: <?= $_COOKIE['username']; ?></h1>
    <?php else: ?>
        <a href="./form.html">Registro de usuario</a>
    <?php endif; ?>
</body>
</html>