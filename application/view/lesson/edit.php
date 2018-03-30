<section>
<div class="container">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <h1>LearningLessonController/edit/:lesson_id</h1>

    <div class="box mt-5">
        <div class="row">
        <h2  class="col-9">Editar Leccion</h2>
        <div class="col-3">
           <a class="btn btn-info  btn-lg" href="<?=Config::get('URL') . 'lesson/index/'. $this->learning;?>">Volver</a>
        </div>
        </div>
        <p>*****Todos los campos son Obligatorios*****</p>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <?php if ($this->learninglesson) { ?>
            <form method="post" action="<?php echo Config::get('URL'); ?>lesson/editSave">
               <div class="form-group"> 
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input type="hidden" name="lesson_id" value="<?php echo htmlentities($this->learninglesson->lesson_id); ?>" />
                <input type="hidden" name="learning_id" value="<?php echo $this->learning ?>">
                <label for="title">El titulo del artiulo: </label>
                <input type="text" class="form-control" name="lesson_title" value="<?php echo htmlentities($this->learninglesson->lesson_title); ?>" id="titulo" />

                <label>Acerca de la leccion: </label>
                <input type="text" class="form-control" name="lesson_about" value="<?php echo htmlentities($this->learninglesson->lesson_about); ?>" />
                <div class="row">

                        <div class="col-3"><label>Asociada a undad: </label>
                        </div>
                        <div class="col-3">
                            
                            <select type="text" class="form-control" name="lesson_unidad" required>
                                <?php foreach($this->unidad as $key => $value) { ?> 
                                <option value="<?php echo htmlentities($value->unidad_id); ?>"><?php echo htmlentities($value->unidad_name); ?></option>         
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                
                
                <label>El desarrollo del tema</label>
                <textarea type="text" class="form-control" style="min-height: 70%;" name="lesson_text"><?php echo htmlentities($this->learninglesson->lesson_text); ?></textarea>
                 <label>Video de apoyo: </label> 
                <input type="text" class="form-control" name="lesson_video" value="<?php echo htmlentities($this->learninglesson->lesson_video); ?>" />
                <label>Creado por: </label>
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
                <input type="text" class="form-control" name="lesson_autor" value="<?php echo htmlentities($this->learninglesson->lesson_author); ?>" />
                <br>

                <input type="submit" class="btn btn-success" value='Actualizar' />
                

                </div>
            </form>
        <?php } else { ?>
            <p>This note does not exist.</p>
        <?php } ?>
    </div>
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