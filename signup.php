<?php
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])/* && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['fecha']) && !empty($_POST['escpecialidad']) && !empty($_POST['telefono'])*/) {
    $sql = "INSERT INTO users (email, password, name) VALUES (:email, :password, :name)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $_POST['name']);

    /*    CREAR UN ESTILO */
    /*
    if ($stmt->execute()) {
        $message = 'Se creo un usurio';
    } else {
        $message = 'Error, no se creo un usurio';
    }*/

    if ($stmt->execute()) {
        $message = 'Usuario creado';
    } else {
        $message = 'Lo sentimos hay un Error';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>


<body>
    <?php if (!empty($message)) : ?>
        <p type="submit" class="mensaje"> <?= $message ?></p>
    <?php endif; ?>

    <div class="container">
        <h1>Registrarte</h1>
        <span>o <a href="login.php" class="inicio">Inicio de Sesion</a></span>
        <form action="signup.php" method="POST">

            <div class="form-control">

                <input name="email" type="text" placeholder="Correo">

                <input name="password" type="password" placeholder="Contraseña">

                <input name="name" type="text" placeholder="Nombre">
            </div>
            <input type="submit" value="Registrar" class="btn">
            <div>
                </br>
                <a href="index.php">Salir</a>
            </div>
        </form>
    </div>
</body>
</html>