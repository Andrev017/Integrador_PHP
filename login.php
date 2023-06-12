<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    /* COMPARAR CONTRASEÑA DEL USUARIO Y LA BD*/
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        /* REDIRECCIONAR */
        //require('index.php');
        header('Location: index.php');
    } else {
        $message = 'Error, la contraseña es incorrecta';
    }
}

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="css/inicio_sesion.css">

</head>

<body>

    <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
    <?php endif; ?>


    <div class="container">
        <h1>Inicio Sesión</h1>


        <form action="login.php" method="POST">
            <div class="form-control">
                <input name="email" type="text" placeholder="Correo">
                <input name="password" type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Enviar" class="btn">
            <br>
            <br>
            <span> No estoy registrado <a href="signup.php"> Registrarse</a></span>

        </form>
    </div>

    
</body>

</html>