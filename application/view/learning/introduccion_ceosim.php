<main class="mt-5 mb-5">
    <div class="container py-3">
        <div class="row">
            <div class="col-12 mt-4 clearfix">
                <h1 class="float-left"><i class="fa fa-graduation-cap" aria-hidden="true"></i> CEOSim E-Learning</h1>
                <a href="<?php echo Config::get('URL'); ?>learning" role="button" aria-disabled="true" class="btn btn-outline-danger float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver a los cursos</a>
            </div>
            <div class="col-12 my-4">
                <?php if ($this->esta_matriculado == true) {?>
                    <ul id="progressbar-kimgen" class="riesgos">
                        <li class="<?php if ($this->p1 == true && $this->p2 == true && $this->p3 == true && $this->p4 == true) { echo 'active';}?>">Introducción</li>
                        <li class="<?php if ($this->p5 == true && $this->p6 == true) { echo 'active';}?>">Lección 1</li>
                        <li class="<?php if ($this->p7 == true &&
                                $this->p8 == true &&
                                $this->p9 == true &&
                                $this->p10 == true &&
                                $this->p11 == true &&
                                $this->p12 == true &&
                                $this->p13 == true &&
                                $this->p14 == true) { echo 'active';}?>">Lección 2</li>
                        <li class="<?php if ($this->p15 == true && $this->p16 == true && $this->p17 == true) { echo 'active';}?>">Lección 3</li>
                    </ul>
                <?php }?>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <article>
                    <div class="card">
                        <div class="card-block nav-ceosim">
                            <h2 class="mb-3">Introducción a CEOSim</h2>
                            <h6>Objetivo</h6>
                            <p class="text-justify">El presente curso tiene como propósito otorgar conocimientos en torno a el uso de la plataforma CEOSim. </p>
                            <h6>¿Cómo se organiza este curso?</h6>
                            <p class="text-justify">El curso se estructura a partir de una introducción y tres modulos. EL CURSO ACTUALMENTE NO ESTA DISPONIBLE.</p>
                            <h6>Módulos</h6>
                            <div class="list-group">
                                <a <?php if ($this->esta_matriculado == true) { ?> href="<?php echo Config::get('URL'); ?>learning/introduccion_ceosim_modulo_1" class=" <?php } else { ?> class="disabled <?php } ?> list-group-item list-group-item-action <?php if ($this->esta_matriculado == true && $this->p1 == true) { ?> list-group-item-success <?php } ?>"> <?php if ($this->esta_matriculado == true && $this->p1 == true) { ?> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php } ?> Modulo 1: Introducción</a>
                                <a <?php if ($this->esta_matriculado == true) { ?> href="<?php echo Config::get('URL'); ?>learning/introduccion_ceosim_modulo_2" class=" <?php } else { ?> class="disabled <?php } ?> list-group-item list-group-item-action <?php if ($this->esta_matriculado == true && $this->p2 == true) { ?> list-group-item-success <?php } ?>"> <?php if ($this->esta_matriculado == true && $this->p1 == true) { ?> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php } ?> Modulo 2: Interfaz CEOSim</a>
                                <a <?php if ($this->esta_matriculado == true) { ?> href="<?php echo Config::get('URL'); ?>learning/introduccion_ceosim_modulo_3" class=" <?php } else { ?> class="disabled <?php } ?> list-group-item list-group-item-action <?php if ($this->esta_matriculado == true && $this->p3 == true) { ?> list-group-item-success <?php } ?>"> <?php if ($this->esta_matriculado == true && $this->p1 == true) { ?> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php } ?> Modulo 3: Juego, opciones y equipo</a>
                                <a <?php if ($this->esta_matriculado == true) { ?> href="<?php echo Config::get('URL'); ?>learning/introduccion_ceosim_modulo_4" class=" <?php } else { ?> class="disabled <?php } ?> list-group-item list-group-item-action <?php if ($this->esta_matriculado == true && $this->p4 == true) { ?> list-group-item-success <?php } ?>"> <?php if ($this->esta_matriculado == true && $this->p1 == true) { ?> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php } ?> Modulo 4: Recomendaciones</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-4">
                <aside>
                    <div class="card">
                        <div class="card-block nav-ceosim">
                            <?php if ($this->esta_matriculado == true) { ?>
                                <p class="text-center matriculado"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <strong>MATRICULADO</strong></p>
                            <?php } else { ?>
                                <a class="btn btn-outline-primary mx-auto d-block" id="matricular">Matricular</a>
                            <?php } ?>
                            <br>
                            <p class="text-center text-primary"><strong>INFORMACIÓN ADICIONAL</strong></p>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Duración: 1 semana.</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Estudiantes matriculados: <?= $this->total_matriculados; ?> estudiantes.</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
  </div>
</main>
<!-- /.mesaje al usuario -->

<!-- Modal mensaje de info-->
<div class="modal fade " tabindex="-1" id="modal-mensaje">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-info" id="header-mensaje">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="titulo">Mensaje</h4>
            </div>
            <div class="modal-body" id="mensaje">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer" id="botones-mensaje">
                <button type="button" id="aceptar-mnsje" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal de error-->
<div class="modal fade" tabindex="-1" id="modal-error">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-danger" id="header-error">
                <h4 class="modal-title" id="titulo-error">Mensaje</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="mensaje-error">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer" id="botones-error">
                <button type="button" id="aceptar-error" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Success-->
<div class="modal fade " tabindex="-1" id="modal-bien">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-success" id="header-bien">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="titulo-bien"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Bien hecho</h4>
            </div>
            <div class="modal-body" id="mensaje-bien">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer" id="botones-bien">
                <button type="button" id="aceptar-bien" class="btn btn-success" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php if ($this->realizo_diagnostico == false) {?>
        $("#matricular").on("click", function(){
              $("#mensaje-error").html('<p class="text-justify">El curso actualmente no esta disponible, lamentamos los inconvenientes.</p>');
              //$("#aceptar-error").html('Ir a diagnóstico');
              $("#aceptar-error").on('click', function(){
                  $("#aceptar-error").html('Aceptar');
                  //window.location.href = "<?php echo Config::get('URL'); ?>learning/introduccion_ceosim_diagnostico";
              });
              $("#modal-error").modal('show');
        });
	<?php }?>
</script>