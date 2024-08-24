<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet"> <!-- Enlace a la hoja de estilo externa -->
    <style>
        .carousel-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .image-grid img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Carrusel de imágenes -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/plantitas.png" class="d-block w-100" alt="Imagen 1">
    </div>
    <div class="carousel-item">
      <img src="assets/img/plantitas2.png" class="d-block w-100" alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/plantitas3.png" class="d-block w-100" alt="Imagen 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Contenido principal -->
<div class="container mt-5">
  <div class="header mb-4 text-center">
    <h1 class="titulo">Venta de Hierbas Naturales</h1>
  </div>
  
  <div class="section">
    <p>
      Plantitas es una pequeña y dinámica empresa dedicada a la venta de hierbas medicinales completamente 
      naturales y ecológicas. Fundada con la visión de promover un estilo de vida saludable y sostenible, 
      tanto a la naturaleza como a nuestros clientes.
    </p>
    <p>
      Creemos firmemente en el poder curativo de las plantas y en la importancia de mantener prácticas 
      agrícolas responsables. Todas nuestras hierbas son cultivadas sin el uso de pesticidas ni fertilizantes químicos, 
      asegurando así que cada hoja, raíz o flor conserve sus propiedades terapéuticas originales. 
    </p>
  </div>
</div>

<!-- Galería de imágenes -->
<div class="container mt-5">
    <div class="row image-grid">
        <!-- Primera fila -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/Tomillo.jpg" class="border rounded" alt="Imagen 1">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/calendula.jpg" class="border rounded" alt="Imagen 2">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/malva.jpg" class="border rounded" alt="Imagen 3">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/regaliz.jpg" class="border rounded" alt="Imagen 4">
        </div>

        <!-- Segunda fila -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teAlbahaca.jpg" class="border rounded" alt="Imagen 5">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teMenta.jpg" class="border rounded" alt="Imagen 6">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teEucalipto.jpg" class="border rounded" alt="Imagen 7">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teCilantro.jpg" class="border rounded" alt="Imagen 8">
        </div>

        <!-- Tercera fila -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teJengibre.jpg" class="border rounded" alt="Imagen 9">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teCanela.jpg" class="border rounded" alt="Imagen 10">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teManzanilla.jpg" class="border rounded" alt="Imagen 11">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <img src="assets/img/teTilo.jpg" class="border rounded" alt="Imagen 12">
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
