<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Señales</title>

    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/22fda553b5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/señales.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="btn">
                <a href="index.php">
                    <img src="/img/logo.png" alt="Logo del Proyecto">
                </a>
                </button>
            </div>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="listado.php">Listado</a></li>
                <li><a href="crud.php">Crud</a></li>
                <li><a href="señales.php">Señales de Alerta</a></li>
            </ul>
        </nav>

        <?php if (!empty($user)) : ?>
            <br class="mensaje"> Bienvenido <?= $user['name']; ?>

            <a href="logout.php" class="logout">
                Cerrar Sesión
            </a>
        <?php else : ?>


        <?php endif; ?>
    </header>











    <footer class="pie_pagina">

        <p>Bolivia &copy;2022</p>

        <div class="logo_face">

            <a href="https://es-la.facebook.com/sarboliviacbba/">
                <img src="img/facebook-circle-logo-24.png" alt="">

        </div>
        <div class="logo_ins">
            <a href="https://www.instagram.com/sar_bolivia/?hl=es">
                <img src="img/instagram-logo-24.png" alt="">
            </a>
        </div>


    </footer>