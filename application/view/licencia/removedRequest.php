<section>
<div class="container ml-0 pl-0 " style="width: 100%;">

    <div class="list-group col-2 pr-0 bg-nav" style="height: 100% ; position: fixed; background-color: #37474F">
    <h4 class="card-title text-white pt-4 text-center">Licencias</h4>
      <a href="<?php echo Config::get('URL'); ?>licencia" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-credit-card text-success pr-2"></i>Mis Licencias</a>

      <a href="<?php echo Config::get('URL'); ?>licencia/activeLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-check-circle text-success pr-2"></i>Activar Licencia</a>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/createLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"><i class="fa fa-plus-square text-success pr-2"> </i> Crear licencia</a>
      <?php } ?>
        
      <?php if ($this->user_level == 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersTeacher" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>
        <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersAdmin" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/getLicenceUserDelete" class="list-group-item list-group-item-action bg-nav text-white active" > <i class="fa fa-user-times text-success pr-2" ></i>Solicitud Eliminacion</a>
      <?php } ?>

    </div>



    <div class="col-8 offset-3" style="height: 100%">

         <h1 class=" pt-4 pb-4 mb-4" style=" font-weight: 300; font-size: 30px">Licencias</h1>

    
        <?php if ($this->licencias) { ?>
            <table class="table table-bordered">
              <thead >
                <tr class="bg-primary text-white">
                  <th>Nombre Usuario</th>
                  <th>Correo Usuario</th>
                  <th>Codigo</th>
                  <th>Nombre Licencia</th>
                  <th>Observacion Licencia</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->licencias as $key => $value) { ?>
                <tr>
                  <th class="bg-info text-white"><?= htmlentities($value->first_name); ?> <?= htmlentities($value->last_name); ?></th>
                  <td class="bg-info text-white"><?= htmlentities($value->user_email); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_key); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_name); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_observacion); ?></td>
                  <td class="bg-info text-white"><a href="<?= Config::get('URL') . 'licencia/deleteUserFromLicence/' . $value->lu_id; ?>"><button class="btn btn-success">Eliminar</button></a></td>
                  <td class="bg-info text-white"><form method="post" action="<?php echo Config::get('URL'); ?>licencia/solicitudEliminacion"><input type="hidden" name="id" value="<?= htmlentities($value->lu_id); ?>" /><input type="hidden" name="estado" value="0" /><button class="btn btn-success"><input style="background-color: transparent; border-color: transparent;" class="text-white" type="submit" value="Cancelar" /></button></form></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
            <div> </div>
        <?php } ?>
               
    </div>
</div>




</section>