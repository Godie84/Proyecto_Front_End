<?php
include "../vista/template/cabecera.php";
include "../vista/template/nav.php";
require "../vista/template/text_title.php";
?>
<?php title_contacto(); ?>


<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card shadow rounded-3 text-black p-4">
            <h5 class="card-title text-center mb-4">Formulario de contacto</h5>
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body p-md-5 mx-md-12">
                        <h5 class="card-title">Ubicación</h5>
                        <p class="card-text">Calle 159A # 55 - 61.</p>
                        <p class="card-text">Bogotá.</p>
                        <h5 class="card-title">Síguenos</h5>
                        <div class="social-icons">
                            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                            <div class="elfsight-app-2c832636-2b49-45ce-b560-1626e372aaad" data-elfsight-app-lazy></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow rounded-3 text-black p-4">
                        <form action="procesar_formulario.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php include "../vista/template/footer.php"; ?>