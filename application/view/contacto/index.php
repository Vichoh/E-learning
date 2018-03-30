<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CEOSim - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/bower_components/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/styles.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/navbar.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/footer.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/partials/form.css">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>landing/assets/stylesheet/contact.css">
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
                <li><a href="<?php echo Config::get('URL'); ?>index/prices">PRECIOS</a></li>
                <li class="active"><a href="<?php echo Config::get('URL'); ?>contacto">CONTACTO</a></li>
                <li>
                    <form action="http://ceosim.cl/login">
                        <button type="submit" class="btn navbar-btn-custom">INICIAR SESIÓN</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <h1><span><img src="<?php echo Config::get('URL'); ?>landing/assets/images/icons/speech-bubble.png" alt="speech-bubble"></span> Contáctanos</h1>
    </div>
</header>

<div class="container main">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name" class="sr-only">Nombre completo:</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre completo" name="form_name">
            </div>
            <div class="form-group">
                <label for="phone" class="sr-only">Teléfono:</label>
                <input type="text" class="form-control" id="phone" placeholder="Teléfono" name="form_phone">
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="form_email">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name" class="sr-only">Institución educacional:</label>
                <input type="text" class="form-control" id="institution" placeholder="Institución educacional" name="form_reason" name="form_institution">
            </div>
            <div class="form-group">
                <label for="message" class="sr-only">Mensaje:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" id="form_text"></textarea>
            </div>
        </div>
        <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-custom-3">CONTACTAR</button>
        </div>
    </div>
    <br>
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
<script>
    $('#enviarMensaje').on("click", function(){
        var dataA,dataB,dataC,dataD;

        $("#mensajeSuperior").removeClass("d-none").removeClass("alert-danger").addClass("alert-success");
        $("#mensajeSuperior").html("<strong>Tu mensaje se está validando</strong>");
        $("#mensajeInferior").removeClass("d-none").removeClass("alert-danger").addClass("alert-success");
        $("#mensajeInferior").html("<strong>Tu mensaje se está validando</strong>");
        dataA = $("input[name='form_email']").val();
        dataB = $("input[name='form_name']").val();
        dataC = $("input[name='form_reason']").val();
        dataD = $("#form_text").val();
        dataF = $("input[name='form_institution']").val();
        dataG = $("input[name='form_phone']").val();

        $("input[name='form_email']").removeClass('form-control-danger').parent().removeClass('has-danger');
        $("input[name='form_name']").removeClass('form-control-danger').parent().removeClass('has-danger');
        $("input[name='form_reason']").removeClass('form-control-danger').parent().removeClass('has-danger');

        $.post( "<?php echo Config::get('URL'); ?>contacto/consulta", { form_email: dataA, form_name: dataB, form_reason: dataC, form_text: dataD, form_institution: dataF, form_phone: dataG }).done(function(data){

                if (data.result == 0){
                    var chain = "input[name='" + data.input + "']";
                    $(chain).addClass('form-control-danger').parent().addClass('has-danger');
                    $("#mensajeSuperior").removeClass("alert-success").addClass("alert-danger");
                    $("#mensajeSuperior").html("<strong>" + data.mensaje + "<br>Hemos encontrado un error, revisa los datos escritos y vuelve a intentar.</strong>");
                    $("#mensajeInferior").removeClass("alert-success").addClass("alert-danger");
                    $("#mensajeInferior").html("<strong>" + data.mensaje + "<br>Hemos encontrado un error, revisa los datos escritos y vuelve a intentar.</strong>");
                }
                else if (data.result == 1){
                    $("#mensajeSuperior").html("<strong>" + data.mensaje + "</strong>");
                    $("#mensajeInferior").html("<strong>" + data.mensaje + "</strong>");
                }
                else if (data.result == 2){
                    $("#mensajeSuperior").removeClass("alert-success").addClass("alert-danger");
                    $("#mensajeSuperior").html("<strong>No hemos podido enviar el mensaje, tenemos un problema en el servidor.<br>Por favor contactanos por Twitter @cristophernic y responderemos a la brevedad</strong>");
                    $("#mensajeInferior").removeClass("alert-success").addClass("alert-danger");
                    $("#mensajeInferior").html("<strong>No hemos podido enviar el mensaje, tenemos un problema en el servidor.<br>Por favor contactanos por Twitter @cristophernic y responderemos a la brevedad</strong>");
                }
        });
    });
</script>
</body>
</html>