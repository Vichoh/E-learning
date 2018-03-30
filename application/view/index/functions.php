<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CEOSim - Funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/components-font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/styles.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/navbar.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/footer.css">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/functions.css">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo Config::get('URL'); ?>landing/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo Config::get('URL'); ?>landing/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
                <li class="active"><a href="<?php echo Config::get('URL'); ?>index/functions">FUNCIONES</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>index/prices">PRECIOS</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>contacto">CONTACTO</a></li>
                <li><li><a href="<?php echo Config::get('URL'); ?>login" class="btn navbar-btn-custom" style="margin: 1.9em 0;padding: 0.2em;">INICIAR SESIÓN</a></li>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
    <div class="row display-flex">
        <div class="col-md-6 item-light">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/pie-chart.png" alt="pie-chart" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Indicadores de Gestión / Dashboard de Análisis</h1>
                    <p>Todas las áreas empresariales están compuestas por un análisis gráfico llamado “Dashboard”
                        utilizado en tecnología Business Intelligence y por Indicadores de Gestión que le permitirá a
                        los equipos tomar las decisiones correctas y lograr cumplir los objetivos empresariales.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 item-dark">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/online-learning.png" alt="online-learning"
                             class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Integración Docente - Estudiante</h1>
                    <p>El docente tiene un panel administrador para ver el resultado en tiempo real de las decisiones de
                        los equipos o del estudiante, esto le permite realizar observaciones y asesorias.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row display-flex">
        <div class="col-md-6 item-dark">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/devices.png" alt="devices" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Plataforma Web - Mobile</h1>
                    <p>CEOSIM está disponible en plataforma web y mobile, por lo cuál se pueden realizar simulaciones en
                        cualquier lugar con acceso a internet.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 item-light">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="image-item">
                        <img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/pc-search.png" alt="pc-search" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 function-item-text">
                    <h1>Reportes Financieros en IFRS</h1>
                    <p>El Balance de Situación y el Estado de Resultados están disponible en IFRS (normas financiero
                        contables internacionales).</p>
                </div>
            </div>
        </div>
    </div>
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