<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cuentas Disponibles</h3>
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">

                                    <!-- ---------- INICIO DE DATOS DE CUENTAS DISPONIBLES ---------- -->
                                    <div class="row">
                                        <div class="col-3">
                                            <h1>871234</h1>
                                        </div>
                                        <div class="col-6">
                                            <h1>Javier Morales</h1>
                                        </div>
                                        <div class="col-3">
                                            <h1>Q</h1>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="collapse" data-parent="#accordion">

                            <!-- ---------- INICIO DE DATOS TARJETA ---------- -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="card card-widget widget-user">
                                            <div class="widget-user-header color-target" style="position: relative;">
                                                <div>
                                                    <div style="position: absolute; top: 110px; left: 40px;">
                                                        <img src="views/assets/img/template/CHIP-TARJETA.png" alt="Chip"
                                                            style="width: 60px; height: auto;">
                                                    </div>
                                                    <div style="position: absolute; top: 20px; left: 20px;">
                                                        <img src="views/assets/img/template/SIN-CONTACTO.webp"
                                                            alt="Chip" style="width: 30px; height: auto;">
                                                    </div>
                                                </div>
                                                <h3 class="widget-user-username" style="margin-top: 50px;"><?php echo $_SESSION["admin"]->displayname_user ?></h3>
                                                <h5 class="widget-user-desc">**** **** **** 3456</h5>
                                                <div style="position: absolute; top: 0px; right: 0px;">
                                                    <img src="views/assets/img/template/CREDISBANK-LOGO.png"
                                                        alt="Bank Logo" style="width: 100px; height: auto;">
                                                </div>
                                            </div>
                                            <div class="card-footer color-target-second" style="padding-top: 50px;">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <span class="description-text">VÁLIDA DESDE</span>
                                                            <h5 class="description-header">01/22</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <span class="description-text">VÁLIDO HASTA</span>
                                                            <h5 class="description-header">12/26</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <img src="views/assets/img/template/VISA.png"
                                                                style="width: 70px; height: auto;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>

                                    <!-- ---------- INICIO DE TABLA MINI HISTORIAL  ---------- -->
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Ultimos Movimientos</h3>
                                                <div class="card-tools">
                                                    <ul class="pagination pagination-sm float-right">
                                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Descripcion</th>
                                                            <th>Fecha</th>
                                                            <th style="width: 40px">Monto</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Grocery Shopping</td>
                                                            <td>2023-06-01 10:00:00</td>
                                                            <td>100.00</td>
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
            </div>
        </div>
    </div>