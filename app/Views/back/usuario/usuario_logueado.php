<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Logueado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            text-align: center; /* Centra el contenido del contenedor */
        }
        .img-center {
            display: block;
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }
        .img-large {
            height: 150px; /* Ajusta el tamaño de la imagen */
            width: 150px;  /* Ajusta el tamaño de la imagen */
        }
        .alert {
            margin: 20px auto; /* Ajusta el margen para centrar el mensaje */
            max-width: 500px; /* Ajusta el ancho máximo del mensaje */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <?php if (session()->getFlashdata('msg')): ?> 
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>

                <br><br>
                <?php if (session()->perfil_id == 1): ?>
                    <div>
                        <img class="img-center img-large" src="<?php echo base_url('assets/img/admin.png'); ?>" alt="Admin">
                    </div>
                <?php elseif (session()->perfil_id == 2): ?>
                    <div>
                        <img class="img-center img-large" src="<?php echo base_url('assets/img/cliente.png'); ?>" alt="Cliente">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
