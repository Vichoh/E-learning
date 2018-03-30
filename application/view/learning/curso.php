<section class="mt-5" style="background-color: #f5f5f5;">

    <div class="text-body">

        <div class="content-head shadow light" style="background-color: <?= ($this->learningAll->learning_color); ?>">
            <div class="flex full-pad max-width layout-center" style="position: relative;padding-bottom: 64px;min-height: 200px; padding-top: 40px">
                <div class="mr-5">
                    <img class="image-learning mr-5 pr-5" src="<?php echo Config::get('URL'); ?><?= ($this->learningAll->learning_image); ?>">
                </div>
                <div class="info-learning" >
                    <div class="small-label" ac-translate-once>Curso Online</div>
                    <h1 class="text-white" style=" font-weight: 300; font-size: 30px"><?php echo htmlentities($this->learningAll->learning_title);?></h1>
                    <h3  style="color: rgba(255,255,255,.6); font-size: 18px; font-weight: 300; line-height: 23px"><?php echo htmlentities($this->learningAll->learning_description);?></h3>

                    
                    <div class=""><?php foreach($this->learningAll->learning_result as $key => $value) { ?>
                        <div class="small-label mt-2 text-white" style="float: left;  margin-right: 10px"><?= htmlentities($value); ?></div><?php } ?>

                    </div>
                    <br>
                    <div class="mt-4">
                        <?php if($this->matriculado==false) { ?>

                        <form  method="post" action="<?php echo Config::get('URL');?>learning/matricular">
                            <input type="hidden" name="learning_id"  value="<?php echo htmlentities($this->learningAll->learning_id);?>">
                            <button class="btn btn-primary btn-lg btnMatricula" type="submit">COMENZAR CURSO</button>

                        </form></div>
                        <?php  } ?>
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
        <div class="card-block  nav-ceosim col-8" >
            <h3 class="content-title">Acerca de este curso</h3>
            <div class="text-body">
                <p class="text-justify" ><?php echo htmlentities($this->learningAll->learning_about); ?></p>
            </div>

            <hr>
            <h4 class="text-center text-primary display-4" style="font-size: 35px;">Lecciones</h4>

            <div class="text-center">
              <div class="text-center">
                 <?php   $matriculadoTooltips=""; ?>
                 <?php if($this->matriculado==false) { ?>
                 <?php   $matriculado="disabled-matricula"; ?>
                 <?php   $matriculadoTooltips="data-toggle='tooltip' data-placement='right' title='Primero debes seleccionar Comenzar Curso'"; ?>
                 <?php } ?>
                 <div class="card card-block <?= htmlentities($matriculado); ?>" <?= htmlentities($matriculadoTooltips); ?>> 
                    <div class="row">
                        <div class="col-12" align="center">
                            <?php if ($this->progreso==0) {?>
                                <p class="text-center">Avance <strong class="text-success" style="font-size: 18px;">0%</strong></p>
                            <?php } else {?>
                                <p class="text-center">Avance <strong class="text-success" style="font-size: 18px;"><?= htmlentities(round(((($this->progreso)/$this->cant)*100)), 2); ?>%</strong></p>
                            <?php } ?>
                            <div class="progress">
                                <?php if ($this->progreso==0) {?>
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="0%"  aria-valuemin="0" aria-valuemax="100"></div>
                                <?php } else {?>
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?= htmlentities((($this->progreso)/$this->cant)*100); ?>%;"  aria-valuemin="0" aria-valuemax="100"></div>
                                <?php } ?>
                            </div></div>

                        </div>
                        <div class="">
                            <?php   $cont2=1 ;?>
                            <?php foreach($this->unidad as $clave => $valor) { ?> 
                            <div class="pb-5">
                                <div align="left">
                                    <span class="texto-claro" style="text-align: left;"><?= htmlentities($valor->unidad_name); ?></span>
                                    <strong><p style="text-align: left;"><?= htmlentities($valor->unidad_description); ?></p></strong>
                                </div>
                                <div class="list-group ">
                                    <?php $cont1=1; ?>
                                    <?php foreach($this->unidad_lesson as $k => $val) { ?>
                                    <?php foreach($this->learning as $key => $value) { ?> 
                                    <?php if($value->lesson_id == $val->lesson_id){ ?>
                                    <?php $progreso=""; ?>
                                    <?php $link = 1; ?>
                                    <?php if($this->progress<$value->lesson_id){ ?>
                                    <?php if((($this->firstLesson==$value->lesson_id ||$anterior == $this->progress))){ ?>
                                    <?php $progreso = ""; ?>
                                    <?php } else{ ?>
                                    <?php $progreso = "disabled-matricula"; ?>
                                    <?php $link = 0; ?>
                                    <?php } ?>
                                    <?php } ?>
                                    <?php if( ($value->lesson_id == $val->lesson_id)&&($valor->unidad_id == $val->unidad_id)) { ?>
                                    <?php if( $link==1 ) { ?>
                                    <a class="tags-success " href="<?= Config::get('URL') . 'learning/leccion/'.$value->lesson_id .'/'. $value->learning_id; ?>">
                                        <?php } ?>
                                        <div class=" <?= htmlentities($progreso); ?> pb-2 pt-1">
                                            <div class="row col-12">
                                                <div class="col-8 pl-5 row" align="left">
                                                    <div class="col-1"><span class="texto-claro" style="text-align: left;"><?php echo ($cont2.".".$cont1) ; ?></span></div>
                                                    <div class="col-11">
                                                        <span class="span-grande" style="text-align: left;"><?= htmlentities($value->lesson_title); ?> </span>
                                                    </div>
                                                </div>
                                                <div class="col-4" align="right">
                                                    <?php $listo = ""; ?>
                                                    <?php foreach($this->listo as $key => $lessonlisto) { ?>                                
                                                    <?php if($value->lesson_id == $lessonlisto->lesson_id){ ?>
                                                    <?php $listo = "fa fa-check-circle"; ?>
                                                    <?php }  ?>
                                                    <?php } ?>
                                                    <span class="span-grande" style="color: #797a7a;"><i class="fa fa-play-circle-o text-success" aria-hidden="true"> </i>  Iniciar <i style="font-size: 19px; color: #00c853;" class="<?= htmlentities($listo); ?>"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $link==1 ) { ?>
                                    </a>
                                    <?php } ?>
                                    <?php $cont1++ ;?>
                                    <?php } ?>
                                    <?php $link=1; ?>
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
                        </div>

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
                <div class="col-4 card-block ">
                  <h3 class="content-title">Equipo de trabajo</h3>
                  <div style="padding-left: 10px;">
                    <div class="name"><i class="fa fa-user-circle text-success" aria-hidden="true"></i> <span class="text-primary"><?php echo htmlentities($this->learningAll->learning_author); ?></span> </div>
                    <?php if ($this->learningAll->learning_author_des!= null) {?>
                    <p class="text-body  text-justify" style="font-size: 13px;"><?php echo htmlentities($this->learningAll->learning_author_des); ?></p>
                <?php } else{ ?>
                    <p class="text-body  text-justify" style="font-size: 13px;">Agregar texto para cuando no tenga info</p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>

    <!--</div>-->
</div>

</section>

</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
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

       var rgbColor  = hex2rgb('<?= ($this->learningAll->learning_color); ?>');
       $("#myTopnav").css('background-color', 'rgb('+rgbColor[0]+','+ rgbColor[1]+','+rgbColor[2]+')' );



   });

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
