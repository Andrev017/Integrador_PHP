<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plaza Linconl</title>


    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="../css_rest/ensartados.css">
    <link rel="stylesheet" href="../css/list_compras.css"> 

    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">

</head>
<body>
<header class="header">
        <div class="logo">
            <div class="btn">
                <a href="../index.php">
                    <img src="/img/logo_plaza.png" alt="Logo del Proyecto">
                </a>
                </button>
            </div>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="menu.php">Menú</a></li>
                <li><a href="../restaurant/promociones_ens.php">Promociones</a></li>
                <li><a href="../restaurant/sucursales_ensartados.php">Sucursales</a></li>
                <li><a id="myButton">Ver compra</a></li>
            </ul>
        </nav>

    </header>
    <div>
        <section class="nom_inicio">
            <h1>
                Ensartados  
            </h1>
        </section>
    </div>
    <br>


    <!---------------------------------------------------------------------------------------------------------------->

    <div id="myModal" class="modal">
    <div id="modales" class="modal-contenido">
        <span class="close">&times;</span>
        <h2>Todos tus pedidos</h2>
        <p>El monto a pagar es:</p>

        <button class="btn_ver_comprar">
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
    modal.style.display = "flex";
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
    

    <!-------------------------------------------------------------------------------------------------------------->
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="../img/ensartados/menu1d.jpg" alt="">
                <br>
                <h1>Corte Argentino</h1>
                <p>75 Bs, con dos porciones a elección.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="../img/ensartados/menu2d.jpg" alt="">
                <br>
                <h1>Tira de Lomo</h1>
                <p>55 Bs, con dos porciones a elección.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="../img/ensartados/menu3d.jpg" alt="">
                <br>
                <h1>Bife Chorizo</h1>
                <p>60 Bs, con dos porciones a elección.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>

        <br>

        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="../img/ensartados/menu4d.jpg" alt="">
                <br>
                <h1>Mix Churrasco</h1>
                <p>100 Bs, con pollo, chorizo, brochetas.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <br>
                <h1>Pacú a la parrilla</h1>
                <p>70 Bs, solo los dias miercoles.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <br>
                <h1>Brochetas a la parrilla</h1>
                <p>3 x 50 Bs, solo los fin de semanas.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>

        <br>


    </div>
</body>
</html>