<?php
include "../vista/template/cabecera.php";
include "../vista/template/nav.php";
require "../vista/template/text_title.php";
?>
<?php title_acceso(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card shadow rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body p-md-5 mx-md-4">
                                <h5 class="card-title text-center">Login</h5>

                                    <div class="text-center mb-4">
                                        <img src="../assets/img/Logotipo.png" style="width: 180px; height: 40px;" alt="logo de empresa">
                                        <br><br>
                                    </div>
                                    <form id="form-login" action="validar.php" method="POST">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" autocomplete="off" required />
                                            <label class="form-label" for="form2Example11"></label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" required require="" />
                                            <label class="form-label" for="form2Example22"></label>
                                        </div>
                                        <?php
                                        if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                                            echo "<div class='alert alert-danger' role='alert'>Usuario o contraseña invalido </div>";
                                        }
                                        ?>
                                        <?php
                                        if (isset($_GET["user_fallo"]) && $_GET["user_fallo"] == 'true') {
                                            echo "<div class='alert alert-danger' role='alert'>¡Lo sentimos, este usuario no tiene acceso! </div>";
                                        }
                                        ?>

                                        <div class="text-center pt-1 mb-1 pb-1">
                                            <button type="button" id="entrar" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-sm">Log in</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center">
                                        </div>
                                    </form>
                                    <script src="./assets/js/validacion_login.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "../vista/template/footer.php"; ?>