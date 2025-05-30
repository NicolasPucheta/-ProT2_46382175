<main class="registro text-light">
    <div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="card" style="width: 100%; max-width: 800px;">
            <div class="card-header text-center">
                <h3>Registrate</h3>
            </div>
            <div class="card-body">
                    <!--Registro de nombre--> 
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="Nombre" class="form-control" id="Nombre" name="Nombre" placeholder="..." required>
                    </div>

                    <!--Registro de apellido-->
                    <div class="mb-3">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="Apellido" class="form-control" id="Apellido" name="Apellido" placeholder="..." required>
                    </div>

                    <!--Registro de nombre de usuario-->
                    <div class="mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="Usuario" class="form-control" id="Usuario" name="Usuario" placeholder="..." required>
                    </div>

                    <!--Registro de email-->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="usuario@correo.com" required>               
                    </div>

                    <!--Registro de contraseña-->
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="pass" class="form-control" id="pass" name="pass" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</main>