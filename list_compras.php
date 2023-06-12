<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/list_compras.css">
</head>
<body>
    
</body>
</html>

<button id="myButton">Abrir ventana modal</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>¡Ventana modal!</h2>
        <p>Este es el contenido de la ventana modal.</p>
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