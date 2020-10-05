<?php
require_once 'includes/db.php';

$pagina = "Tipo de Cuentas";
$id_pagina = "2"; //Tipo de Cuentas
$action = $_GET['action'];

$sql = mysqli_query($enlace, "SELECT * FROM tipo_cuenta");
?>
<!DOCTYPE html>
<?php require_once 'includes/header.php'?>
<body class="">
<div class="wrapper ">
    <?php require_once 'includes/barra_lateral.php'?>
    <div class="main-panel">
        <?php require_once 'includes/barra_superior.php'?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="card-header card-header-warning col-md-8    ">
                                    <h4 class="card-title">Tipo de Cuentas</h4>
                                    <p class="card-category"></p>
                                </div>

                                <div class="col-md-1">

                                </div>
                                <?php
                                if(isset($_GET['action']) && $action != "create"){
                                ?>
                                <a href="tipo_cuentas.php?action=create" class="card-header card-header-success col-md-2    ">
                                    <h4 class="card-title" style="text-align: center;">Nuevo</h4>
                                    <p class="card-category"></p>
                                </a>
                                <?php }
                                else {
                                ?>
                                <a href="tipo_cuentas.php?action=list" class="card-header card-header-danger col-md-2    ">
                                    <h4 class="card-title" style="text-align: center;">Volver</h4>
                                    <p class="card-category"></p>
                                </a>
                                <?php } ?>

                            </div>

                            <?php if($action == "list"){ ?>
                            <div class="card-body table-responsive">

                                <?php

                                //Estatus Delete
                                if(isset($_GET['state'])){
                                    if($_GET['state'] == 'delete_error'){
                                        echo "<div class='alert alert-danger' role='alert'>
                                            Error al eliminar el Tipo de Cuenta
                                        </div>";
                                    }
                                    if($_GET['state'] == 'delete_exito'){
                                        echo "<div class='alert alert-success' role='alert'>
                                            Exito al eliminar el Tipo de Cuenta
                                        </div>";
                                    }

                                    //Estatus Update
                                    if($_GET['state'] == 'update_error'){
                                        echo "<div class='alert alert-danger' role='alert'>
                                            Error al actualizar el Tipo de Cuenta
                                        </div>";
                                    }
                                    if($_GET['state'] == 'update_exito'){
                                        echo "<div class='alert alert-success' role='alert'>
                                            Exito al actualizar el Tipo de Cuenta
                                        </div>";
                                    }

                                    //Estatus Insert
                                    if($_GET['state'] == 'insert_error'){
                                        echo "<div class='alert alert-danger' role='alert'>
                                            Error al crear el Tipo de Cuenta
                                        </div>";
                                    }
                                    if($_GET['state'] == 'insert_exito'){
                                        echo "<div class='alert alert-success' role='alert'>
                                            Exito al crear el Tipo de Cuenta
                                        </div>";
                                    }
                                }



                                ?>

                                <table class="table table-hover">
                                    <thead class="text-warning">
                                    <th>ID</th>
                                    <th>Tipo de Cuenta</th>
                                    <th>Acciones</th>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($sql)){ ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['tipo'] ?></td>
                                        <td>
                                            <?php
                                            $id = $row['id'];
                                            ?>
                                            <a href="tipo_cuentas.php?action=view&id=<?= base64_encode($id) ?>" type="button" rel="tooltip" title="Editar Estado" class="btn btn-success btn-link btn-sm">
                                                <i class="material-icons">check</i>
                                            </a>
                                            <a href="tipo_cuentas.php?action=edit&id=<?= base64_encode($id) ?>" rel="tooltip" title="Editar Estado" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="controller/tipo_cuenta.php?action=delete&id=<?= base64_encode($id) ?>" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>












                            <?php if($action == "edit"){  $update = $_GET['id']; $id = base64_decode($_GET['id']);
                                $sql2 = mysqli_query($enlace, "SELECT * FROM tipo_cuenta WHERE id = '$id'");
                                $row2 = mysqli_fetch_array($sql2);
                            ?>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title">Editar</h4>
                                                <p class="card-category"></p>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="controller/tipo_cuenta.php?action=update&id=<?= $update ?>">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating"></label>
                                                                <input type="text" class="form-control" value="<?= $row2['id'] ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Tipo de Cuenta</label>
                                                                <input type="text" name="tipo" class="form-control" value="<?= $row2['tipo'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>




                            <?php if($action == "create"){
                                ?>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title">Crear</h4>
                                                <p class="card-category"></p>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="controller/tipo_cuenta.php?action=create">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Tipo de Cuenta</label>
                                                                <input type="text" name="tipo" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Crear</button>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'?>
</body>

</html>