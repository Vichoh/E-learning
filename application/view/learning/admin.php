<section>
<div class="container" ">
    <div class="row">
        <div class="col-span 12"></div>
    </div>
    <div class="row">

        <div class="col-span 4">

        </div>

        <div class="col 12">
           <h1>Agregar Curso</h1>
           <div class="box">

            <!-- echo out the system feedback (error and success messages) -->
            <?php $this->renderFeedbackMessages(); ?>

            <p>
                Session para poder crear los cursos, rellenar los campos correspondientes
            </p>
            <p>*****Todos los campos son Obligatorios*****</p>
            
                <form method="post" action="<?php echo Config::get('URL');?>learning/create">
                    <label>El titulo para el Curso: </label>
                    <input type="text" class="form-control" name="learning_title" required/>
                    <label>Descripción breve: </label>
                    <input type="text" class="form-control" name="learning_description" required/>
                    <label>Acerca del curso: </label>
                    <input type="text" class="form-control" name="learning_about" required/>
                    <label>Competencias a lograr: </label>
                    <!--Inpus varios-->
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
            <input type="text" class="form-control" name="learning_author" required/>
            <label>Acerca del creador: </label>
            <textarea class="form-control" name="learning_author_des" required></textarea>
            <div class=" row">
            <label class="col-sm-2 col-form-label">color de fondo: </label>
            <!--<input type="text" class="form-control" name="learning_color" required/>-->
            <div class="col-sm-3">
            <input type="color" class="form-control mt-2" name="learning_color" required value="#ff0000" />
            </div>
            </div>
            <br>
            <div class="row" style="">
                <div align="center" style="background-color: #f44336;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/horse.png">
                <br>
                <input class="" type="radio" name="iconRadios" id="iconRadios" value="img/horse.png" >
            </div>
            <div align="center" style="background-color: #e91e63;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/devices.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/devices.png" >
            </div>
            <div align="center" style="background-color: #9c27b0;" >
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/account-group.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/account-group.png" >
            </div>
            <div align="center" style="background-color: #ff9800;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/cash-usd.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/cash-usd.png" >
            </div>
            <div align="center" style="background-color: #4caf50;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/chart-line.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/chart-line.png" >
            </div>
            <div align="center" style="background-color: #009688;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/online-learning.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/online-learning.png" >
            </div>
            <div align="center"  style="background-color: #ffc107;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/cart.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/cart.png" >
            </div>
            <div align="center" style="background-color: #ff5722;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/domain.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/domain.png" >
            </div>
            <div align="center" style="background-color: #9e9e9e;">
                <img class="icon-learning-create" src="<?php echo Config::get('URL'); ?>img/file-chart.png">
                <br>
                <input class="" type="radio" name="IconRadios" id="iconRadios" value="img/file-chart.png" >
            </div>                 
                
            </div>
            <hr class="my-4">
            <button type="submit" class="btn btn-success" autocomplete="off">Crear Curso</button>
        </form>
    

    <?php if ($this->learning) { ?>
    <h2>Lista de cursos creados</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Curso</th>
                <th>Nivel simulación</th>
                <th>Asignar Unidades</th>       
                <th>Agregar Lecciones</th>
                
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->learning as $key => $value) { ?>
            <tr>
                <td><?= $value->learning_id; ?></td>
                <td><?= htmlentities($value->learning_title); ?></td>
                <td><?= htmlentities($value->learning_level); ?></td>
                <td><a class="btn btn-primary" href="<?= Config::get('URL') . 'lesson/unidad/' . $value->learning_id; ?>">Crear unidad</a></td>
                <td><a class="btn btn-primary" href="<?= Config::get('URL') . 'lesson/index/' . $value->learning_id; ?>">Agrega lecciones</a></td>
                <td><a class="btn btn-warning" href="<?= Config::get('URL') . 'learning/edit/' . $value->learning_id; ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="<?= Config::get('URL') . 'learning/delete/' . $value->learning_id; ?>">Borrar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
    <div>No hay curso!</div>
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