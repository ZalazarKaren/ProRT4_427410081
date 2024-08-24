<div class="container mt-1 mb-0">
  <center>
    <br>
    <br>
 
    <div class= "card-header text-center">
      <h3 class="titulo">Crear Usuario </h3>
    </div>
  
 <?php $validation = \Config\Services::validation(); ?>
     <form method="post" style="max-width: 60%" action="<?php echo base_url('/guardarNuevo') ?>">
 
<div class ="card-body" style=" width: 60%">
  <div class="mb-2">
   <label for="exampleFormControlInput1" class="form-label">Nombre</label>
   <input name="nombre" type="text"  class="form-control" placeholder="nombre" required="" >
     <!-- Error -->
        <?php if($validation->getError('nombre')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
        <?php }?>
  </div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
    <input type="text" name="apellido"class="form-control" placeholder="apellido" required="">
    <!-- Error -->
        <?php if($validation->getError('apellido')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
        <?php }?>
    </div>
    <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Email</label>
   <input name="email"  type="femail" class="form-control"  placeholder="correo@algo.com" required="" >
    <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
  </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Usuario</label>
   <input  tyupe="text" name="usuario" class="form-control" placeholder="usuario" required="">
   <!-- Error -->
        <?php if($validation->getError('usuario')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
        <?php }?>
  </div>
  

  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
   <input name="pass" type="pass" class="form-control"  placeholder="contraseña" required="">
   <!-- Error -->
        <?php if($validation->getError('pass')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass'); ?>
            </div>
        <?php }?>
  </div>
  
           <input type="submit" value="guardar" class="btn btn-success">
           
      
 </div>
  </center>  
</form>
<br>
<br>

</div>