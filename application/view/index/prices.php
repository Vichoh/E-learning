<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CEOSim - Precios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/components-font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/styles.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/navbar.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/footer.css">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/prices.css">

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
                <li><a href="<?php echo Config::get('URL'); ?>index/functions">FUNCIONES</a></li>
                <li class="active"><a href="<?php echo Config::get('URL'); ?>index/prices">PRECIOS</a></li>
                <li><a href="<?php echo Config::get('URL'); ?>contacto">CONTACTO</a></li>
                <li><li><a href="<?php echo Config::get('URL'); ?>login" class="btn navbar-btn-custom" style="margin: 1.9em 0;padding: 0.2em;">INICIAR SESIÓN</a></li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <h1><span><img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/online-learning.png" alt="speech-bubble"></span> Precios CEOsim</h1>
    </div>
</header>

<div class="container main">
    <div class="row">
        <div class="col-md-7">
            <h1>CEOSIM <i class="color">INDUSTRIA</i></h1>
            <p>Categoría de simulación con mercados reales de las principales industrias en Chile.</p>
            <div class="product-list color">
                <ul>
                    <li>Nivel Emprende</li>
                    <li>Nivel Técnico</li>
                    <li>Nivel Profesional</li>
                </ul>
            </div>
            <h1><small>Todos los niveles incluidos</small> 2,1 UF</h1>
            <h3 class="licence"><small>Licencia Anual / Usuario</small></h3>
        </div>
        <div class="col-md-5 product-img">
            <img src="<?php echo Config::get('URL'); ?>landing/assets/images/industria.png" alt="CEOSIM INDUSTRIA" class="img-responsive">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-md-push-5 text-right">
            <h1>CEOSIM <i class="color">CORPORATIVO</i></h1>
            <p>Categoría de simulación que incluye decisiones de Responsabilidad Corporativa Empresarial.</p>
            <div class="product-list color">
                <ul>
                    <li>Nivel Emprende</li>
                    <li>Nivel Técnico</li>
                    <li>Nivel Profesional</li>
                </ul>
            </div>
            <h1><small>Todos los niveles incluidos</small> 2,5 UF</h1>
            <h3 class="licence"><small>Licencia Anual / Usuario</small></h3>
        </div>
        <div class="col-md-5 col-md-pull-7 product-img">
            <img src="<?php echo Config::get('URL'); ?>landing/assets/images/hoja.jpeg" alt="CEOSIM CORPORATIVO" class="img-responsive">
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