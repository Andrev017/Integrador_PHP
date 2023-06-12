<?php
include("db.php");
    if(isset($_GET['id_registro'])){
    $id = $_GET['id_registro'];
    $query = "DELETE FROM registro WHERE id_registro = $id";

    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Consulta fallido");
    }

    $_SESSION['message'] = 'Registro Eliminado';
    $_SESSION['menssge_type'] = 'danger';

    header("Location: index.php");
    }
?>