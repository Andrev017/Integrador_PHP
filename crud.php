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
    <title>Pedidos</title>
    <link rel="stylesheet" href="css/crud.css">

</head>
<body>
    <!--div class="logo">
                <img src="/img/logo_plaza.png" alt="">
            </!--div>
            <nav>
                <ul class="nav-links">
                    <li><a href="./categorias.php">Menú</a></li>
                    <li><a href="/categorias.php">Restaurantes</a></li>
                    <li><a href="/crud.php">Pedidos</a></li>


                </ul>
            </nav>
        </div-->
</body>
</html>


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
                    <div class="h3">
                        <h3>Restaurantes</h3>
                    </div>
                    <div class="form-grup">
                        <input type="text" name="email" class="form-control" placeholder="Correo" autofocus>
                    </div>

                    <div class="form-grup">
                        <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="save_crud" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Modificar</th>
                        <!--th>Apellido</!--th>
                        <th>Fecha</th>
                        <th>Especilidad</th>
                        <th>Telefono</th>
                        <th-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /* NOMBRAR LA TABLA */
                    $query = "SELECT * FROM users";
                    $result_crud = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_crud)) { ?>
                        <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['name']; ?></td>

                            <td>
                                <a href="edit.php" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>




<?php

require 'includes/footer.php';
?>