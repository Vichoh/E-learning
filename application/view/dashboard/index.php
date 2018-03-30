<section class="mt-5">
    <div class="container-fluid">
        <?php $this->renderFeedbackMessages(); ?>
        <div class="row mt-3 pt-5">
            <section class="col-xl-3 col-lg-3 col-md-12">
                <div class="card text-center bg-info">
                    <div class="text-center pt-2 image_wrapper">
                        <?php if (Config::get('USE_GRAVATAR')) { ?>
                            <img alt="Avatar" class="img-circle text-center" src='<?= $this->user_gravatar_image_url; ?>' style="height: 200px; width: 200px"/>='<?= $this->user_avatar_file; ?>'/>
                            <?php } else { ?>
                            <a href="<?= Config::get('URL') . 'profile/showProfile/' . htmlentities($this->user_id); ?>"><img alt="Avatar" class="img-circle text-center image" src='<?= $this->user_avatar_file; ?>' style="height: 200px; width: 200px"/></a>
                            <?php } ?>
                            <a href="<?= Config::get('URL') . 'profile/showProfile/' . htmlentities($this->user_id); ?>"><button type="button" class="btn btn-info mt-1" style="width: 40%">Editar Perfil</button></a>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $this->user_name; ?></h4>
                            <hr class="style13" width="90%">
                        </div>

                        <div class="text-center text-white pb-2 ">
                        <?php if (empty($this->user_sentence)){ ?>
                         <p class="text-justify text-white mr-4 text-center" style="font-size: 17px; background-color: transparent;" >¿Y como te describes?</p>
                        <?php } ?>
                        <?php if (!empty($this->user_sentence)){ ?>
                         <p class="text-justify text-white mr-4 text-center" style="font-size: 17px; background-color: transparent;" ><?php echo $this->user_sentence; ?></p>
                        <?php } ?>
                            <!--<p>Horas autónimas</p>-->   
                        </div>
                    </div>
                </section>
                <section class="col">
                    <div class="">
                        <div class="card-block nav-ceosim p-0">
                            <ul class="nav nav-tabs bg-info" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#dashboard" data-toggle="tab" role="tab"><i class="fa fa-pie-chart"></i> Estadisticas</a>
                                </li>
                               
                          

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php if ($this->user_level > 1) { ?>
                                <div class="tab-pane " id="matchs" role="tabpanel">
                                    <div class="mt-2 text-center">
                                        <i class="fa fa-filter fa-lg" aria-hidden="true" style="color: #D6D6D6;"></i>
                                        <span style="color: #D6D6D6; font-size: 15px;">
                                            <strong class="pr-2">Filtrar </strong>
                                        </span>
                                        <button id="matchAdmin" class="btn btn-info" data-view="end">Finalizadas</button>
                                    </div>
                                    <div class="game-matches" id="matches">
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="groups" role="tabpanel">
                                     <div class="mt-2 text-center">
                                        <a class="btn btn-success text-right" href="<?php echo Config::get('URL'); ?>group/nuevo"><i class="fa fa fa-users "></i>Crear Curso</a>
                                    </div>
                                    <br>
                                    <?php if ($this->groups) { ?>
                                    <div class="row text-center text-white col-12 m-0 p-0">

                                        <?php for($i=0; $i<count($this->groups); $i++) { ?>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 style-tarjetas rounded bd-white  pb-2 mb-2 pl-0 pr-0 marketBox card-mHeight">
                                            <p class="text-center m-0 pt-2 pl-2 pr-2  p-mHeight trunc" ><?php echo htmlentities($this->groups[$i]['name']); ?></p>
                                             <p class="text-center m-0  pt-2 trunc"><?php echo htmlentities($this->groups[$i]['licence_name']); ?></p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " ><i class="fa fa-user-circle " aria-hidden="true" data-toggle="tooltip" title="Estudiantes" data-placement="left"></i> <?php  echo htmlentities($this->groups[$i]['user_count']); ?></h1>
                                            <a class="btn btn-primary pull-lefts mb-2" href="<?php echo Config::get('URL'); ?>team/selectTeam/<?php echo htmlentities($this->groups[$i]['id_group']); ?>"><i class="fa fa-cog text-black"></i></a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalEliminarCurso"><i class="fa fa-trash text-black"></i>
                                            </button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalEliminarCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Curso</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    ¿Está seguro de que desea eliminar permanentemente el curso?
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-primary text-white" href="<?php echo Config::get('URL'); ?>group/deleteGroup/<?php echo htmlentities($this->groups[$i]['id_group']); ?>">Eliminar</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php } else { ?>
                                        <div class="alert alert-info mt-3" role="alert">No has creado cursos Todavía.</div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <div class="tab-pane active" id="dashboard" role="tabpanel">
                                    <div class="row text-center text-white col-12 mt-2">
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2">Nº Simulaciones</p>
                                            <h1 class="text-center m-0 mb-3 mt-2" > <?php echo $this->estadisticas->user_numero_simulaciones; ?></h1>
                                        </div>
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 ">Ranking</p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " > <?php echo $this->estadisticas->user_ranking; ?></h1>
                                        </div>
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 ">Nº Rondas</p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " > <?php echo $this->estadisticas->user_round; ?></h1>
                                        </div>
                                         <?php if (!empty($this->estadisticas->user_time)){ ?>
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 ">Total Tiempo Simulado</p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " > <?php echo $this->estadisticas->user_timeTransform; ?></h1>
                                        </div>
                                         <?php } ?>
                                        <?php if (empty($this->estadisticas->user_time)){ ?>
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 ">Total Tiempo Simulado</p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " > 00:00</h1>
                                        </div>
                                        <?php } ?>
                                        <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 "> Puntos</p>
                                            <h1 class="text-center m-0 mb-3 mt-2 " > <?php echo $this->estadisticas->user_point; ?></h1>
                                        </div>
                                         <div class="col-6 style-tarjetas bd-white pt-2 pb-2 mb-2 pl-0 pr-0 marketBox">
                                            <p class="text-center m-0 pt-2 ">Mejor Puntaje</p>
                                            <h1 class="text-center m-0 mb-3 mt-2" > <?php echo $this->estadisticas->user_higher_score; ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="teams" role="tabpanel">
                                    <div class="mt-2 text-center">

                                        <a class="btn btn-success text-right" href="<?php echo Config::get('URL'); ?>group/showAllCourse">Unirme a nuevo equipo</a>

                                    </div>
                                    <div class="row text-center text-white col-12 mt-2">
                                    <hr>
                                        <?php if ($this->teams_user) { ?>
                                        <div class="row text-center text-white col-12 m-0 p-0">
                                            <?php for($i=0; $i<count($this->teams_user); $i++) { ?>
                                            <div class="col-4 style-tarjetas rounded bd-white  pb-2 mb-2 pl-0 pr-0 marketBox card-mHeight">

                                                <h3 class="text-center m-0 pt-2 trunc"> <?php echo htmlentities($this->teams_user[$i]->name_team); ?></h3>
                                                <p class="text-center m-0 pt-2 trunc"><?php echo htmlentities($this->teams_user[$i]->first_name); ?>  <?php echo htmlentities($this->teams_user[$i]->last_name); ?></p>
                                               <!--  <p class="text-center m-0 pt-2 "><?php echo htmlentities($this->teams_user[$i]->licence_key); ?></p> -->
                                                <p class="text-center m-0 pt-2 trunc"><?php echo htmlentities($this->teams_user[$i]->name); ?></p>

                                                <h1 class="text-center m-0 mb-3 mt-2 " ><i class="fa fa-user-circle " aria-hidden="true" data-toggle="tooltip" title="<?php echo htmlentities($this->teams_user[$i]->id_team); ?>" data-placement="left"></i> </h1>
                                                <a class="btn btn-secondary pull-lefts mb-2" href="#" style="display: none"><i class="fa fa-cog text-white"></i></a>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <?php } else { ?>
                                            <div class="alert alert-info mt-3 text-center" role="alert">No estas en ningun equipo.</div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane " id="games" role="tabpanel">
                                    <div class="mt-2 text-center">
                                        <i class="fa fa-filter fa-lg" aria-hidden="true" style="color: #D6D6D6;"></i>
                                        <span style="color: #D6D6D6; font-size: 15px;">
                                            <strong class="pr-2">Filtrar </strong>
                                        </span>
                                        <button id="matchGame" class="btn btn-info" data-view="play">En Juego</button>
                                    </div>
                                    <hr>
                                    <div class="game-matches" id="gamesMatches">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
    #clicked {clear:both;}
</style>
<script type="text/javascript">
    var appUrl = '<?php echo Config::get('URL'); ?>';
    $( document ).ready(function() {
        $("#matchAdmin").on("click", function(){
            var view = $("#matchAdmin").data("view");

            if (view == "play"){
                $("#matchAdmin").data("view", "end");
                $("#matchAdmin").html("Finalizadas");
                view = "end";
            }
            else{
                $("#matchAdmin").data("view", "play");
                $("#matchAdmin").html("En Juego");
                view = "play";
            }

            $('#matches').empty();

            $.getJSON(appUrl + "match/getAllAdminMatch/" + view, function (data) {

                var state, div = "", img = "", contador = 0;

                $.each(data, function (key, val) {
                    if(val.state==0){
                        state = "En Juego";
                    }
                    else if(val.state==1){
                        state = "Pausada";
                    }
                    else{
                        state = "Finalizada";
                    }

                    var date = new Date(val.match_start*1000);

                    div += '<div class="match-game rounded marketBox mt-3 ml-1" data-match="'+val.id_match+'" onclick="tracing('+val.id_match+')"><div class="row pb-0" style=""><table><tr style="width: 35%; border-bottom: 1px solid white"><td class="pr-2" style="width: 35%; border-right: 1px solid white"><div class="badge pt-1 text-primary w-100 pb-2 pl-5 pr-5 "><i class="fa fa-fw fa-play-circle-o"></i> '+state+' <span class="arrow"></span></div></td><td class="text-center text-primary" ><ul class="pt-2"><li class="list-inline-item"><i class="fa fa-fw fa-calendar"></i>'+ date.toGMTString() +'</li><li class="list-inline-item"><i class="fa fa-fw fa-flag"></i>'+val.rounds+' Rondas</li><li class="list-inline-item"><i class="fa fa-fw fa-clock-o"></i>'+val.round_length+' min.</li><li class="list-inline-item"><i class="fa fa-fw fa-users"></i>'+val.teams_total+' Equipos</li><li class="list-inline-item"><i class="fa fa-fw fa-trophy"></i> '+val.market_diff+'</li></ul></td></tr><tr><td class="pr-2 pt-2 pb-2 text-primary text-center" style="width: 35%; border-right: 1px solid white">';

                    for (var j = 0; j < val.teams.length; j++) {
                        img += '<img class="img-circle img-teams" src="<?php echo Config::get('URL'); ?>img/users_example.png" data-toggle="tooltip" data-placement="top"  title="'+val.teams[j].name+'"/>';
                    }

                    div += img + '</td><td class="text-center text-primary" style=""><ul class="pt-2"><li class="list-inline-item"><i class="fa fa-cart-plus"></i> '+val.market_name+' - ' +val.market_desc+'</li></ul></td></tr></table></div></div>';

                    img ="";
                    contador++;
                });

                if (contador == 0){
                    div = '<div class="alert alert-info mt-3" role="alert">No has creado simulaciones.</div>';
                }

                $('#matches').html(div);
            });
        });

        $("#matchAdmin").trigger("click");
        $('[data-toggle="tooltip"]').tooltip(); 
    });

    function tracing(id){
        $('.ceosim-img').fadeIn(500);
        
        var urlSend = '<?php echo Config::get('URL'); ?>match/admin/' + id;
        window.location.href = urlSend;
    }

    function matchGame(id){
        $('.ceosim-img').fadeIn(500);
        var urlSend = '<?php echo Config::get('URL'); ?>match/game/' + id;
        window.location.href = urlSend;
    }
</script>
<script src="<?php echo Config::get('URL'); ?>js/dashboard.socket.js"></script>