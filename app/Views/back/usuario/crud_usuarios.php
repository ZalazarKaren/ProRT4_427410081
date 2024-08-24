<div >
<?php if(!$users ){ ?>

  <div class="container" >
    
      <h1>No hay Usuarios</h1>
   
    
  </div>

<?php } else { ?>

  <div class="container"> 
    <div class="well">
     
      <h3 class="titulo">USUARIOS REGISTRADOS</h3>
    </div>  

 
    <br> <br>
    <table class="table table-bordered"  style="background-color: #DC143C; ">

      <thead style="color: #26043A; background-color: #C780F4; text-align: center">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Usuario</th>
          <th>Baja</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody style="color: #330251;  background-color: #D9C1E8">
       <div class="container">
        
       <?php if($users):?>
            <?php foreach($users as $lib):?>
                <tr>
                    <td><?= $lib['id_usuario'];?></td>
                    <td><?= $lib['nombre'];?></td>
                    <td><?= $lib['apellido'];?></td>
                    <td><?= $lib['email'];?></td>
                    <td><?= $lib['usuario'];?></td>
                    <td><?= $lib['baja'];?></td>
                    <td>
                   <a type="button" class="btn btn-light" href="<?php echo base_url('actualizar/'.$lib['id_usuario']); ?>">editar</a>
<?php if($lib ['baja'] == 'NO' ) { ?>
        <a style="color: white" href=" <?=base_url('elimin/' .$lib['id_usuario']) ; ?>" class= "btn btn-danger">Eliminar</a>
        <?php } else {?>
            <a style="color: white" href="<?=base_url('reponer/' .$lib['id_usuario']) ; ?> " class="btn btn-success" >Restaurar</a>
            <?php } ?>

                   
         
        </td>
                </tr>
            <?php endforeach; ?>
       <?php endif; ?>
      </div>
        </tbody> 
      </table>   
      <div  style="text-align: center">

        <br>
        <br>

        <a type="button" class="btn btn-dark" href="<?php echo base_url('add_usuario'); ?>">Agregar Usuario</a>
    
     <br>
        <br>
      </div>
                  
    </div>
</div>
    <?php } ?>