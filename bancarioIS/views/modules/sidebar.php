<aside class="main-sidebar sidebar-light-warning elevation-4">

    <!-- Brand Logo -->
    <div class="top-centered-link">
        <a href="/" class="brand-link navbar-warning">
            <img src="views/assets/img/template/CREDISBANK-LOGO.png" height="150" width="200">
            <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="<?php echo TemplateController::returnImg($_SESSION["admin"]->id_user, $_SESSION["admin"]->picture_user, $_SESSION["admin"]->method_user) ?>"
                    class="img-circle elevation-2" alt="User Image">

            </div>
            <div class="info">
                <a href="moduloPerfil" class="d-block "><?php echo $_SESSION["admin"]->displayname_user ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- 
                <li class="nav-item">
                    <a href="/" class="nav-link <?php if (empty($routesArray)): ?>active<?php endif ?>">
                        <i class="fas fa-id-badge"></i>
                        <p>
                            Perfil
                        </p>
                    </a>
                </li>
                -->

                <li class="nav-item">
                    <a href="/"
                        class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "cuenta"): ?>active<?php endif ?>">
                        <i class="fas fa-address-book"></i>
                        <p>
                            Cuentas
                        </p>
                    </a>
                </li>

                <!-- --- Lista para Menu Tarjetas --- -->
                <li
                    class="nav-item has-treeview <?php if (!empty($routesArray) && in_array($routesArray[1], ["fechaCorte", "detalleTarjeta", "cambioPin", "bloqueoTemporal"])): ?>menu-open<?php endif ?>">
                    <a
                        class="nav-link <?php if (!empty($routesArray) && in_array($routesArray[1], ["fechaCorte", "detalleTarjeta", "cambioPin", "bloqueoTemporal"])): ?>active<?php endif ?>">
                        <i class="fas fa-id-card"></i>
                        <p>
                            Tarjeta
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <!-- Consulta de Fecha de Corte -->
                        <li class="nav-item">
                            <a href="fechaCorte"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "fechaCorte"): ?>active<?php endif ?>">
                                <i class="far fa-calendar-alt"></i>
                                <p>
                                    Fecha de Corte
                                </p>
                            </a>
                        </li>

                        <!-- Obtener Detalle de la Tarjeta -->
                        <li class="nav-item">
                            <a href="detalleTarjeta"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "detalleTarjeta"): ?>active<?php endif ?>">
                                <i class="fas fa-info-circle"></i>
                                <p>
                                    Detalle Tarjeta
                                </p>
                            </a>
                        </li>

                        <!-- Cambio de Pin -->
                        <li class="nav-item">
                            <a href="cambioPin"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "cambioPin"): ?>active<?php endif ?>">
                                <i class="fas fa-unlock-alt"></i>
                                <p>
                                    Cambio Pin
                                </p>
                            </a>
                        </li>

                        <!-- Bloqueo Temporal -->
                        <li class="nav-item">
                            <a href="bloqueoTemporal"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "bloqueoTemporal"): ?>active<?php endif ?>">
                                <i class="fas fa-lock"></i>
                                <p>
                                    Bloqueo Temporal
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- --- Lista para Menu Consultas --- -->
                <li
                    class="nav-item has-treeview <?php if (!empty($routesArray) && in_array($routesArray[1], ["estadoCuenta", "consultaSaldo", "consultaConsumo"])): ?>menu-open<?php endif ?>">
                    <a
                        class="nav-link <?php if (!empty($routesArray) && in_array($routesArray[1], ["estadoCuenta", "consultaSaldo", "consultaConsumo"])): ?>active<?php endif ?>">
                        <i class="fas fa-list-alt"></i>
                        <p>
                            Consultas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <!-- Consulta de Estado de Cuenta -->
                        <li class="nav-item">
                            <a href="estadoCuenta"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "estadoCuenta"): ?>active<?php endif ?>">
                                    <i class="fas fa-file-invoice"></i>
                                <p>
                                    Estado de Cuenta
                                </p>
                            </a>
                        </li>

                        <!-- Consulta de Saldos -->
                        <li class="nav-item">
                            <a href="consultaSaldo"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "consultaSaldo"): ?>active<?php endif ?>">
                                    <i class="fas fa-balance-scale"></i>
                                <p>
                                    Consulta de Saldos
                                </p>
                            </a>
                        </li>

                        <!-- Consulta de Consumos -->
                        <li class="nav-item">
                            <a href="consultaConsumo"
                                class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "consultaConsumo"): ?>active<?php endif ?>">
                                    <i class="fas fa-shopping-bag"></i>
                                <p>
                                    Consulta de Consumos
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- --- Pagos --- -->
                <li class="nav-item">
                    <a href="pagos"
                        class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "pagos"): ?>active<?php endif ?>">
                        <i class="fas fa-money-check"></i>
                        <p>
                            Pagos
                        </p>
                    </a>
                </li>

                <!-- --- Solicitudes --- -->
                <li class="nav-item">
                    <a href="solicitudes"
                        class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "solicitudes"): ?>active<?php endif ?>">
                        <i class="fas fa-money-check"></i>
                        <p>
                        Solicitudes
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/messages"
                        class="nav-link <?php if (!empty($routesArray) && $routesArray[1] == "messages"): ?>active<?php endif ?>">
                        <i class="fas fa-inbox"></i>
                        <p>
                            Messages

                            <?php if ($totalMessage > 0): ?>

                                <span class="badge badge-danger right"><?php echo $totalMessage ?></span>

                            <?php endif ?>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>