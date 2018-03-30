<section class="mt-5 mb-5" style="background-color: #f5f5f5;">
    <div class="container-fluid" >
        <div class="row">
            <div class="col mt-3 text-primary">
                <h1 ><i class="fa fa-graduation-cap" aria-hidden="true"></i>E-Learning</h1>
            </div>
            <?php if ($this->user_level > 1 ){ ?>
                <a class="mt-4 mr-3" href="<?php echo Config::get('URL'); ?>learning/admin" > <button class="btn btn-success">Nuevo Curso</button></a>
            <?php } ?>
        </div>
        <?php $this->renderFeedbackMessages(); ?>
        <div class="row my-3">

            <section class="col-12">
                <div class="">
                    <div class="p-0">
                        <div class="bg-info text-white pt-2 pb-2 pl-2 pr-2 mb-0">
                            <h3 class="text-center display-4" style="font-size:35px;">Cursos Disponibles</h3>
                        </div>
                        <div class="row text-center p-3">
                            <?php foreach($this->learning as $key => $value) { ?>
                            
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pt-2 pb-2 mb-2 view hm-zoom ">

                                <a class="img-fluid" style="text-decoration: none;" href="<?= Config::get('URL') . 'learning/curso/'.$value->learning_id; ?>">
                                    <div class="card">
                                        <div class="card card-inverse d-block align-middle" style="height: 130px; background-color: <?= ($value->learning_color); ?>" alt="Card image cap">

                                            <!--<img class="card-img-top" height="120px" src="<?= htmlentities($value->learning_image); ?>" alt="Card image cap">-->
                                            <div class="contenedor-card">
                                                <img class="fondo-learning" style="height: 70px; text-align: center;" src="<?php echo Config::get('URL'); ?><?= htmlentities($value->learning_image); ?>">
                                            </div>
                                            <div  style="bottom: 5px; right: 5px; position: absolute;">
                                                <?php foreach($value->learning_result as $res => $result) { ?>
                                                <a  class="tags-learning" style="color: rgba(255,255,255,.8)!important;" href="<?= Config::get('URL') . 'learning/curso/'.$value->learning_id; ?>"> <?= htmlentities($result); ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="card-block p-1">
                                            <div class="view hm-zoom" >
                                                <h4 class="card-title text-primary"><?= htmlentities($value->learning_title); ?></h4>

                                                <p class="font-card-learnig m-10" data-toggle="tooltip" data-placement="bottom" title="<?= htmlentities($value->learning_description); ?>"
                                                    style="white-space: nowrap; display: block;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;line-height:20px;"><small><?= htmlentities($value->learning_description);?></small></p>
                                                    
                                                </div>
                                                <hr>
                                                <div ">
                                                    <div class="row">
                                                        <div class="col-xs-1" align="left">
                                                            <!--<p class="card-text"><strong>Duracion: </strong><?= htmlentities($value->learning_duration); ?></p>-->
                                                            <?php   $emprende="color: #ffc107;" ;?>
                                                             <?php   $tecnico="color: #9c27b0;" ;?>
                                                             <?php   $profesional="color: #009688;" ;?>
                                                             <?php $todos="color: #4caf50;";?>
                                                            <?php if($value->learning_level==="Tecnico"){ ?>
                                                               <?php $color=$tecnico; }?>
                                                               <?php if ($value->learning_level==="Profesional"){ ?>
                                                               <?php $color=$profesional; }?>
                                                               <?php if ($value->learning_level==="Emprende"){ ?>
                                                               <?php $color=$emprende; }?>
                                                               <?php if ($value->learning_level==="Todos"){ ?>
                                                               <?php $color=$todos; }?>
                                                               <span class="card-text pl-4" style="color: #856f65; font-size: 14px;"><?= htmlentities($value->learning_category); ?></span>
                                                               <br>
                                                            <span class="card-text pl-4">Nivel: <span  style="right:10px; color: #856f65;"><?= htmlentities($value->learning_level); ?> <i class="fa fa-circle" style="<?= htmlentities($color);?>" aria-hidden="true"></i></span></span>
                                                            
                                                            

                                                        </div>
                                                        <div class="col-xs-1" style="bottom: 5px; right: 5px; position: absolute;">
                                                             
                                                            
                                                            <span class="card-text pr-2 pl-2" style="right:10px;"><strong><?= htmlentities($value->learning_author);?> </strong> <i class="fa fa-user-circle text-success" aria-hidden="true"></i></span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                </div>  






                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                
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
<style>
.image_wrapper {
    position:relative;
    float:center;
    margin:10px;
}
.image_wrapper .image {
    border:1px solid #ccc;
    width:100px;
    height:100px;
    float: center;
}
/* Definimos el formato de las imagenes */
.image_wrapper .add, .image_wrapper .remove {
    position:absolute;
    bottom:0px;
    opacity:0;
    transition:opacity 0.5s linear;
    -webkit-transition:opacity 0.5s linear;
    cursor:pointer;
    border:0px;
}
/* Mostramos el icono al pasar por encima de la imagen con una transicion */
.image_wrapper:hover .add, .image_wrapper:hover .remove {
    transition: opacity 0.5s linear;
    -webkit-transition: opacity 0.5s linear;
    opacity: 0.8;
}
/* Posicionamos los botones en la posicion izquierda y derecha */
.image_wrapper .add {
    left:0px;
}
.image_wrapper .remove {
    float: center;
    width: 75%;
    right:0px;
}
h6, h5{
    color:#1C1C1C;
}
</style>