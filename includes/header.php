<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plaza Linconl</title>

    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/22fda553b5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/crud.css">
    <link rel="stylesheet" href="./css/list_compras.css"> 

    <!--ICONO DE LA PAGINA-->
    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="btn">
                <a href="index.php">
                    <img src="/img/logo_plaza.png" alt="Logo del Proyecto">
                </a>
                </button>
            </div>
        </div>

        <nav>
            <ul class="nav-links">
                <!--li><a href="menu.php">Menú</a></!--li-->
                <li><a href="restaurantes.php">Restaurantes</a></li>
                <li><a href="crud.php">Registro</a></li>
                <li><a id="myButton">Ver compra</a></li>
            </ul>
        </nav>


    <!-------------------------------------------------------->
    <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>¡Ventana modal!</h2>
        <p>Este es el contenido de la ventana modal.</p>

        <button type="button" class="btn btn-primary">
            <a href="../compras.php">Comprar</a>
        </button>
    </div>
</div>

<script>
    // Obtener los elementos del DOM
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myButton");
    var span = document.getElementsByClassName("close")[0];

    // Abrir la ventana modal cuando se hace clic en el botón
    btn.onclick = function() {
    modal.style.display = "block";
    };

    // Cerrar la ventana modal cuando se hace clic en la 'x'
    span.onclick = function() {
    modal.style.display = "none";
    };

    // Cerrar la ventana modal cuando se hace clic fuera de ella
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    };
</script>


    <!-------------------------------------------------------->

        <?php if (!empty($user)) : ?>
            <br class="mensaje"> Bienvenido <?= $user['name']; ?>

            <a href="logout.php" class="logout">
                Cerrar Sesión
            </a>
        <?php else : ?>


        <?php endif; ?>
    </header>




