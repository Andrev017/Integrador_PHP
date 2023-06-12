<?php

include('db.php');
require 'includes/header.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    <link rel="stylesheet" href="./css/restaurantes.css">
</head>
<body>



    <div>
        <section class="nom_inicio">
            <h1>
                Conoce todas nuestros restaurantes
            </h1>
        </section>
    </div>
    <br>
    


<!-------------------------------------------------------------------------------------------------------->

<div class="row">
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/pizza_fuego.jpg" alt="">
                <br>
                <h1>Pizza Fuego</h1>
                <p>Todos los dias hay promoción de 2x1 a 90bs.</p>
                <a href="./restaurant/pizza_fuego.php" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/ensartados.png" alt="">
                <br>
                <h1>Ensartados</h1>
                <p>Variedad de carnes de a la parrilla, con un bufet de ensaladas a elección del cliete</p>
                <a href="./restaurant/ensartados.php" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/sillpancho/sillpancho_icono.png" alt="">
                <br>
                <h1>Gato Pancho Sillpancho</h1>
                <p>Promo super amigos, 2 super silpanchos a 39bs</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>

        <br>

        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/pollo/luky_chiken_icono.png" alt="">
                <br>
                <h1>Lucky Chicken</h1>
                <p> Promo super amigos, 2 super silpanchos a 39bs.</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/sushi/sushi_icono.jpg" alt="">
                <br>
                <h1>Komi Sushi</h1>
                <p>70 Bs, solo los dias miercoles.</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/el_gordito/el_gordito_icono.png" alt="">
                <br>
                <h1>El Gordito</h1>
                <p>Pique Macho 2x1 todos los lunes.</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>

        <br>

        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="./img/la_pecera/la_pecerita_icono.png" alt="">
                <br>
                <h1>La pecerita de la Angostura</h1>
                <p>Pique Macho 2x1 todos los lunes.</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
            </div>
        </div>


<!--------------------------------------------------------------------------------------------------------------->


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
