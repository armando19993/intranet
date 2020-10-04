<?php
$pagina = "Hinchas de Neflix";
$id_pagina = "1"; //Inicio
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
                  <h4 class="card-title">Cuentas que se Vencen Hoy</h4>
                  <p class="card-category">Listado de cuentas que debes cortar!</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Cliente</th>
                      <th>Cuenta</th>
                      <th>Acciones</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
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