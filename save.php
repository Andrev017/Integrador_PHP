<?php

include("db.php");

if (isset($_POST['save_crud'])){
    /* MENSIONAR LOS NAME DEL INDEX */
    $title = $_POST['email'];
    $description = $_POST['name'];


    $query = "INSERT INTO users(email, name) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Guardado Fallido");
    }

    $_SESSION['mesaje'] = 'Guardado';
    $_SESSION['menssge_type'] = 'success';

    header("Location: crud.php");
}

?>