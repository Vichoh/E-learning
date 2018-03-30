<section>
<div class="container ml-0 pl-0" style="width: 100%; position: fixed;">

    <div class="list-group col-2 pr-0 bg-nav" style="height: 100% ; position: fixed; background-color: #37474F">
    <h4 class="card-title text-white pt-4 text-center">Licencias</h4>
      <a href="<?php echo Config::get('URL'); ?>licencia" class="list-group-item list-group-item-action bg-nav text-white active"> <i class="fa fa-credit-card text-success pr-2"></i>Mis Licencias</a>

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
         <a href="<?php echo Config::get('URL'); ?>licencia/getLicenceUserDelete" class="list-group-item list-group-item-action bg-nav text-white" > <i class="fa fa-user-times text-success pr-2" ></i>Solicitud Eliminacion</a>
      <?php } ?>

    </div>

     

</div>
</section>
