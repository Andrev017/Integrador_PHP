<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password, name FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lincoln</title>
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="img/logo_plaza.png" alt="">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="/restaurantes.php">Restaurantes</a></li>
                <li><a href="/crud.php">Registro</a></li>
            </ul>
        </nav>

        <?php if (!empty($user)) : ?>
            <br class="mensaje"> Bienvenido <?= $user['name']; ?>

            <a href="logout.php" class="logout">
                Cerrar Sesión
            </a>
        <?php else : ?>
            <a href="login.php" class="btn"><button>Iniciar Sesión</button></a>

        <?php endif; ?>
    </header>


    <section class="content_1">
        <div class="texto_content">
            <h2>
                La mejor plaz de comidas de Cochabamba!!!

            </h2>
            <P> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit,
                quos blanditiis sapiente qui repellendus accusamus tempora porro
                recusandae ut atque fugiat sit modi, sequi perferendis neque similique
                maxime maiores incidunt?
            </P>
        </div>
        <div  class="imge_1">
            <img class="img_1" src="https://images.pexels.com/photos/1893568/pexels-photo-1893568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>

    </section>


    <section id="map-container">
        <br>
        <br>
            <h1 class="nom_map">
                Encuentranos en la siguiente ubicación
            </h1>
        <br>
        <br>
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.265714938877!2d-66.17320556889213!3d-17.36896069171965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e3753a69106273%3A0x1be122e90b748a0c!2sLincoln%20-%20Plaza%20de%20Comidas!5e0!3m2!1ses!2sbo!4v1683313698335!5m2!1ses!2sbo" 
            width="900" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
        <div class="publicidad">
            <h1>Descarga nuestra palicación móvil</h1>
            <br>
            <h3>
                Nuestros números de referencia <br>
                Gerente: 4578565 <br>
                Soprote: 67896456 <br>
                Sucursal Central: 67562658 <br>
            </h3>
        </div>
    </section>









    <footer class="pie_pagina">

        <p>Bolivia &copy;2023</p>

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


</body>

</html>