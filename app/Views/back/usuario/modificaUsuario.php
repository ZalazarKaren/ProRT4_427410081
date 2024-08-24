<div class="container mt-1 mb-0" s>
  <br>
  <center>

      <h3 class="titulo">MODIFICAR DATOS USUARIO</h3>
 
  
 <?php $validation = \Config\Services::validation(); ?>
     <form method="post" style="max-width: 60%" action="<?php echo base_url('/update') ?>">
       <input type="hidden" name="id_usuario" id="id" value="<?php echo $old['id_usuario']; ?>">
 
<div class ="card-body" style="width: 60%">
  <div class="mb-2">
   <label for="exampleFormControlInput1" class="form-label">Nombre</label>
   <input name="nombre" type="text"  class="form-control" placeholder="nombre"  value="<?php echo $old['nombre']; ?>" required="" >
     <!-- Error -->
        <?php if($validation->getError('nombre')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
        <?php }?>
  </div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
    <input type="text" name="apellido"class="form-control" placeholder="apellido" value="<?php echo $old['apellido']; ?>" required="">
    <!-- Error -->
        <?php if($validation->getError('apellido')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
        <?php }?>
    </div>
    <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Email</label>
   <input name="email"  type="femail" class="form-control"  placeholder="correo@algo.com" value="<?php echo $old['email']; ?>" required="" >
    <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
  </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Usuario</label>
   <input  tyupe="text" name="usuario" class="form-control" placeholder="usuario" value="<?php echo $old['usuario']; ?>" required="">
   <!-- Error -->
        <?php if($validation->getError('usuario')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
        <?php }?>
  </div>
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Baja</label>
   <input  type="text" name="baja" class="form-control" placeholder="Baja" value="<?php echo $old['baja']; ?>" required="">
   <!-- Error -->
        <?php if($validation->getError('baja')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('baja'); ?>
            </div>
        <?php }?>
        
  </div>






  <div class="mb-3">
    <label>Perfil id</label>

    <input type="text" name="perfil_id" class="form-control" value="<?php echo $old['perfil_id'];?>" required="">
    <?php if($validation->getError('perfil_id')){?>
        <div class="alert alert-danger mt-2">
          <?=$error = $validation->getError('perfil_id');?>

          
        </div>
    <?php }?>
    
  </div>
  
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
   <input name="pass" type="password" class="form-control"  placeholder="password" value="<?php echo $old['pass']; ?>" required="">
   <!-- Error -->
        <?php if($validation->getError('pass')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass'); ?>
            </div>
        <?php }?>
  </div>

  <div class="form-group">   

    <button type="submit"  class="btn btn-dark" >Editar</button>

    

      

      
    </div>

            
 </div>

 </center>
</form>
</div>
<br>
    <br>
</div>
