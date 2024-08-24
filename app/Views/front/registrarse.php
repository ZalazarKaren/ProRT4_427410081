<div class="container mt-1 mb-1 d-flex justify-content-center">
    <!-- Formulario de Registro -->
    <div class="container container-form w-75 rounded shadow bg-white text-dark">
        <div class="row align-items-stretch">
            <div class="col p-5 bg-white rounded-end">
                <h2 class="fw-bold text-center py-5">Regístrate</h2>

                <form id="registroForm" action="#" novalidate>
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control custom-input" id="nombre" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su nombre.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control custom-input" id="apellido" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su apellido.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control custom-input" id="usuario" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un nombre de usuario.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control custom-input" id="password" required minlength="6" maxlength="8">
                        <div class="invalid-feedback">
                            La contraseña debe tener entre 6 y 8 caracteres.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control custom-input" id="email" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un correo electrónico válido.
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-2">Registrarse</button>
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>

                    <div class="my-3 text-center">
                        <span>¿Ya tienes cuenta? <a href="<?php echo base_url('login'); ?>">Login</a></span>
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
        var passwordInput = document.getElementById('password');
        var passwordLength = passwordInput.value.length;
        if (passwordLength >= 6 && passwordLength <= 8) {
            passwordInput.value = '******';
        } else {
            passwordInput.classList.add('is-invalid');
            return;
        }

        // Envío del formulario si todo está correcto
        this.submit();
    });
</script>
