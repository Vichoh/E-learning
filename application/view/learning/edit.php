<section>
    <div class="container">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <h1>Editar curso </h1>

        <div class="box mt-5">
            <div class="row">
                <h2 class="col-9">Editar Curso</h2>
                <div class="col-3">
                   <a class="btn btn-info  btn-lg" href="<?php echo Config::get('URL');?>learning/admin">Volver</a>
               </div>
           </div>

           <!-- echo out the system feedback (error and success messages) -->
           <?php $this->renderFeedbackMessages(); ?>

           <?php if ($this->learning) { ?>
           <form method="post" action="<?php echo Config::get('URL'); ?>learning/editSave">
               <div class="form-group"> 
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input type="hidden" name="learning_id" value="<?php echo htmlentities($this->learning->learning_id); ?>" />

                <label for="title">El titulo del Curso: </label>
                <input type="text" class="form-control" name="learning_title" required value="<?php echo htmlentities($this->learning->learning_title); ?>" id="titulo" />
                <label for="description">Descripción del curso: </label>
                <input type="text" class="form-control" name="learning_description" required value="<?php echo htmlentities($this->learning->learning_description); ?>" id="description" />
                <label for="about">Descripción del curso: </label>
                <input type="text" class="form-control" name="learning_about" required value="<?php echo htmlentities($this->learning->learning_about); ?>" id="about" />
                <label>Etiquetas del curso: </label>
                <div class="field_wrapper">
                    <div>
                        <div class="form-group row">
                            <div class="col-8">
                                <input type="text" name="field_name[]" class="form-control" value=""/>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-info" id="add_button" title="Add field"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <label>Categoria del curso: </label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="categoryRadios" id="industriaRadios" value="CEOSim Industria" checked>
                        CEOSim Industria
                    </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="categoryRadios" id="corporativoRadios" value="CEOSim Corporativo">
                    CEOSim Corporativo
                </label>
            </div>
        </div>

        <div>
         <label>Nivel de simulacion: </label>
         <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="levelRadios" id="emprendeRadios" value="Emprende" checked>
            Emprende
        </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="levelRadios" id="tecnicoRadios" value="Tecnico">
        Tecnico
    </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="levelRadios" id="profesionalRadios" value="Profesional">
    Profesional
</label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="levelRadios" id="profesionalRadios" value="Todos">
    Todos los niveles
</label>
</div>
</div>
<div>
    <label>Dedicado a: </label>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="userRadios" id="estudianteRadios" value="1">
        Estudiante
    </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="userRadios" id="docenteRadios" value="2">
    Docente
</label>
</div>
</div>
<label>Creado por: </label>
<input type="text" class="form-control" required name="learning_author" value="<?php echo htmlentities($this->learning->learning_author); ?>" />
<label>Acerca del creador: </label>
<textarea class="form-control" name="learning_author_des" required><?php echo htmlentities($this->learning->learning_author_des); ?></textarea>
<div class="row">
    <label class="col-sm-2 col-form-label">Color de fondo: </label>
    <div class="col-sm-3">
        <input type="color" class="form-control mt-2" required name="learning_color" value="<?php echo htmlentities($this->learning->learning_color); ?>" style="height: 34px;" />
    </div>
</div>
<br>
<div class="row" style="">
    <div align="center" style="background-color: #f44336;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/horse.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/horse.png" >
    </div>
    <div align="center" style="background-color: #e91e63;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/devices.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/devices.png" >
    </div>
    <div align="center" style="background-color: #9c27b0;" >
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/account-group.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/account-group.png" >
    </div>
    <div align="center" style="background-color: #ff9800;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/cash-usd.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/cash-usd.png" >
    </div>
    <div align="center" style="background-color: #4caf50;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/chart-line.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/chart-line.png" >
    </div>
    <div align="center" style="background-color: #009688;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/online-learning.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/online-learning.png" >
    </div>
    <div align="center" style="background-color: #ffc107;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/cart.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/cart.png" >
    </div>
    <div align="center" style="background-color: #ff5722;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/domain.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/domain.png" >
    </div>
    <div align="center" style="background-color: #9e9e9e;">
        <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/file-chart.png">
        <br>
        <input class="" type="radio" name="IconRadios" id="iconsRadios" value="img/file-chart.png" >
    </div>                 

</div>
<br>
<input type="submit" class="btn btn-success" value="Actualizar" />
</div>
</form>
<?php } else { ?>
<p>No existe curso</p>
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