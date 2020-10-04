

<div class="sidebar" data-color="purple" data-background-color="azure" data-image="assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Hinchas de Neflix
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php if($id_pagina == 1){ echo "active"; } ?>  ">
                <a class="nav-link" href="index.php">
                    <i class="material-icons">dashboard</i>
                    <p>Inicio</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">person</i>
                    <p>Clientes</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Cuentas</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>Renovaciones Mañana</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Renovaciones Hoy</p>
                </a>
            </li>

            <li class="nav-item <?php if($id_pagina == 2){ echo "active"; } ?> ">
                <a class="nav-link" href="tipo_cuentas.php?action=list">
                    <i class="material-icons">language</i>
                    <p>Tipos de Cuentas</p>
                </a>
            </li>

        </ul>
    </div>
</div>