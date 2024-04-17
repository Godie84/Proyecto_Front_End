<?php
include "../vista/template/cabecera.php";
include "../vista/template/nav.php";
require "../vista/template/text_title.php";
?>
<?php title_servicios(); ?>

<div class="container text-dark">

    <div class="m-5 d-flex justify-content-center align-items-center" style="min-height: 600px;">

        <div class="row">
            <h5 class="card-title text-center mb-4">Módulo administración</h5>
            <div class="col-md-6 mb-3 d-flex justify-content-center align-items-center">
                <div class="card shadow-lg bg-white rounded border-0" style="width: 18rem;">
                    <img src="../assets/img/Permisos.png" alt="..." width="180" height="auto" class="img-fluid d-block mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de usuarios</h5>
                        <p class="card-text text-center">Aquí puede registrar usuarios administradores y visitantes.</p>
                    </div>
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary">Gestionar usuarios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3 d-flex justify-content-center align-items-center">
                <div class="card shadow-lg bg-white rounded border-0" style="width: 18rem;">
                    <img src="../assets/img/Reportes.png" alt="..." width="180" height="auto" class="img-fluid d-block mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center">Regisrto de servicios</h5>
                        <p class="card-text text-center">Aquí puede realizar el registro de servicios.</p>
                    </div>
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary">Registrar servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "../vista/template/footer.php"; ?>