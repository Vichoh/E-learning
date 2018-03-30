<section>
<div class="container">
    <h1>LicenciaController/edit/:licence_id</h1>

    <div class="box mt-4">
        <h2>Editar la licencia</h2>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <?php if ($this->licencia) { ?>
            <form method="post" action="<?php echo Config::get('URL'); ?>licencia/editSave">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Nombre Licencia:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="licencia_name" value="<?php echo htmlentities($this->licencia->licence_name); ?>" />
                  </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-sm-2" for="email">cantidad de usuario:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="licencia_user" value="<?php echo htmlentities($this->licencia->licence_user); ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Observacion:</label>
                  <div class="col-sm-10">
                       <input type="text" class="form-control" name="licence_observacion" value="<?php echo htmlentities($this->licencia->licence_observacion); ?>" />
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Fecha expiracion</label>
                  <div class="col-sm-10">
                        <input  type="date" class="form-control" name="licencia_expiration" min="2018-01-01" max="2050-05-25" step="1" value="<?php echo htmlentities($this->licencia->licence_expiration); ?>" />
                  </div>
                </div>
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input type="hidden" name="licencia_id" value="<?php echo htmlentities($this->licencia->licence_id); ?>" />
                
                <input type="hidden" name="licencia_key" value="<?php echo htmlentities($this->licencia->licence_key); ?>" />

                <input class="btn btn-primary" type="submit" value='Cambiar' />
            </form>
        <?php } else { ?>
            <p>Esta licencia no existe</p>
        <?php } ?>
    </div>
</div>
</section>