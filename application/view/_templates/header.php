<!DOCTYPE html>
<html lang="es">
    <head>
        <title>CEOSim</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/aos.css">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="<?php echo Config::get('URL'); ?>js/ceosim.js"></script>
        <script src="<?php echo Config::get('URL'); ?>js/aos.js"></script>
        <?php if (View::checkForActiveController($filename, "match")) { ?>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/treemap.js"></script>
        <script src="https://code.highcharts.com/modules/funnel.js"></script>
        <!--<script src="https://code.highcharts.com/modules/exporting.js"></script>-->
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87353549-1"></script>
        <?php } ?>
        <link rel="shortcut icon" href="<?php echo Config::get('URL'); ?>favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo Config::get('URL'); ?>favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Config::get('URL'); ?>fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Config::get('URL'); ?>fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Config::get('URL'); ?>fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Config::get('URL'); ?>fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Config::get('URL'); ?>fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Config::get('URL'); ?>fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Config::get('URL'); ?>fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Config::get('URL'); ?>fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Config::get('URL'); ?>fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo Config::get('URL'); ?>fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Config::get('URL'); ?>fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo Config::get('URL'); ?>fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Config::get('URL'); ?>fav/favicon-16x16.png">
        <link rel="manifest" href="<?php echo Config::get('URL'); ?>fav/manifest.json">
        <meta name="msapplication-config" content="<?php echo Config::get('URL'); ?>fav/browserconfig.xml" />
        <meta name="msapplication-TileColor" content="#2F7C98">
        <meta name="msapplication-TileImage" content="<?php echo Config::get('URL'); ?>fav/ms-icon-144x144.png">
        <meta name="theme-color" content="#2F7C98">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    </head>



<style>


.topnav {
  overflow: hidden;
  background-color: #2F7C98;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/*.active {
  background-color: #4CAF50;
  color: white;
}*/

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #339DC2;
  color: white;
}

.dropdown-content a:hover {
    background-color: #339DC2;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 900px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 900px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>


    <body>
        <div class="loading">
            <div class="container pt-5">
                <div class="row justify-content-center pt-5">
                    <div class="col-10 col-xs-6 col-sm-6 col-lg-4 pt-5">
                        <div class="loader"></div>
<img src="<?php echo Config::get('URL');?>img/ceosimFull.png" class="ceosim-img" alt="logo ceosim">
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $urlBase = Config::get('URL');
            if ($urlBase == "https://dev.ceosim.cl/"){ ?>
            <div class="dev"><img src="/img/work.png" alt="trabajando"></div>
        <?php } ?>
        <?php if (!View::checkForActiveController($filename, "contacto") && !View::checkForActiveController($filename, "index") && !View::checkForActiveController($filename, "login") && !View::checkForActiveController($filename, "register")) { ?>
        <!-- <header id="head">
            <nav class="navbar navbar-toggleable-md navbar-light fixed-top" id="navPrincipal" >
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarPrincipal" aria-controls="navbarPrincipal" aria-expanded="false" aria-label="mostrar navegación">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php if (Session::userIsLoggedIn()) { ?>
                    <a class="navbar-brand next" href="<?php echo Config::get('URL'); ?>dashboard">
                    <?php } else { ?>
                    <a class="navbar-brand next" href="<?php echo Config::get('URL'); ?>">
                    <?php } ?>
                        <img src="<?php echo Config::get('URL'); ?>img/ceosim_h.png" height="32" alt="logo CEOSim" title="CEOSim">
                    </a>
                    <div class=" navbar-collapse" id="navbarPrincipal">
                        <ul class="navbar-nav mr-auto" style="width:100%;">
                            <?php if (Session::userIsLoggedIn()) { 
                                if (!View::checkForActiveController($filename, "Admin") && $this->user_level == 7) { ?>
                                    <li class="nav-item ml-auto">
                                        <a class="nav-link next" href="<?php echo Config::get('URL'); ?>admin"><i class="fa fa-gamepad" aria-hidden="true"></i> Admin</a>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item ml-auto">
                                        <a class="nav-link next" href="<?php echo Config::get('URL'); ?>dashboard"><i class="fa fa-gamepad" aria-hidden="true"></i> Panel de Usuario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link next" href="<?php echo Config::get('URL'); ?>market"><i class="fa fa-cart-plus" aria-hidden="true"></i> Mercado</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link next" href="<?php echo Config::get('URL'); ?>licencia"><i class="fa fa-credit-card " aria-hidden="true"></i> Licencias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link next" href="<?php echo Config::get('URL'); ?>learning"><i class="fa fa-graduation-cap" aria-hidden="true"></i> E-learning</a>

                                    </li>
                                <?php } ?>
                                <li class="nav-item">
                                    <a class="nav-link next" href="<?php echo Config::get('URL'); ?>login/logout"><i class="fa fa-lock" aria-hidden="true"></i> Salir</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item ml-auto">
                                    <a class="nav-link" href="<?php echo Config::get('URL'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo Config::get('URL'); ?>login"><i class="fa fa-unlock" aria-hidden="true"></i> Ingresar</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>

        </header> -->



        <div class="topnav fixed-top pl-5" id="myTopnav">
            <?php if (Session::userIsLoggedIn()) { ?>
            <a  href="<?php echo Config::get('URL'); ?>learning">
            <?php } else { ?>
            <a  href="<?php echo Config::get('URL'); ?>">
            <?php } ?>
            <img src="<?php echo Config::get('URL'); ?>img/ceosim_h.png" height="25" alt="logo CEOSim" title="CEOSim">
            </a>


            <?php if (Session::userIsLoggedIn()) { 
                if (!View::checkForActiveController($filename, "Admin") && $this->user_level == 7) { ?>
            <a  href="<?php echo Config::get('URL'); ?>admin"><i class="fa fa-gamepad" aria-hidden="true"></i> Admin</a>
                <?php } else { ?>

            <a  href="<?php echo Config::get('URL'); ?>dashboard"><i class="fa fa-gamepad" aria-hidden="true"></i> Perfil</a>

            <a  href="<?php echo Config::get('URL'); ?>licencia"><i class="fa fa-credit-card " aria-hidden="true"></i> Licencias</a>

                <?php } ?>

             <a  href="<?php echo Config::get('URL'); ?>login/logout" ><i class="fa fa-lock" aria-hidden="true"></i> Salir</a>
            <?php } else { ?>
            <a  href="<?php echo Config::get('URL'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
            <a  href="<?php echo Config::get('URL'); ?>login"><i class="fa fa-unlock" aria-hidden="true"></i> Ingresar</a>

            <?php } ?>
       

              <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctionTopheader()">&#9776;</a>
        </div>


<script>
function myFunctionTopheader() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav fixed-top pl-5") {
        x.className += " pr-5 responsive ";
    } else {
        x.className = "topnav fixed-top pl-5";
    }
}
</script>
        <?php } ?>