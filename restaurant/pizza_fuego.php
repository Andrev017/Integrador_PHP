<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plaza Linconl</title>

    <link rel="stylesheet" href="../css/list_compras.css"> 
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="../css_rest/ensartados.css">
    

    <!--ICONO DE LA PAGINA-->
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
                <li><a href="../restaurant/sucursales_pizza.php">Sucursales</a></li>
                <li><a id="myButton">Ver compra</a></li>
            </ul>
        </nav>

    </header>
    <div>
        <section class="nom_inicio">
            <h1>
                Pizza Fuego 
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

        <button >
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



    <!-------------------------------------------------------------------------------------------------------------->

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <br>
                <h1>Pizza jamón con queso</h1>

                <img class="han" src="../img/pizza/pizzajamon-queso_1.png" alt="">
<style>
.han{
    width:300px;
    height:300px;
}
.han:hover{
    transform: scale(1.05);
}
</style>
                <p>Pizza familiar de 8 porciones a 50bs.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>

            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <br>
                <h1>Pizza Hawaina</h1>
                <img class="han" src="../img/pizza/pizza-hawaiana.jpg" alt="">
                <p>Pizza familiar de 8 porciones a 50bs.</p>

                <a  href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <br>
                <h1>Pizza Jamon y champiñones</h1>

                <img class="han" src="../img/pizza/champiñones.jpg" alt="">

                <p>Pizza familiar de 8 porciones a 50bs.</p>

                <a href="#" class="btn btn-primary">Añadir al carrito</a>
    
            </div>
            </div>
        </div>

        <br>

        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <br>
                <h1>Pizza jamon con choclitos</h1>
                <p>Pizza familiar de 8 porciones a 50bs.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>

            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <br>
                <h1>Pizza salame</h1>
                <p>Pizza familiar de 8 porciones a 50bs.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <img src=" " alt="">
                <br>
                <h1>Pizza vegetariana</h1>
                <p>Pizza familiar de 8 porciones a 50bs.</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Añadir a la compra
                    </label>
                </div>
            </div>
            </div>
        </div>

        <br>


    </div>
</body>
</html>