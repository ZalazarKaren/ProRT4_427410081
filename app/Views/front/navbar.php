<!-- navegación-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navb" style="background-color: #3EF8D6; height: 50px; padding: 0;">
  <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
    <img src="assets/img/logoP.png" class="navbar-logo" style="height: 40px; width: auto; margin-left: 10px;" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php if (session()->perfil_id == 1): ?>
    <div class="btn btn-secondary active btnUser btn-sm">
      <a href="">ADMIN: <?php echo session('nombre'); ?></a>
    </div>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('crud_usuarios');?>">CRUD Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  <?php elseif (session()->perfil_id == 2): ?>
    <div class="btn btn-info active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
    </div>
    <!-- NAVBAR PARA CLIENTES que pueden comprar -->
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quienessomos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  <?php else: ?>
    <!-- NavBar para clientes no logueados -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienessomos'); ?>" style="line-height: 50px;">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('acercaDe'); ?>" style="line-height: 50px;">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('registrarse'); ?>" style="line-height: 50px;">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login'); ?>" style="line-height: 50px;">Login</a>
        </li>
      </ul>
      <input class="form-control form-control-sm me-2 search-input" type="search" placeholder="Buscar" aria-label="Buscar" style="width: 150px;">
      <button class="btn btn-outline-light btn-sm" type="submit" style="padding: 0.25rem 0.5rem;">Buscar</button>
    </div>
  <?php endif; ?>
</nav>
