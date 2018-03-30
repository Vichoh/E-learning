<div class="container">
    <h1>Unidad</h1>

    <div class="box">
        <h2>Editar la Unidad</h2>

        <!-- echo out the system feedback (error and success messages) -->        
            <form method="post" action="<?php echo Config::get('URL'); ?>lesson/editSaveUnidad">
                <label>Cambiar el nombre de la unidad: </label>
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input  type="hidden" name="unidad_id" value="<?php echo htmlentities($this->unidad->unidad_id); ?>" />
                <input  type="hidden" name="learning_id" value="<?php echo htmlentities($this->learning); ?>" />
                <input class="form-control" type="text" name="unidad_name" value="<?php echo htmlentities($this->unidad->unidad_name); ?>" />
                <label>Cambiar la descripción de la unidad: </label>
                <input class="form-control" type="text" name="unidad_description" value="<?php echo htmlentities($this->unidad->unidad_description); ?>" />
                <br>
                <input class="btn btn-success" type="submit" value='actualizar' />
            </form>
    </div>
</div>
