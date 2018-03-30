<div class="container">
    <h1>NoteController/index</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <div class="row mt-3">
        <h3 class="mt-3 col-9">Espacio para crear unidades
        </h3>
        <div class="col-3">
           <a class="btn btn-info btn-lg" href="<?php echo Config::get('URL');?>learning/admin">Volver</a>
           </div>
        </div>
        <p>
            <form method="post" action="<?php echo Config::get('URL');?>lesson/createunidad">
                <label>Nueva unidad para este curso: </label> <input class="form-control" type="text" name="unidad_name" required />
                
                <label>Descripcion de la unidad: </label> <input class="form-control" type="text" name="unidad_description" required/>
                <input type="hidden"  name="learning_id"  value="<?php echo htmlentities($this->learning); ?>" />
                <br>
                <input type="submit" class="btn btn-primary" value='Crear unidad' autocomplete="off" />
            </form>
        </p>

        
            <table class="note-table">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre de Unidad</td>
                    <td>Editar</td>
                    <td>Borrar</td>
                </tr>
                </thead>
                <tbody>
                    <?php if($this->unidad !=0) { ?>
                    <?php foreach($this->unidad as $key => $value) { ?>
                        <tr>
                            <td><?= $value->unidad_id; ?></td>
                            <td><?= htmlentities($value->unidad_name); ?></td>
                            <td><a href="<?= Config::get('URL') . 'lesson/editUnidad/' . $value->unidad_id .'/'. $this->learning;?>">Editar</a></td>
                            <td><a href="<?= Config::get('URL') . 'lesson/deleteUnidad/' . $value->unidad_id .'/'. $this->learning;?>">Borrar</a></td>
                        </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>
