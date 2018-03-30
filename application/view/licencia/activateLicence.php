<section>
<div class="container ml-0 pl-0 mt-5" style="width: 100%;">

    <div class="list-group col-2 pr-0 bg-nav" style="height: 100% ; position: fixed; background-color: #37474F">
    <h4 class="card-title text-white pt-4 text-center">Licencias</h4>
      <a href="<?php echo Config::get('URL'); ?>licencia" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-credit-card text-success pr-2"></i>Mis Licencias</a>

      <a href="<?php echo Config::get('URL'); ?>licencia/activeLicence" class="list-group-item list-group-item-action bg-nav text-white active" > <i class="fa fa-check-circle text-success pr-2"></i>Activar Licencia</a>

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
      <a href="<?php echo Config::get('URL'); ?>licencia/getLicenceUserDelete" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"> <i class="fa fa-user-times text-success pr-2"></i>Solicitud Eliminacion</a>
      <?php } ?>
    </div>

    <div class="col-8 offset-3">

         <h1 class=" pt-4 pb-4 mb-4" style=" font-weight: 300; font-size: 30px">Activar nueva licencia</h1>


          <?php $this->renderFeedbackMessages(); ?>
    		   <div class="row col-12 mb-5 pb-5">
            <div class="col-12 ml-3 mr-3 mb-5 pb-5">
                <p class="col-3">Agregar usuario</p>
                <form  method="post" action="<?php echo Config::get('URL');?>licencia/createLicence_UserPerKey">
                 <div class="input-group pt-3 col-9">
                    <span class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></span>
                    <input id="filtrar-codigo" type="text" class="form-control" name="licencia_key" placeholder="Codigo Activacion" required="true">
                    <button type="submit" class="btn btn-success pl-3" id="activar">Activar</button>
                </div>
            </form> 
        </div>
    </div>
               
    </div>
</div>
</section>