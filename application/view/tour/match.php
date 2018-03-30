<html>
<head>
    <title>CEOSim</title>
    <link rel="icon" type="image/png" href="http://localhost/game//fav/favicon-16x16.png">
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
        background-color: #fff;
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
    .bg-azul{
        background-color:  #0275D8;
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
        border-color:#fff!important;
    }
    .nav-ceosim ul li a.active{
        background-color: #2F7C98 !important;
    }
    .alert-info{
        background-color: #d9edf7;
        border-color: #bcdff1;
        
        color: #31708f;
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
    .img-circle{
        border-radius: 50%;
        vertical-align: middle;
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
.popover #segundopasopop{
    top: 10000px !important;
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
</head>
<body>
    <div class="contenedor" z-index=1>
        <button class="botonF1 bg-success" onclick="exit()">
            <span class="text-white">SKIP</span>
        </button>
    </div>
    <header id="head">
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-primary text-white bd-info text-white" id="navPrincipal">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarPrincipal" aria-controls="navbarPrincipal" aria-expanded="false" aria-label="mostrar navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Config::get('URL'); ?>dashboard">
                    <img src="<?php echo Config::get('URL'); ?>img/ceosim_h.png" height="32" alt="logo CEOSim" title="CEOSim">
                </a>
                <div class="collapse navbar-collapse" id="navbarPrincipal">
                    <ul class="navbar-nav mr-auto " style="width:100%;" >
                        <li class="nav-item ml-auto finalstep">
                            <a class="nav-link" href=""><i class="fa fa-gamepad" aria-hidden="true"></i> Panel de usuario</a>
                        </li>
                        <div class="finalstep" data-container="body" data-toggle="popover" data-title="Panel" data-placement="bottom" data-content="<p>Puedes seleccionar “Panel de Usuario” para volver al listado de las partidas a las que has sido invitado y seleccionar “Salir” para cerrar sesión.</p><button class='btn btn-default mr-4' id='septimoant' onclick='septimoant()'>Anterior</button><button class='btn btn-primary' id='final' onclick='final()'>Finalizar</button>" id="octavopasopop" data-html="true"></div>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-lock" aria-hidden="true"></i> Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <style>
    .btn-animate{
        background:linear-gradient(to right, #9E008B 0%, #8500FD 50%, #0275d8 100%);
        display: inline-block;
        border-radius: 4px;
        overflow: hidden;
        transform: translate3d(0, 0, 0);
        z-index: 1;
        transition: background 2s;
        color:#8c00dd;
    }
    .btn-animate:hover{
        background:linear-gradient(135deg, rgb(80, 115, 184) 0%, rgb(19, 167, 147) 36%, rgb(7, 179, 155) 81%, rgb(109, 186, 130) 100%) !important;
    }
    .btn-animate:before {
        box-sizing: border-box;
        content: "";
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        background: #ffe05c;
        position: absolute;
        top: 2px;
        left: 2px;
        border-radius: 2px;
        z-index: -1;
    }
    .btn-animate:after {
        box-sizing: border-box;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: block;
        transition: all .4s ease-out;
        background: linear-gradient(to right, #9E008B 0%, #8500FD 50%, #0275d8 100%);
        z-index: -3;
        opacity: 0;
    }
    .datosGuardados{
        position: absolute;
        top: -40px;
        left: 35%;
        width: 300px;
        height: 40px;
        background: linear-gradient(135deg, rgb(80, 115, 184) 0%, rgb(19, 167, 147) 36%, rgb(7, 179, 155) 81%, rgb(109, 186, 130) 100%);
        color: #FFF;
        border-radius: 10px;
        padding: 6px;
        text-align: center;
        z-index: 100000;
        transition: top 2s;
    }
    .datosGuardados-40 {
        top: 40px;
    }
    .puntajes{

        margin-bottom: 5px;
        margin-top: 5px;
        padding-bottom: 0px;
        padding-top: 0px;

    }
    .row.no-gutters {
        margin-right: 0;
        margin-left: 0;
        height: auto;
        & > [class^="col-"],
        & > [class*=" col-"] {
            padding-right: 0;
            padding-left: 0;
        }
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
            height: auto;
            & > [class^="but-a"],
            & > [class*="but-a"] {
                padding-right: 0;
                padding-left: 0;
            }
        }
    </style>
    <section class="mt-5 mb-5">
        <div class="container-fluid">
            <div class="row mt-3 pt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-block nav-ceosim" id="fistStep">
                            <ul class="nav nav-tabs bg-info bd-info text-white" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#marketing" data-toggle="tab" role="tab"><i class="fa fa-fw fa-line-chart"></i> Marketing</a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="#" data-toggle="tab" role="tab"><i class="fa fa-fw fa-shopping-cart"></i> Finanzas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" role="tab"><i class="fa fa-fw fa-industry"></i> Producción</a>
                                </li>
                                <li class="nav-item" data-container="body" data-toggle="popover" data-title="Módulo de Decisiones" data-placement="right" data-content="<p>Son los módulos relacionados con tu empresa simulada, puedes dividir funciones en tu equipo y tomar decisiones por módulos.</p><button class='btn btn-default mr-4' id='volver' onclick='volver()'>Anterior</button><button class='btn btn-primary' id='segundopaso' onclick='segundopaso()'>Siguiente</button>" id="primerpasopop" data-html="true">
                                    <a class="nav-link" href="#" data-toggle="tab" role="tab"><i class="fa fa-fw fa-graduation-cap"></i> I+D</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="marketing" role="tabpanel" >
                                    <div class="alert alert-info mt-3" role="alert" data-container="body" data-title="Video ayuda por módulo" data-toggle="popover" data-placement="right" data-content="<p>Este vídeo te ayudará a entender lo que debes hacer en cada módulo y plasmar tu estrategia.</p><button class='btn btn-default mr-4' id='tercerant' onclick='tercerant()'>Anterior</button><button class='btn btn-primary' id='quintopaso' onclick='quintopaso()'>Siguiente</button>" id="cuartopasopop" data-html="true">
                                        <span class="rounded-circle bg-success float-right p-3 text-white marketBox" name="video" data-id="marketing"><i class="fa fa-fw fa-play"></i></span>El departamento de Marketing tiene como objetivo posicionar nuestro producto a través de la segmentación de mercado, privilegiando satisfacer las necesidades de nuestros clientes.</div>
                                        <hr>
                                        <div class="nav-ceosim">
                                            <ul class="nav nav-tabs bg-info bd-info text-white" role="tablist" data-container="body" data-toggle="popover" data-placement="right" data-title="Panel de decisiones" data-content="<p>Cada módulo tiene un panel de decisiones y un dashboard para mejorar el análisis de la información. Selecciona “Guardar” cada vez que realices un cambio.</p><button class='btn btn-default mr-4' id='cuartoant' onclick='cuartoant()'>Anterior</button><button class='btn btn-primary' id='sextopaso' onclick='sextopaso()'>Siguiente</button>" id="quintopasopop" data-html="true">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#marketing-decisiones" data-toggle="tab" role="tab"><i class="fa fa-calculator" aria-hidden="true"></i> Decisiones</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#marketing-dashboard" onclick="getDashboardMarketing()" data-toggle="tab" role="tab"><i class="fa fa-pie-chart" aria-hidden="true"></i> Dashboard</a>
                                                </li>

                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active " id="marketing-decisiones" role="tabpanel">
                                                    <div class="row mr-2 ml-2 mt-3">
                                                        <div class="col-4 bd-primary pl-0 pr-0">
                                                            <h5 class="bg-primary text-white  pt-2 pb-2 pl-2 pr-2">MARKETING</h5>
                                                            <div class="form-group mt-2 ml-4 mr-4">
                                                                <label for="CO01">Precio de Venta</label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <div class="input-group-addon">$</div>
                                                                    <input type="text" class="form-control" id="" value="500.000">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-2 ml-4 mr-4">
                                                                <label for="CO04Random">Pronostico Ventas (referencia)</label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <div class="input-group-addon">Unid.</div>
                                                                    <input type="number" class="form-control" placeholder="96.523" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-2 ml-4 mr-4">
                                                                <label for="CO05">Pronostico de Ventas</label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <div class="input-group-addon">Unid.</div>
                                                                    <input type="text" class="form-control" value="100.000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 bd-primary pl-0 pr-0">
                                                            <h5 class="bg-primary text-white pt-2 pb-2 pl-2 pr-2 mb-0">Presupuestos</h5>
                                                            <div class="card-block nav-ceosim mt-0">
                                                                <ul class="nav nav-tabs bg-info bd-info text-white" role="tablist" style="width: 100%">
                                                                    <li class="nav-item" style="width: 50%">
                                                                        <a class="nav-link active" href="#ppromocion" data-toggle="tab" role="tab"><i class="fa fa-fw fa-line-chart"></i> Presupuesto Promoción</a>
                                                                    </li>
                                                                    <li class="nav-item" style="width: 50%">
                                                                        <a class="nav-link" href="#pventas" data-toggle="tab" role="tab"><i class="fa fa-fw fa-shopping-cart"></i> Presupuesto Ventas</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="ppromocion" role="tabpanel">
                                                                        <div class="form-group mt-2 ml-4 mr-4">
                                                                            <label for="CO02">Presupuesto de Promoción</label>
                                                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                                <div class="input-group-addon">M$</div>
                                                                                <input type="text" class="form-control" value="5.000.000" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-2 ml-4 mr-4">
                                                                            <label>Presupuestado Finanzas</label>
                                                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                                <div class="input-group-addon">M$</div>
                                                                                <input type="text" class="form-control" value="5.000.000" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center mb-2 ml-4 mr-4">
                                                                            <button class="btn btn-outline-warning" id="verPresupuestoPromocion">Asignar presupuestos</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="pventas" role="tabpanel">
                                                                        <div class="form-group mt-2 ml-4 mr-4">
                                                                            <label for="CO03">Presupuesto de Ventas</label>
                                                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                                <div class="input-group-addon">M$</div>
                                                                                <input type="text" class="form-control" value="5.000.000" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-2 ml-4 mr-4">
                                                                            <label>Presupuestado Finanzas</label>
                                                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                                <div class="input-group-addon">M$</div>
                                                                                <input type="text" class="form-control" value="5.000.000" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center mb-2 ml-4 mr-4">
                                                                            <button class="btn btn-outline-warning" id="verPresupuestoVentas">Asignar presupuestos</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row mr-2 ml-2 mt-3">
                                                        <div class="col-12 bd-primary pl-0 pr-0">
                                                            <h5 class="bg-primary text-white pt-2 pb-2 pl-2 pr-2">RESUMEN ÁREA DE MARKETING</h5>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mt-2 ml-4 mr-4">
                                                                        <label for="exampleSelect2">Pronóstico Ingresos Brutos</label>
                                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                            <div class="input-group-addon">M$</div>
                                                                            <input type="text" class="form-control" value="50.000.000" readonly="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-2 ml-4 mr-4">
                                                                        <label for="exampleSelect2">Pronóstico de Costos Variables</label>
                                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                            <div class="input-group-addon">M$</div>
                                                                            <input type="text" class="form-control" id="" value="14.607.000" readonly="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-2 ml-4 mr-4">
                                                                        <label for="exampleSelect2">Pronóstico de Costos Fijos</label>
                                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                            <div class="input-group-addon">M$</div>
                                                                            <input type="text" class="form-control" id="" value="927.000" readonly="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mt-2 ml-4 mr-4">
                                                                        <label for="exampleSelect2">Pronóstico Margen Contribución</label>
                                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                            <div class="input-group-addon">M$</div>
                                                                            <input type="text" class="form-control" id="CO08SIM" value="34.466.000" readonly="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-2 ml-4 mr-4">
                                                                        <label for="exampleSelect2">Margen (Menos Promoción, PPTO. Ventas y distribución)</label>
                                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                            <div class="input-group-addon">M$</div>
                                                                            <input type="text" class="form-control" id="CO09SIM" value="24.466.000" readonly="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="" role="tabpanel">
                                    </div>
                                    <div class="tab-pane" id="" role="tabpanel">
                                    </div>
                                    <div class="tab-pane" id="" role="tabpanel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">

                        <div class=" mb-3 text-center tercerstep" data-container="body" data-toggle="popover" data-title="Control del tiempo por partida" data-placement="left" data-content="<p>En este panel podrás ver detalles de la ronda y el tiempo de duración. Una ronda es igual a un mes en la simulación.</p><button class='btn btn-default mr-4' id='primerant' onclick='primerant()'>Anterior</button><button class='btn btn-primary' id='tercerpaso' onclick='tercerpaso()'>Siguiente</button>" id="segundopasopop" data-html="true">

                            <div class="card-block row bg-primary mb-3 m-0 p-0">
                                <div class="col-2 d-block my-auto p-0">
                                 <img class="fondo-tiempo" src="<?php echo Config::get('URL'); ?>img/chronometer.png" alt="cronómetro">
                             </div>
                             <div class="col">
                                <h3 class="card-header bg-primary text-white text-center border-bottom-0">

                                    <span class="text-white" id="">Iron Man - Ronda 3</span><br><span id="tiempo-ronda" class="text-white">1:53</span>
                                </h3>
                            </div>

                        </div>
                        <div class="card mb-3">
                          <h3 class="card-header bg-info text-white trunc">Puntaje ronda anterior</h3>
                          <div class="card-block row">
                            <div class="col-8">
                             <div class="row">
                                <div class="col-6 puntajes">
                                   <p><strong class="text-primary">Marketing</strong></p>
                               </div>
                               <div class="col-6 puntajes text-center">
                                   <p class="bd-primary ml-4 mr-4 text-center"><span class="text-gray-dark">10</span></p>
                               </div>
                           </div>
                           <div class="row">
                            <div class="col-6 puntajes">
                               <p><strong class="text-primary">Finanzas</strong></p>
                           </div>
                           <div class="col-6 puntajes text-center">
                               <p class="bd-primary ml-4 mr-4 text-center"><span class="text-gray-dark">11</span></p>
                           </div>
                       </div>
                       <div class="row">
                        <div class="col-6 puntajes">
                           <p><strong class="text-primary">Producción</strong></p>
                       </div>
                       <div class="col-6 puntajes text-center">
                           <p class="bd-primary ml-4 mr-4 text-center"><span class="text-gray-dark">9</span></p>
                       </div>
                   </div>

                   <div class="row">
                    <div class="col-6 puntajes" >
                       <p><strong class="text-primary">I+D</strong></p>
                   </div>
                   <div class="col-6 puntajes text-center">
                       <p class="bd-primary ml-4 mr-4 text-center"><span class="text-gray-dark">7</span></p>
                   </div>
               </div>

               <div class="row">
                <div class="col-6 puntajes pr-0">
                   <p><strong class="text-primary">Puntaje Total</strong></p>
               </div>
               <div class="col-6 puntajes text-center">
                   <p class="bd-primary ml-4 mr-4 text-center"><span class="text-gray-dark">27</span></p>
               </div>
           </div>
       </div>

   <div class="col-4 card p-0 text-center " style="height: 270px">
                        <p class="card-header text-primary m-0 text-center">Ranking</p>
                        <div class="col-12 pt-3 text-center" style="height: 40px; font-weight: 350">
                           <p class="m-0 text-center"><strong class="text-success m-0" style="font-size: 6em">1</strong></p>
                        </div>
                     </div>
</div>
</div>

<div class="card-block" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Información del Mercado" data-content="<p>Esta opción es vital para poder entender los parámetros del mercado y te ayudará a tomar mejores decisiones, revisa está información antes de tomar decisiones.</p><button class='btn btn-default mr-4' id='segundoant' onclick='segundoant()'>Anterior</button><button class='btn btn-primary' id='cuartopaso' onclick='cuartopaso()'>Siguiente</button>" id="tercerpasopop" data-html="true">
    <a class="btn btn-success mr-2" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i> Producto</a>
    <a class="btn btn-success" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Mercado</a>
    <button type="button" class="btn btn-success" id="pdfSegmento"><i class="fa fa-pie-chart" aria-hidden="true"></i> Segmento</button>
</div>
</div>
<div class="card mb-3">
    <h3 class="card-header bg-info text-white">REPORTES</h3>
    <div class="card-block" data-container="body" data-toggle="popover" data-title="Reportes" data-placement="left" data-content="<p>Estos reportes son económicos financieros y te ayudarán a analizar la situación y el rendimiento de tu empresa.</p><button class='btn btn-default mr-4' id='quintoant' onclick='quintoant()'>Anterior</button><button class='btn btn-primary' id='septimopaso' onclick='septimopaso()'>Siguiente</button>" id="sextopasopop" data-html="true">
        <div class="list-group">
            <a class="list-group-item list-group-item-action" id="verbalanceSituacion">
                <i class="fa fa-fw fa-bar-chart"></i> Balance de situación
            </a>
            <a class="list-group-item list-group-item-action" id="verEstadoResultado" style="display:none">
                <i class="fa fa-fw fa-bar-chart"></i> Estado de resultado
            </a>
            <a class="list-group-item list-group-item-action" id="verIndicadores">
                <i class="fa fa-fw fa-bar-chart"></i> Indicadores
            </a>
            <a class="list-group-item list-group-item-action" id="verReporteDeVentas">
                <i class="fa fa-fw fa-bar-chart"></i> Reporte de ventas
            </a>
        </div>
    </div>
</div>
<div class="card" data-container="body" data-toggle="popover" data-placement="left" data-title="Efectivo Disponible" data-content="<p>Muestra información en todos los módulos del efectivo disponible en la ronda actual y lo que tenías en la ronda anterior.</p><button class='btn btn-default mr-4' id='sextoant' onclick='sextoant()'>Anterior</button><button class='btn btn-primary' id='octavopaso' onclick='octavopaso()'>Siguiente</button>" id="septimopasopop" data-html="true" data-trigger="focus">
    <h3 class="card-header bg-info text-white">EFECTIVO DISPONIBLE</h3>
    <div class="card-block">
        <div class="form-group">
            <label for="">Ronda Actual</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">M$</div>
                <input type="number" class="form-control" name="" placeholder="76.404.336" readonly="">
            </div>
        </div>
        <div class="form-group">
            <label for="">Ronda Anterior</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">M$</div>
                <input type="number" class="form-control" placeholder="77.331.336" readonly="">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
    var Match = 51;
    var currendRound = 13;
    var Rounds = 12;
    var teamId = 15;
    var market = 1;
    var appUrl = 'http://localhost/game/';
    var product = '';
    var roundState, workerTime, workerUpdate, popGuardar, CONFIG57, CONFIG22A, CONFIG23A, CONFIG23B, CONFIG19;
</script>
<script src="http://localhost/game/js/tour.js"></script>
<script src="http://localhost/game/js/efe.class.js"></script>
<script type="text/javascript">
</script>

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
<script>
    $(".tercerstep").popover({
        html: true,
        placement: 'left',
        trigger: 'click',
        template: '<div class="popover popover--lefttop" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });
    $(".finalstep").popover({
        html: true,
        placement: 'bottom',
        trigger: 'click',
        template: '<div class="popover popover--topright" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });
    $( document ).ready(function() {
        $('#primerpasopop').popover('show');
        $('#segundopaso').focus();
// $('[data-toggle="popover"]').popover();
});
    function volver(){
        $(location).attr('href', '<?php echo Config::get('URL'); ?>tour');
    }
    function primerant (){
        $('#segundopasopop').popover('hide');
        $('#primerpasopop').popover('show');
        $('#segundopaso').focus();
    };
    function segundopaso(){
        $('#primerpasopop').popover('hide');
        $('#segundopasopop').popover('show');
        $('#tercerpaso').focus();
    };
    function segundoant(){
        $('#tercerpasopop').popover('hide');
        $('#segundopasopop').popover('show');
        $('#tercerpaso').focus();
    };
    function tercerpaso (){
        $('#segundopasopop').popover('hide');
        $('#tercerpasopop').popover('show');
        $('#cuartopaso').focus();
    };
    function tercerant(){
        $('#cuartopasopop').popover('hide');
        $('#tercerpasopop').popover('show');
        $('#cuartopaso').focus();
    };
    function cuartopaso (){
        $('#tercerpasopop').popover('hide');
        $('#cuartopasopop').popover('show');
        $('#quintopaso').focus();
    };
    function cuartoant(){
        $('#quintopasopop').popover('hide');
        $('#cuartopasopop').popover('show');
        $('#quintopaso').focus();
    };
    function quintopaso (){
        $('#cuartopasopop').popover('hide');
        $('#quintopasopop').popover('show');
        $('#sextopaso').focus();
    };
    function quintoant(){
        $('#sextopasopop').popover('hide');
        $('#quintopasopop').popover('show');
        $('#sextopaso').focus();
    };
    function sextopaso(){
        $('#quintopasopop').popover('hide');
        $('#sextopasopop').popover('show');
        $('#septimopaso').focus();
    };
    function sextoant(){
        $('#septimopasopop').popover('hide');
        $('#sextopasopop').popover('show');
        $('#septimopaso').focus();
    };
    function septimopaso(){
        $('#sextopasopop').popover('hide');
        $('#septimopasopop').popover('show');
        $('#octavopaso').focus();
    };
    function septimoant (){
        $('#octavopasopop').popover('hide');
        $('#septimopasopop').popover('show');
        $('#octavopaso').focus();
    };
    function octavopaso(){
        $('#septimopasopop').popover('hide');
        $('#octavopasopop').popover('show');
        $('#final').focus();
    };
    function final(){
        $(location).attr('href', '<?php echo Config::get('URL'); ?>dashboard');
    };
    function exit(){
        $(location).attr('href', '<?php echo Config::get('URL'); ?>dashboard');
    }
</script>
<style type="text/css">
.popover.popover--lefttop {
    /* margin-top: 0px; // Use to change vertical position */
    margin-top: -30px; /* Use to change horizontal position */
}
.popover.popover--lefttop .arrow {
    top: -50% !important;
}
.popover.popover--topright {
    /* margin-top: 0px; // Use to change vertical position */
    margin-right: 30px; /* Use to change horizontal position */
}
.popover.popover--topright .arrow {
    left: 88% !important;
}
</style>
</body>
</html>