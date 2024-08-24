<!-- Recuperamos datos con la función Flashdata para mostrarlos -->
<?php if (session()->getFlashdata('success')): ?>
    <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php $validation = \Config\Services::validation(); ?>

<div class="container mt-1 mb-1 d-flex justify-content-center">
    <!-- Formulario de Registro -->
    <div class="container container-form w-75 rounded shadow bg-white text-dark">
        <div class="row align-items-stretch">
            <div class="col p-5 bg-white rounded-end">
                <h2 class="fw-bold text-center py-5">Regístrate</h2>

                <!-- Envío de datos a la ruta /enviar-form -->
                <form id="registroForm" method="post" action="<?= base_url('/enviar-form') ?>" novalidate>
                    <?php if (session()->getFlashdata('fail')): ?>
                        <div class='alert alert-danger'>
                            <?= session()->getFlashdata('fail') ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" value="<?= old('nombre') ?>" placeholder="Nombre">
                        <?php if ($validation->getError('nombre')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('nombre'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input id="apellido" name="apellido" type="text" class="form-control" value="<?= old('apellido') ?>" placeholder="Apellido">
                        <?php if ($validation->getError('apellido')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('apellido'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input id="usuario" name="usuario" type="text" class="form-control" value="<?= old('usuario') ?>" placeholder="Usuario">
                        <?php if ($validation->getError('usuario')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('usuario'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="pass" class="form-label">Contraseña:</label>
                        <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 5 caracteres)">
                        <?php if ($validation->getError('pass')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('pass'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input id="email" name="email" type="email" class="form-control" value="<?= old('email') ?>" placeholder="correo@algo.com">
                        <?php if ($validation->getError('email')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('email'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Guardar" class="btn btn-success">
                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>

                    <div class="my-3 text-center">
                        <span>¿Ya tienes cuenta? <a href="<?= base_url('login'); ?>">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript para validar y transformar los campos del formulario
    document.getElementById('registroForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Transformar nombre y apellido a mayúsculas
        var nombreInput = document.getElementById('nombre');
        var apellidoInput = document.getElementById('apellido');
        nombreInput.value = nombreInput.value.toUpperCase();
        apellidoInput.value = apellidoInput.value.toUpperCase();

        // Validar correo electrónico
        var emailInput = document.getElementById('email');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            emailInput.classList.add('is-invalid');
            return;
        }

        // Mostrar contraseña como asteriscos
        var passwordInput = document.getElementById('pass');
        if (passwordInput.value.length >= 5) {
            passwordInput.value = '*'.repeat(passwordInput.value.length);
        } else {
            passwordInput.classList.add('is-invalid');
            return;
        }

        // Envío del formulario si todo está correcto
        this.submit();
    });
</script>
