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
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Tipo de Cuentas</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body table-responsive">
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
                                            <button type="button" rel="tooltip" title="Editar Estado" class="btn btn-success btn-link btn-sm">
                                                <i class="material-icons">check</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Editar Estado" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
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