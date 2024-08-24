<!--Formulario de Login-->
<div class="container container-form w-75 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg-white p-5 rounded">
            <h2 class="fw-bold text-center py-5">Bienvenido</h2>

            <form id="loginForm" action="#" novalidate>
                <div class="mb-4">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">
                        Por favor ingrese un correo electrónico válido.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" required minlength="6" maxlength="8">
                    <div class="invalid-feedback">
                        La contraseña debe tener entre 6 y 8 caracteres.
                    </div>
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-2">Ingresar</button>
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                </div>

                <div class="my-3 text-center">
                    <span>¿No tienes cuenta? <a href="<?php echo base_url('registrarse'); ?>">Registrarse</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // JavaScript para validar y transformar los campos del formulario de login
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

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
