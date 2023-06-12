<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>

    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/22fda553b5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/lista.css">
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



    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span aria-hidden="true">&times;</span>
                    </div>
                <?php session_unset();
                } ?>

                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-grup">
                            <input type="text" name="email" class="form-control" placeholder="Emergencia" autofocus>
                        </div>

                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Descripción"></textarea>
                        </div>

                        <input type="submit" class="btn btn-success btn-block" name="save_crud" value="Guardar">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Emergencia</th>
                            <th>Descripción</th>
                            <th>Modificar</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="edit.php" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>






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