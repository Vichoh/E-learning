<section class="mt-5" style="background-color: #f5f5f5;">

    <div class="text-body">

        <div class="content-head shadow light" style="background-color: #2F7C98;); ?>">
            <div class="flex full-pad max-width layout-center" style="position: relative;padding-bottom: 64px;min-height: 200px; padding-top: 40px">
                <div class="row">
                    <div class="info-learning col-8" >
                        <div class="small-label" ac-translate-once>Estudiante</div>
                        <h1 class="text-white display-4" style="font-size: 50px; text-transform: capitalize;"> <?= htmlentities($this->user->first_name); ?> <?= htmlentities($this->user->last_name); ?>
                        </h1> 
                        <br>
                    </div>
                    <div class="col-4">
                        <?php if ($this->progress==0) {?>
                        <p class="text-center display-4 text-white"><strong class="text-success" style="font-size: 70px;">0%</strong> de <br>Avance </p>
                        <?php } else {?>
                        <p class="text-center display-4 text-white"><strong class="text-success" style="font-size: 70px;"><?= htmlentities(round(((($this->progress)/$this->cant)*100)), 2); ?>% </strong> de<br>Avance </p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<?php $this->renderFeedbackMessages(); ?>
<div class=" my-3">
</div>
<section class=" max-width">
    <!--<div class="card">-->
     <div class="row max-width">
        <div class="card-block  nav-ceosim " >
            <hr>
            <h4 class="text-center text-primary display-4" style="font-size: 35px;">Avance por Cursos</h4>
            <div class="text-center">
              <div class="text-center">     
               <div class="card card-block"> 
                <div class="row">
                    <div class="col-12" align="">
                            
                            <div class="row" >
                                <?php foreach($this->learning as $x => $learning) { ?>


                                

                                <?php $cont=0; ?>
                                <?php $cont1=0; ?>
                                <h3 class="col-4 pb-3 text-primary" style="text-align: left; text-transform: capitalize;"><?= htmlentities($learning->learning_title); ?>
                                </h3>
                                <?php foreach($this->lesson as $xx => $lesson) { ?>
                                <?php if($lesson->learning_id==$learning->learning_id){ ?>
                                <?php $cont++; ?>

                                <!--<h4 style="color: #37474f; text-align: center;"><?= htmlentities($lesson->lesson_title); ?></h4>-->
                                <?php } ?>
                                <?php foreach($this->progressLearning as $yy => $progressLearning) { ?>
                                <?php if(($lesson->lesson_id==$progressLearning->lesson_id)&&($lesson->learning_id==$learning->learning_id)){ ?>
                                <?php $cont1++; ?>
                                <?php } ?>
                                <?php } ?>
                                <?php } ?>
                                <div class="col-4">
                                    <?php if ($cont1==0) {?>
                                    <div class="progress mt-1">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="0%"  aria-valuemin="0" aria-valuemax="100"></div></div>
                                        <?php } else {?>
                                        <div class="progress mt-1">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?= htmlentities(($cont1*100)/$cont); ?>%;"  aria-valuemin="0" aria-valuemax="100"></div></div>
                                            <?php } ?>
                                        </div>
                                        <?php if($cont ==0&&$cont1==0){ ?>
                                        <h3 class="col-4">0%</h3>
                                    <?php }else{ ?>
                                        <h3 class="col-4"><?= htmlentities(round(($cont1*100)/$cont)); ?>%</h3>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div align="center"><button id="openModalProgreso" class="btn btn-info btn-lg">Detalle</button></div>
                                </div>
                                
                                

                            </div>

                            <!--Modal-->
                            
                            <!--MODAL DETALLE -->
                                <div class="modal fade detalleProgreso " id="progresoEstudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detalle de Progreso</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                <div class="">
                                    <?php foreach($this->learning as $tt => $learning1) { ?>
                                    <?php   $cont2=1 ;?>
                                    <h2 class="display-4 text-primary" style="font-size: 35px; text-transform: capitalize;"><?= htmlentities($learning1->learning_title); ?></h2>
                                    <?php foreach($this->unidad as $clave => $valor) {?>

                                    <?php if($learning1->learning_id==$valor->learning_id) {?>
                                    <div class="pb-5">

                                        <div align="left">

                                            <span class="texto-claro" style="text-align: left;"><?= htmlentities($valor->unidad_name); ?></span>
                                            <strong><p style="text-align: left;"><?= htmlentities($valor->unidad_description); ?></p></strong>
                                        </div>

                                        <div class="list-group ">
                                            <?php $cont1=1; ?>
                                            <?php foreach($this->unidad_lesson as $k => $val) { ?>
                                            <?php foreach($this->lesson as $key => $value) { ?> 
                                            <?php if($value->lesson_id == $val->lesson_id){ ?>
                                            <?php if( ($value->lesson_id == $val->lesson_id)&&($valor->unidad_id == $val->unidad_id)) { ?>

                                                <div class=" <?= htmlentities($progreso); ?> pb-2 pt-1">
                                                    <div class="row col-12">
                                                        <div class="col-8 pl-5 row" align="left">
                                                            <div class="col-1"><span class="texto-claro" style="text-align: left;"><?php echo ($cont2.".".$cont1) ; ?></span></div>
                                                            <div class="col-11">
                                                                <span class="span-grande" style="text-align: left;"><?= htmlentities($value->lesson_title); ?> </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4" align="right">
                                                            <?php $listo = "fa fa-ban"; $colorIcon="e53935" ?>
                                                            <?php foreach($this->listo as $key => $lessonlisto) { ?>                                
                                                            <?php if($value->lesson_id == $lessonlisto->lesson_id){ ?>
                                                            <?php $listo = "fa fa-check-circle"; $colorIcon ="00c853"; ?>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <span class="span-grande" style="color: #797a7a;"><i style="font-size: 19px; color: #<?= htmlentities($colorIcon); ?>;" class="<?= htmlentities($listo); ?>"></i></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            <?php $cont1++ ;?>
                                            <?php } ?>
                                            <?php $progreso=""; ?>
                                            <?php $anterior=$value->lesson_id; ?>
                                            <?php } ?>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <hr>
                                    </div>
                                    
                                    <?php $cont2++;?>
                                    <?php } ?>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="openModalProgreso" class="btn btn-info" data-dismiss="modal">Listo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TERMINO DE MODAL -->
                        <!--
                        

                        -->
                    </div>

                  <!--<div class="col-4 pt-2 pb-2 mb-2"  >
                    
                        <div class="card">
                            <a href="<?= Config::get('URL') . 'learning/leccion/'.$value->lesson_id .'/'. $value->learning_id; ?>">
                            <div class="card card-inverse">
                                <img class="card-img-top" height="120px" src="<?= htmlentities($value->lesson_image); ?>" alt="Card image cap">

                                <div class="" style="bottom: 0px; right: 5px; position: absolute;">
                                    <?php foreach($value->lesson_result as $res => $result) { ?>
                                    <span class="tags-learning  "><?= htmlentities($result); ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                            
                        </a>

                        <div class="card-block" ">
                            <div>
                                <h5 class="" ><?= htmlentities($value->lesson_title); ?></h5>
                            </div>
                            <p class="font-card-learnig" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<?= htmlentities($value->lesson_about); ?>"
                                style="white-space: nowrap; display: block;
                                overflow: hidden;
                                text-overflow: ellipsis;"><small><?= htmlentities($value->lesson_about);?></small></p>
                                <hr>
                                <div class="row pb-2">

                                            
                                            <div class="col-xs-1">
                                                <p class="card-text pr-2 pl-2" style="right:10px; position:absolute;"><strong><?= htmlentities($value->lesson_author);?> </strong><i class="fa fa-user-circle text-success" aria-hidden="true"></i></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>-->

                            
                        </div>
                    </div>
                </div>
                <!--<div class="col-4 card-block ">
                  <h3 class="content-title">Equipo de trabajo</h3>
                  <div style="padding-left: 10px;">
                    <div class="name"><i class="fa fa-user-circle text-success" aria-hidden="true"></i> <span class="text-primary"><?php echo htmlentities($this->learningAll->learning_author); ?></span> </div>
                    <?php if ($this->learningAll->learning_author_des!= null) {?>
                    <p class="text-body  text-justify" style="font-size: 13px;"><?php echo htmlentities($this->learningAll->learning_author_des); ?></p>
                <?php } else{ ?>
                    <p class="text-body  text-justify" style="font-size: 13px;">Agregar texto para cuando no tenga info</p>
                    <?php } ?>
                </div>
            </div>-->
        </div>

    </div>

    <!--</div>-->
</div>

</section>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $("#openModalProgreso").click(function () {
            
            $("#progresoEstudiante").modal('show');
        });
    })
  //      if (".ocultarBoton") {
    if ('.ocultarBoton'===1) {
        $('.ocultarBoton').slideUp();
    }
//        }
        //$(".ocultarBoton").click(function () {

        //conficion si el usuario esta guardado ocultar
         //$('.btnMatricula').slideUp();
       // });

       


       function hex2rgb(hex) {
        // long version
        r = hex.match(/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i);
        if (r) {
            return r.slice(1,4).map(function(x) { return parseInt(x, 16); });
        }
        // short version
        r = hex.match(/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i);
        if (r) {
            return r.slice(1,4).map(function(x) { return 0x11 * parseInt(x, 16); });
        }
        return null;
    }
</script>
<style>
h2{
    color: white;
}

.about h4{
    color: #BDBDBD;
}
.text-justify p{
    color: #585858;
}

.jumbotron h5, .jumbotron  p, .jumbotron strong{
    color: #E6E6E6;    
}


.readmore {
    padding: 10px 15px;
    background: rgb(34, 30, 31);
    color: white;  
}
.readmore:hover {
  background: rgb(215, 29, 75);
}
h5{
    color:#1C1C1C;
}
</style>
</section>
