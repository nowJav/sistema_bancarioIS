<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="views/assets/img/template/PERFIL.webp"
                            alt="User profile picture" style="width: 175px; height: 175px;">
                    </div>

                    <h3 class="profile-username text-center"><?php echo $_SESSION["admin"]->displayname_user ?></h3> <!-- Muestra el nombre del usuario -->

                    <p class="text-muted text-center">Informacion Personal</p>

                    <ul class="list-group list-group-unbordered mb-3">

                        <li class="list-group-item">
                            <b>Nombre</b> <a class="float-right"><?php echo $_SESSION["admin"]->displayname_user ?></a>
                        </li>

                        <li class="list-group-item">
                            <b>CUI</b> <a class="float-right"><?php echo $_SESSION["admin"]->cui_user ?></a>
                        </li>

                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right"><?php echo $_SESSION["admin"]->email_user ?></a>
                        </li>

                        <li class="list-group-item">
                            <b>Telefono</b> <a class="float-right"><?php echo $_SESSION["admin"]->phone_user ?></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
