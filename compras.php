
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="./css/compras.css">
    <title>Plaza Linconl</title>

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
                <li><a href="restaurantes.php">Restaurantes</a></li>
            </ul>
        </nav>

    </header>

    <br>
    <br>
    <br>

    <h1>Verifique sus compras</h1>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Last</th>
            <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>35</td>
            </tr>
            <!------------------------------------------------------->
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>15</td>
            </tr>
            <!------------------------------------------------------->
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bd</td>
            <td>55</td>
            </tr>
            <!------------------------------------------------------->
            <tr>
            <th scope="row">Total</th>
            <td colspan="2"></td>
            <td>110</td>
            </tr>
        </tbody>
    </table>



    <br>
    <br>

    <a href="./restaurant/pizza_fuego.php" class="btn btn-danger">Salir</a>
    <a href="#" class="btn btn-primary">comprar</a>
    <!--boton de facturación-->

</body>
</html>