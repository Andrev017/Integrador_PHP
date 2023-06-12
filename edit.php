<?php
include("db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM registro WHERE id_registro = $id";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        echo 'tu puedes editar';
        $title = $row['email'];
        $description = $row['name'];
    }
}
?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">

                <form action="crud.php" method="POST">

                    <div class="form-group">
                        <input name="email" type="text" class="form-control" value="<?php /*echo $title; */ ?>" placeholder="Correo">
                    </div>

                    <div class="form-group">
                        <input name="name" type="text" class="form-control" value="<?php /*echo $description; */ ?>" placeholder="Nombre">
                    </div>

                    <button class="btn btn-success" name="update">

                        Actualizar
                    </button>
                    <!--a href="index.php" class="btn-success" name="update"><button>Actualizar</button></!--a-->
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>