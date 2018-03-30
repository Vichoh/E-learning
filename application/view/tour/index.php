<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost/game/dashboard -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CEOSim</title>
        <link rel="icon" type="image/png" href="<?php echo Config::get('URL'); ?>/fav/favicon-16x16.png" />
        <meta charset="utf-8">
        <link rel="icon" href="data:;base64,=">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <!-- Librerias dashboard-->
        <!-- añadir un if para que se carguen solo cuando este en el juego o cuando se necesiten los gráficos -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        
        <script src="https://code.highcharts.com/modules/treemap.js"></script>
        <script src="https://code.highcharts.com/modules/funnel.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <!--FIN dashboard-->
        <style>
        body{
        background-color: #f1f1f1;
        }
        h1, h2, h3, h5,h6{
        color:#8a2223;
        }
        .ceosim-subtitle{color:#a22f25;background: #ffdf5a;padding: 12px;text-transform:uppercase;font-size:15px;border-left:5px solid #ff782b;}
        
        .bg-rojo{
        background-color: #8a2223;
        }
        .txt-amarillo{
        color: #ffe05c;
        }
        .txt-blanco{
        color: white;
        }
        .txt-rojo{
        color: #A22F25;
        }
        .bg-gris{
        background-color: #F3F3F3;
        }
        .mb-naranjo{
        border-bottom:2px solid #ffae04;
        }
        .bb-amarillo{
        border-bottom:2px solid #ffe05c;
        }
        
        .mg-naranjo{
        background-color: #FFCB5D;
        }
        .lead{
        color:#ffae04;
        font-weight: 600;
        }
        .enphasis{
        background-color: #e7e7e7;
        }
        .btn-redondo{
        border-radius: 24px;
        }
        #navbarPrincipal ul li a, .nav-ceosim ul li a{
        color:#fff;
        }
        .nav-ceosim ul li a.active, .nav-ceosim ul li a:hover{
        color:#fff !important;
        border-color:#fff !important;
        }
        .nav-ceosim ul li a.active{
        background-color: #2F7C98 !important;
        }
        .alert-info{
        background-color: #f5f5f5;
        border-color: #f5f5f5;
        border-top: 2px solid #8a2223;
        color: #000;
        }
        .marketBox:hover{
        box-shadow: 0 0 5px grey;
        }
        .listagrupo-active{
        background-color: #e4c646 !important;
        }
        .input-calc{
        margin: 0;
        padding: 0 !important;
        border-collapse: collapse;
        height: 100%;
        position: relative;
        }
        .input-calc-indicador{
        margin: 0;
        padding: 0 !important;
        border-collapse: collapse;
        height: 100%;
        position: relative;
        }
        .input-calc:before{
        content: 'M$';
        display: inline;
        position: absolute;
        top: calc(50% - 7px);
        left: 5px;
        font-size: 11px;
        opacity: 0.5;
        }
        .input-calc-indicador:before{
        display: inline;
        position: absolute;
        top: calc(50% - 7px);
        left: 5px;
        font-size: 11px;
        opacity: 0.5;
        }
        .input-calc input[type="number"] {
        border: none;
        width: 100%;
        min-width: 110px;
        padding: 15px;
        margin: 0px;
        display: inline-block;
        text-align: right;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        height: 100%;
        }
        .input-calc-indicador input[type="number"] {
        border: none;
        width: 100%;
        min-width: 110px;
        padding: 15px;
        margin: 0px;
        display: inline-block;
        text-align: right;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        height: 100%;
        }
        .img-teams{
        width: 40px;
        }
        header {
    
    padding-bottom: 5%;
}
        .img-circle{
        border-radius: 50%;
        vertical-align: middle;
        }
        .fondo-tiempo{
        background-image: url(http://localhost/game/img/timer-icon.png);
        background-repeat: no-repeat;
        background-size: contain;
        }
        .w-35{
        width: 35%;
        }
        </style>
        <style>
        /* Popover */
        .popover {
        border: 2px solid #2F7C98;
        }
        /* Popover Header */
        .popover-title {
        background-color: #2F7C98;
        color: white;
        font-size: 22px;
        text-align:center;
        }
        /* Popover Body */
        .popover-content {
        background-color: #f5f5f5;
        color: black;
        padding: 25px;
        }
        /* Popover Arrow */
        .arrow {
        border-right-color: #d9534f !important;
        }
        .contenedor{
        width:90px;
        height:240px;
        position:absolute;
        left:0px;
        bottom:0px;
        }
        .botonF1{
        width:60px;
        height:60px;
        border-radius:100%;
        background:#F44336;
        left: 0;
        bottom:0;
        position:fixed;
        margin-left: 16px;
        margin-bottom:16px;
        border:none;
        outline:none;
        color:#FFF;
        font-size:20px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        transition:.3s;
        float: left;
        z-index: 2;
        }
        span{
        transition:.5s;
        }
        .botonF1:hover span{
        transform:rotate(360deg);
        }
        .botonF1:active{
        transform:scale(1.1);
        }
        </style>
        <style>
        .arrow {
        width: 0; height: 0;
        line-height: 0;
        border-left: 12px solid transparent;
        border-top: 10px solid #c8c8c8;
        top: 104%;
        left: 0;
        position: absolute;
        }
        .match-game{
        cursor:pointer;
        color: #2F7C98;
        background-color: #d9edf7;
        padding:1px 1px;
        background-image: url(public/img/game-controller-icon.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right;
        border: none !important;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        color: white;
        }
        .match-game:hover{
        cursor:pointer;
        background-color: #b3d1e0;
        }
        .match-tracing{
        cursor:pointer;
        background-color: #37a0c9;
        color: #2F7C98;
        padding:1px 1px;
        background-image: url(img/game-controller-icon.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right;
        border: none !important;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        color: white;
        }
        .match-tracing:hover {
        background-color: #00639e;
        color: white;
        }
        html{ 
    position: relative; 
    min-height: 100%;
}
section{
    
    padding-bottom: 5%;
}
        .badge {
        background: #e3e3e3;
        background: -moz-linear-gradient(top, #e3e3e3, #c8c8c8);
        background: -webkit-gradient(linear, left top, left bottom, from(#e3e3e3), to(#c8c8c8));
        margin-top: 0;
        height: 25px;
        padding-bottom: 0;
        position: relative;
        border-right: 1px #e4e5e7;
        
        -moz-box-shadow: 1px 1px 3px #292929;
        -webkit-box-shadow: 1px 1px 3px #292929;
        box-shadow: 1px 1px 3px #292929;
        
        color: #454545;
        text-shadow: 0 1px 0 white;
        }
        .matchBottom{
        border-bottom: 1px solid white;
        border-height: 1;
        border-width: 100%;
        }
        .row .leftMatch {
        border-right: 1px solid white;
        border-height: 1;
        }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <button class="botonF1 bg-success" onclick="exit()">
            <span class="text-white" >SKIP</span>
            </button>
        </div>
        <header id="head">
            <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-primary text-white" id="navPrincipal">
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarPrincipal" aria-controls="navbarPrincipal" aria-expanded="false" aria-label="mostrar navegación">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost/game/dashboard">
                        <img src="<?php echo Config::get('URL');?>img/ceosim_h.png" height="32" alt="logo CEOSim" title="CEOSim">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarPrincipal">
                        <ul class="navbar-nav mr-auto" style="width:100%;">
                            
                            <li class="nav-item ml-auto">
                                <a class="nav-link" href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Panel de usuario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-lock" aria-hidden="true"></i> Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="row">
        <section class="col-3 ml-3 mt-5">
                <div class="card text-center bg-info">
                    <div class="text-center pt-2 image_wrapper">
                        <?php if (Config::get('USE_GRAVATAR')) { ?>
                            <img alt="Avatar" class="img-circle text-center" src='<?= $this->user_gravatar_image_url; ?>' style="height: 200px; width: 200px"/>='<?= $this->user_avatar_file; ?>'/>
                            <?php } else { ?>
                            <a href=""><img alt="Avatar" class="img-circle text-center image" src="<?php echo Config::get('URL');?>avatars/user.png" style="height: 200px; width: 200px"/></a>
                            <?php } ?>
                            <a href=""><button type="button" class="btn btn-info mt-1" style="width: 40%">Editar Perfil</button></a>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Juanito</h4>
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
        <section class="mt-5  col ">
            <?php $this->renderFeedbackMessages(); ?>
            <div class="container-fluid">
                <div class="row">
                    <section class="col">
                        <div class="">
                            <div class=" nav-ceosim">
                                <ul class="nav nav-tabs bg-info text-white" role="tablist">
                                    <li class="nav-item ">
                                        <a class="nav-link active " href="http://localhost/game/dashboard#games" data-toggle="tab" role="tab"><i class="fa fa-fw fa-gamepad"></i> Partidas a jugar</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="games" role="tabpanel">
                                        <hr>
                                        <div class="match-game text-white rounded mt-3 ml-1" data-match="53" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Detalle de Partida" data-content="<p>Una partida es una simulación de un mercado específico configurada por el número de rondas y la duración de estas. Las partidas son enviadas a todos los equipos invitados.</p><button class='btn btn-default mr-4' id='anterior'>Anterior</button><button class='btn btn-primary' id='segundopaso' onclick='redirect()'>Siguiente</button>" id="primerpasopop" data-html="true">
                                        <div class="row  pb-0" >
                                            <div class="col-3 leftMatch w-100 pb-2 pl-0">
                                                <div class="badge text-primary mt-2 pt-2 w-100 pb-2 pl-5 pr-5">
                                                    <i class="fa fa-fw fa-play-circle-o"></i> En Curso<span class="arrow"></span>
                                                </div>
                                                <hr class="matchBottom ml-4 w-100">
                                                <ul class="list-inline text-center text-uppercase">
                                                    <li class="text-primary list-inline-item"><i class="fa fa-fw fa-users"></i> Partida </li>
                                                </ul>
                                            </div>
                                            <div class="col-9 rightMatch w-100 pb-2 pl-0">
                                                <ul class="list-inline text-primary text-center pt-2">
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-calendar"></i>04/09/2017 19:43:47</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-flag"></i> 12 Rondas</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-clock-o"></i> 1 min.</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-users"></i> 4 Equipos</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-trophy"></i> Avanzado</li>
                                                </ul>
                                                <hr class="matchBottom mr-4" style="margin-top: 2.4%">
                                                <ul class="list-inline text-primary text-center text-uppercase">
                                                    
                                                    <li class="list-inline-item text-primary">
                                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Mercado Tecnológico - High End Smartphone</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="match-game text-white rounded  marketBox mt-3 ml-1" data-match="51">
                                        <div class="row pb-0">
                                            <div class="col-3 leftMatch w-100 pb-2 pl-0">
                                                <div class="badge text-primary mt-2 pt-2 w-100 pb-2 pl-5 pr-5">
                                                    <i class="fa fa-fw fa-play-circle-o"></i> En curso<span class="arrow"></span>
                                                </div>
                                                <hr class="matchBottom ml-4 w-100">
                                                <ul class="list-inline text-primary text-center text-uppercase">
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-users"></i> Iron Man</li>
                                                </ul>
                                            </div>
                                            <div class="col-9 rightMatch w-100 pb-2 pl-0">
                                                <ul class="list-inline text-primary text-center pt-2">
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-calendar"></i>24/08/2017 17:48:23</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-flag"></i> 12 Rondas</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-clock-o"></i> 1 min.</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-users"></i> 4 Equipos</li>
                                                    <li class="list-inline-item"><i class="fa fa-fw fa-trophy"></i> Avanzado</li>
                                                </ul>
                                                <hr class="matchBottom mr-4" style="margin-top: 2.4%">
                                                <ul class="list-inline text-center text-uppercase">
                                                    
                                                    <li class="list-inline-item text-primary ">
                                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Mercado Tecnológico - High End Smartphone</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                    $(".match-game").click(function(){
                                    var Id = $(this).data( "match" );
                                    window.location = 'http://localhost/game/match/game/' + Id;
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
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
    .learning-tour:hover {
    background-color: #F28932;
    color: black;
    cursor: pointer;
    
}
.learning-tour {
background-color: #EF6C00;
-webkit-transition: .5s;
    transition: .5s;
}
.tutorial-tour{
background-color: #c2185b;
-webkit-transition: .5s;
    transition: .5s;
}
.tutorial-tour:hover {
    background-color: #d81b60;
    color: black;
    cursor: pointer;
    
    }

    #clicked {clear:both;}
    </style>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalBienvenida">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header popover-title" style="background-color: #2F7C98;">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="card-block">
                        <!--<div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/TKBQNtD23yQ?rel=0&showinfo=0" allowfullscreen="allowfullscreen"></iframe>
                        </div>-->
                        
                        <div class="mb-3 p-0" align="center">
                            <img alt="CEOSIM" class="text-center image" src="<?php echo Config::get('URL');?>img/Bienvenida.png" style="width: 430px; height: 200px;"/>
                            </div>
                        <div class="row">
                        <div class="col-6">
                        <a href="<?php echo Config::get('URL'); ?>learning" style="text-decoration: none;">
                        <div class="card text-white learning-tour" >
                            <h4 class="display-4 pl-2" style="font-size: 30px;"> E-learning <i class="fa fa-graduation-cap"></i></h4>
                        </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a id="primerpaso">
                        <div class="card text-white tutorial-tour">
                            <h4 class="display-4 pl-2" style="font-size: 30px;"> Tutorial <i class="fa fa-arrow-circle-right"></i></i></h4>
                        </div>
                        </a>
                    </div>
                </div>
                        <div></div>
                        <p class="text-center bolt" style="color:#939292"><b>Comienza tu experiencia en CEOSIM escogiendo nuestra plataforma de capacitación o el tutorial de simulación.</b></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo Config::get('URL'); ?>tour/endtutorial">No preguntar más</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="exit()">skip</button>
                </div>
            </div>
        </div>
    </div>
    <footer id="foot" style=" bottom:0; height: 5%; width: 100%;margin-top: 5px; padding-top: 10px; position: absolute !important; padding-bottom: 0px; box-shadow: 0px -2px 5px #bdbdbd;">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
            <div class="col-6">
                © 2018 Nueva Gestión | ...
            </div>
            <div class="col-3 ">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3b5998;" href="https://www.facebook.com/ceosim.cl/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #2ECCFA;" href="https://twitter.com/CEOsim_Chile"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: red;" href="https://www.youtube.com/channel/UC1C8wXqh3Mx_8Jm4WHG6-Yg"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
    $( document ).ready(function() {
    $('#modalBienvenida').modal('show');
    // $('[data-toggle="popover"]').popover();
    });
    $( "#primerpaso" ).click(function() {
    $('#modalBienvenida').modal('hide');
    $('#primerpasopop').popover('show');
    $("#anterior").click(function() {
    console.log("holiii")
    $('#primerpasopop').popover('hide');
    $('#modalBienvenida').modal('show');
    });
    });
    function redirect(){
    $(location).attr('href', '<?php echo Config::get('URL'); ?>tour/match');
    }
    function exit(){
    $(location).attr('href', '<?php echo Config::get('URL'); ?>dashboard');
    }
    function endTutorial(){
    }
    </script>
</body>
</html>