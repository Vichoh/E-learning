<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CEOSim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/styles.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/header.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/navbar.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/footer.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/index.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Config::get('URL'); ?>"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo Config::get('URL'); ?>index/company">EMPRESA</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/functions">FUNCIONES</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/prices">PRECIOS</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>contacto/">CONTACTO</a></li>
                <li><li><a href="<?php echo Config::get('URL'); ?>login" class="btn navbar-btn-custom" style="margin: 1.9em 0;padding: 0.2em;">INICIAR SESIÓN</a></li>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container-header">
        <div class="container">
            <div class="col-md-6 container-text">
                <br><br>
                <h1 class="">Simulador de Estrategia Empresarial</h1>
                <p>Con CEOSIM las instituciones educacionales podrán realizar simulaciones de negocios de una manera
                    simple
                    y rápida. Todos los mercados son con datos reales de las principales industrias en Chile y en
                    distintos
                    niveles de dificultad.</p>
                <br>
                <span class="platform"><i class="fa fa-desktop"></i> WEB</span>
                <span class="platform"><i class="fa fa-android"></i> ANDROID</span>
                <span class="platform"><i class="fa fa-apple"></i> IOS<span class="prox">Pronto!</span></span>

                <div class="mobile-only">
                    <div class="col-md-12 text-center">
                        <a class="btn btn-default btn-custom-2" href="<?php echo Config::get('URL'); ?>contacto">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 container-layout">
                <video autoplay="" loop="" class="img-responsive">
                    <source src="<?php echo Config::get('URL'); ?>landing/assets/videos/video01.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row display-flex">
        <div class="col-md-6 item-light">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/pie-chart.png" alt="pie-chart" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Simulación de Mercados con Datos Reales</h1>
                    <p>Todos los mercados disponibles en CEOSIM son creados en base a estudios y análisis de los
                        principales mercados de Chile para entregar al docente y estudiante una experiencia más real de
                        simulación.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 item-dark">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/network.png" alt="network" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Entorno de Competencia por Equipos y en distintos niveles</h1>
                    <p>Las simulaciones creadas se basan en la lógica de un “Mercado Maduro” por los cual cada empresa
                        (equipo) compite por un mercado. El docente puede crear simulaciones en distintos niveles de
                        dificultad: Emprende, Técnico y Profesional.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row display-flex">
        <div class="col-md-6 item-dark">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/online-learning.png" alt="online-learning"
                             class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Plataforma de Aprendizaje y Ayuda</h1>
                    <p>Está disponible una plataforma especial para capacitaciones a los docentes y estudiantes con
                        material multimedia y textos explicativos para mejorar el aprendizaje de la plataforma.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 item-light">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/smartphone.png" alt="smartphone" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Puntajes y Calificaciones por Simulaciones</h1>
                    <p>En cada simulación el docente puede configurar las calificaciones y estas se calculan de acuerdo
                        al puntaje total obtenido por el estudiante o equipo al finalizar la simulación.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron row">
        <div class="col-md-12 text-center">
            <br>
            <a class="btn btn-default btn-custom-1" href="<?php echo Config::get('URL'); ?>index/functions">EXPLORAR FUNCIONES</a>
        </div>
    </div>
    <!--
    <div class="clients row text-center">
        <img src="assets/images/clients/UCT-gray.png" alt="UCT">
        <img src="assets/images/clients/ufro-gray.png" alt="UFRO">
    </div>
    -->
</div>
<footer>
    <div class="container footer-sidebar">
        <div class="col-sm-4">
            <ul>
                <li><h4>CEOsim</h4></li>
                <li><a href="<?php echo Config::get('URL'); ?>">Inicio</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/functions">Funciones</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/prices">Precios</a></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul>
                <li><h4>Empresa</h4></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/company">Nuestra Empresa</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul>
                <li><h4>Ayuda</h4></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/faq">Preguntas Frecuentes</a></li>
            </ul>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <p class="pull-right">Simulador de estrategia empresarial</p>
            <p><i class="fa fa-copyright"></i> CEOSim 2018</p>
        </div>
    </div>
</footer>
<script src="<?php echo Config::get('URL'); ?>landing/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo Config::get('URL'); ?>landing/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>