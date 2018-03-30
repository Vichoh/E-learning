<section>
<div class="container">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <div class="row">
        <div class="col-span 12"></div>
    </div>
    <div>

        <div lass="col-span 12">
            <div class="row">
           <h1 class="col-9">Agregar nuevas lecciones al curso</h1>
           <div class="col-3">
           <a class="btn btn-info  btn-lg" href="<?php echo Config::get('URL');?>learning/admin">Volver</a>
           </div>
           </div>
           <div >


            <!-- echo out the system feedback (error and success messages) -->
            <?php $this->renderFeedbackMessages(); ?>
            <p>
                Session para poder crear las lecciones de los cursos, rellenar los campos correspondientes
            </p>
            <p>*****Todos los campos son Obligatorios*****</p>
                <form method="post" action="<?php echo Config::get('URL');?>lesson/create">
                    <label>El titulo de la leccion: </label>
                    <input type="text" class="form-control" name="lesson_title" required/>
                    <label>Acerca de la leccion: </label>
                    <input type="text" class="form-control" name="lesson_about" required/>
                    <div class="row pt-2">
                        <div class="col-2"><label>Asociada a undad: </label>
                        </div>
                        <div class="form-group col-3">
                            <select type="text" class="form-control" name="lesson_unidad" style="height: 34px;" required>
                                <?php foreach($this->unidad as $key => $value) { ?> 
                                <option class="form-control" value="<?php echo htmlentities($value->unidad_id); ?>"><?php echo htmlentities($value->unidad_name); ?></option>         
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <!--<textarea class="form-control" name="lesson_text" required></textarea>-->
                    <textarea class="form-control" name="lesson_text" style="min-height: 70%; height: 70%;" ></textarea>
                    <input type="hidden" name="learning_id" value="<?php echo $this->learning ?>">
                    <label>Video de apoyo: </label>
                    <input type="text" class="form-control" placeholder="EJMPLO: '_U5BjvP3Bqo' es lo que esta despues de '=' y antes del '&' en el link de youtube, para Vimeo pegar el ID del video" name="lesson_video" required />
                    <div>
                        <label>Alojado en: </label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="videoRadios" id="industriaRadios" value="1" checked>YouTube 
                    </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="videoRadios" id="corporativoRadios" value="2">
                    Vimeo 
                </label>
            </div>
            </div>
                    <label>Creado por: </label>
                    <input type="text" class="form-control" name="lesson_autor" required />
                    
                    <br>
                    <button type="submit"  class="btn btn-success"" autocomplete="off">Agregar modulo</button>
                </form>
            

            <?php if ($this->learninglesson) { ?>
            <h2>Lista de Modulos creados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Modulo</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->learninglesson as $key => $value) { ?>
                    <tr>
                        <td><?= $value->lesson_id; ?></td>
                        <td><?= htmlentities($value->lesson_title); ?></td>
                        <td><a class="btn btn-warning" href="<?=Config::get('URL') . 'lesson/edit/' . $value->lesson_id. '/'. $this->learning;?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="<?=Config::get('URL') . 'lesson/delete/' . $value->lesson_id. '/'. $this->learning;?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php } else { ?>
            <div>No hay lecciones. Crea lecciones !</div>
            <?php } ?>

        </div>

    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    /* var fieldHTML = '<div><table class="table"><tr><th><input type="text" name="field_name[]" class="form-control" value=""/></th><th><a href="javascript:void(0);" class="remove_button" title="Remove field"><button type="button" class="btn btn-danger"">Eliminar</button></a></th></tr></table></div>'; //New input field html */

    var fieldHTML = '<div class="form-group row"><div class="col-8"><input type="text" name="field_name[]" class="form-control" value=""/></div><div class="col-4"><a href="#" name="remove_button" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>';
    var x = 1; //Initial field counter is 1

    $('#add_button').click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $('.field_wrapper').append(fieldHTML); // Add field html
            $("a[name='remove_button']").off('click');
            $("a[name='remove_button']").on('click', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent().parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        }
    });
});
</script>   
</div>
</section>