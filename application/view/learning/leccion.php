<section>
<div >
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <?php if ($this->learninglesson) { ?>

    <div class="page-header" style="margin-top: 0px;"> 
        <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
        <br>
        <div class="content-head shadow light" style="background-color:<?= ($this->learningAll->learning_color); ?> ">
            <div class="flex full-pad max-width layout-center" style="position: relative;padding-bottom: 64px;min-height: 110px; max-height: 130px; padding-top: 40px">
                <h2 class="display-4"  type="text"  name="lesson_title">
                  <a class="cursos-volver" href="<?= Config::get('URL') . 'learning/curso/'.$this->learningAll->learning_id; ?>"><?= ($this->learningAll->learning_title); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> <?= htmlentities($this->learninglesson->lesson_title)?></h2>
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="margin-top: 0px">
        <div class="card-block nav-ceosim container" style="background-color: white;">

            <div class="body">
                <?php if( ($this->learninglesson->lesson_video_cloud)==1){ ?>
                <div class="video" align="center">
                    <iframe height="478" width="850" src="https://www.youtube.com/embed/<?= htmlentities($this->learninglesson->lesson_video); ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen onclick="alert(0);" ></iframe>
                </div>

                <?php }if(($this->learninglesson->lesson_video_cloud)==2){ ?>
                <div class="video" align="center">
                    <iframe src="https://player.vimeo.com/video/<?= htmlentities($this->learninglesson->lesson_video); ?>" width="850" height="478" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <?php }?>
                <br>
                <div class="row">
                    <div class="col-6" align="right">
                        
                        <button class="btnMostrar btn btn-info">Ver texto explicativo <i class="fa fa-file-text-o" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-6" align="left" >

                       <?php if($this->nextlesson != false) { ?>
                       <a class="btn btn-success" href="<?= Config::get('URL') . 'learning/leccion/' . $this->nextlesson->lesson_id .'/'. $this->learninglesson->learning_id;  ?>">Siguiente lección <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>

                       <?php } else {?>
                       
                       <a class="btn btn-success" href="<?= Config::get('URL') . 'learning/index/'  ?>">Finalizar Curso <i class="fa fa-check-circle" aria-hidden="true"></i></a>
                       <?php } ?>

                   </div>
               </div>

               <div class="destino"> 
                <p type="text"  name="lesson_text" value=""><?php echo preg_replace('/\n/','<br>', $this->learninglesson->lesson_text); ?></p>
            </div>
            
        </div>

        <!--https://www.youtube.com/embed/bbOZRUIjgRw-->
    </div>
</div>
</div>
<?php } else { ?>
<p>La pagina no existe.</p>
<?php } ?>

</div>

<script type="text/javascript">
    $(document).ready(function() {

       // $(".btnOcultar").click(function () {
         $('.destino').slideUp();
         
       // });

       $(".btnMostrar").click(function () {
        $('.destino').slideDown();
        $('.btnMostrar').slideUp();
        
        /*$.post("demo_test.asp", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });*/

    });
       

   });
</script>

<script type="text/javascript">
    $(document).ready(function() {
  //      if (".ocultarBoton") {
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

<style type="text/css">
h2{
    color: white;
}
.jumbotron h4, .jumbotron  p, .jumbotron strong{
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

</style>
</section>