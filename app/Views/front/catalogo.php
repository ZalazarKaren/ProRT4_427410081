<?php
// Array con datos de las hierbas medicinales
$hierbas = [
    [
        'nombre' => 'Manzanilla',
        'descripcion' => 'Ayuda a la digestión y tiene propiedades calmantes.',
        'precio' => '5.00'
    ],
    [
        'nombre' => 'Lavanda',
        'descripcion' => 'Ideal para relajación y mejorar el sueño.',
        'precio' => '6.50'
    ],
    [
        'nombre' => 'Menta',
        'descripcion' => 'Eficaz para aliviar dolores de cabeza y problemas digestivos.',
        'precio' => '4.75'
    ],
    [
        'nombre' => 'Romero',
        'descripcion' => 'Estimula la memoria y tiene propiedades antiinflamatorias.',
        'precio' => '7.00'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Hierbas Medicinales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Catálogo de Hierbas Medicinales</h1>
        <div class="row">
            <?php foreach ($hierbas as $hierba): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($hierba['nombre']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($hierba['descripcion']); ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?php echo htmlspecialchars($hierba['precio']); ?></p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
