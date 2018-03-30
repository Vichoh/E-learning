<?php if ($this->isMobile == false) { ?>
<header style="position: sticky;left: 0;top: 0;width: 100%;z-index: 1000;">
    <div class="container">
        <div class="row">
            <div class="col-5 pt-2">
                <img src="<?php echo Config::get('URL'); ?>/img/ceosim_h.png" style="height: 55px;">
            </div>
            <div class="col-7 pt-3">
                <ul class="nav mr-auto">
                    <li class="nav-item ml-auto">
                        <a class="btn btn-success next" role="button" href="<?php echo Config::get('URL'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section id="home" class="mb-0" style="overflow: hidden;margin-top:-65px; ">

        
            <div class="city"></div>

            <div class="register-big p-5 ">
                <div class="row m-4 ">
                    <div class="col bg-white mt-3 bd-primary pl-0 pr-0">
                        <h5 class="bg-primary pt-2 pb-2 pl-2 pr-2 text-center text-white">REGISTRAR</h5>
                        <?php $this->renderFeedbackMessages(); ?>
                        <p id="mensajes" class="text-success mr-3 ml-3"></p>
                        <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action" class="mr-3 ml-3">
                            <div id="stepFirst">
                                <div class="form-group">
                                    <label><strong>Código de invitación</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-gift" aria-hidden="true"></i></div>
                                        <input class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_invitation"/>
                                    </div>
                                </div>
                                <button class="btn btn-info d-block mx-auto mb-3" id="goStepFirst">Validar</button>
                            </div>
                            <div id="stepOne" style="display: none;">
                                <div class="form-group">
                                    <label for="nameUser"><strong>Nombre</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                        <input autofocus class="form-control" type="text" required pattern="[a-zA-Z ]{3,64}" name="user_name" placeholder="Nombre"/>
                                    </div>
                                    <div class="alert alert-danger" id="nameRegister" >Nombre muy corto! necesita al menos 3 caracteres</div>
                                </div>
                                <div class="form-group">
                                    <label for="nameUser"><strong>Apellido</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                        <input autofocus class="form-control" type="text" required pattern="[a-zA-Z ]{3,64}" name="user_apellido" placeholder="Apellido"/>
                                    </div>
                                    <div class="alert alert-danger" id="apellidoRegister" >Apellido muy corto! necesita al menos 3 caracteres</div>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>E-mail</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        <input autofocus class="form-control" type="text" name="user_email" placeholder="Ingrese email"/>
                                    </div>
                                </div>

                                <button class="btn btn-info d-block mx-auto" id="goStepTwo">Continuar</button>
                            </div>
                            <div id="stepTwo" style="display: none;">
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label for="password"><strong>Contraseña</strong></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                            <input class="form-control" type="password" name="user_password_new" pattern=".{6,}" placeholder="Contraseña" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <label for="password"><strong>Repetir Contraseña</strong></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                            <input class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="repetir" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info d-block mx-auto" id="goStepThree">Continuar</button>
                            </div>
                            <div id="stepThree" style="display: none;">
                                <div class="form-check">
                                    <label for="set_remember_me_cookie" class="form-check-label">
                                        <input type="checkbox" name="terminos" class="form-check-input"/>
                                        <a href="#" id="verterminos"> Leer Términos y condiciones</a>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary login-submit-button" tabindex="3">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/jquery.parallax.js"></script>
</section>
<div class="modal fade" id="terminos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-amarillo">
                <h5>Términos y Condiciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">  
                <h5>INFORMACIÓN GENERAL</h5>
                <p>Este sitio web es operado por CEOSIM. En todo el sitio, los términos “nosotros”, “nos” y “nuestro” se refieren a CEOSIM. CEOSIM ofrece este sitio web, incluyendo toda la información, herramientas y servicios disponibles para ti en este sitio, el usuario, está condicionado a la aceptación de todos los términos, condiciones, políticas y notificaciones aquí establecidos.<br><br>Al visitar nuestro sitio y/o comprar algo de nosotros, participas en nuestro “Servicio” y aceptas los siguientes términos y condiciones (“Términos de Servicio”, “Términos”), incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el presente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo sin limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.<br><br>Por favor, lee estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, estás aceptando los Términos de Servicio. Si no estás de acuerdo con todos los términos y condiciones de este acuerdo, entonces no deberías acceder a la página web o usar cualquiera de los servicios. Si las Términos de Servicio son considerados una oferta, la aceptación está expresamente limitada a estos Términos de Servicio.<br><br>Cualquier función nueva o herramienta que se añadan a la tienda actual, también estarán sujetas a los Términos de Servicio. Puedes revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web. Es tu responsabilidad chequear esta página periódicamente para verificar cambios. Tu uso contínuo o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.<br><br>Nuestra tienda se encuentra alojada en Shopify Inc. Ellos nos proporcionan la plataforma de comercio electrónico en línea, que nos permite vender nuestros productos y servicios.</p>
                <h5>SECCIÓN 1 - TÉRMINOS DE LA TIENDA EN LÍNEA</h5>
                <p>Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia, o que tienes la mayoría de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de tus dependientes menores use este sitio.<br><br>No puedes usar nuestros productos con ningún propósito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo pero no limitado a las leyes de derecho de autor).<br><br>No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva.<br><br>El incumplimiento o violación de cualquiera de estos Términos darán lugar al cese inmediato de tus Servicios.</p>
                <h5>SECCIÓN 2 - CONDICIONES GENERALES</h5>
                <p>Nos reservamos el derecho de rechazar la prestación de servicio a cualquier persona, por cualquier motivo y en cualquier momento.<br><br>Entiendes que tu contenido (sin incluir la información de tu tarjeta de crédito), puede ser transferida sin encriptar e involucrar (a) transmisiones a través de varias redes; y (b) cambios para ajustarse o adaptarse a los requisitos técnicos de conexión de redes o dispositivos. La información de tarjetas de crédito está siempre encriptada durante la transferencia a través de las redes.<br><br>Estás de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, uso del Servicio, o acceso al Servicio o cualquier contacto en el sitio web a través del cual se presta el servicio, sin el expreso permiso por escrito de nuestra parte.<br><br>Los títulos utilizados en este acuerdo se incluyen solo por conveniencia y no limita o afecta a estos Términos.</p>
                <h5>SECCIÓN 3 - EXACTITUD, EXHAUSTIVIDAD Y ACTUALIDAD DE LA INFORMACIÓN</h5>
                <p>No nos hacemos responsables si la información disponible en este sitio no es exacta, completa o actual.  El material en este sitio es provisto sólo para información general y no debe confiarse en ella o utilizarse como la única base para la toma de decisiones sin consultar primeramente, información más precisa, completa u oportuna.  Cualquier dependencia en el materia de este sitio es bajo su propio riesgo.<br><br>Este sitio puede contener cierta información histórica.  La información histórica, no es necesariamente actual y es provista únicamente para tu referencia.  Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, pero no tenemos obligación de actualizar cualquier información en nuestro sitio.  Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Aceptar y cerrar</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script>

    $( document ).ready(function() {
        $('#nameRegister').slideUp();
        $('#apellidoRegister').slideUp();
    <?php if ($this->isMobile == false) { ?>
        
    <?php } ?>
    });
    $("#verterminos").click(function() {
        $("#terminos").modal('show');
    });
    $('#goStepFirst').on("click", function(event){
        event.preventDefault();

        var a1 = $("input[name='user_invitation']").val();
        $('#mensajes').html('');
        if (a1.length > 1){
            $.get( "<?php echo Config::get('URL'); ?>register/verifyGift/" + a1).done(function(data){

                if (data.return == true){
                    $('#stepFirst').animate({ height: 'toggle' }, 400);
                    $('#stepOne').animate({ height: 'toggle' }, 800);
                }
                else{
                    $('#mensajes').html(data.mensaje);
                }
            });
        }
    });

    $('#goStepTwo').on("click", function(event){
        event.preventDefault();

        var a1 = $("input[name='user_name']").val();
        var a2 = $("input[name='user_apellido']").val();
        var a3 = $("input[name='user_email']").val();

        if (a1.length <= 2){
            $("input[name='user_name']").addClass('form-control-danger');
            $("input[name='user_name']").parent().addClass('has-danger');
             
             $('#nameRegister').slideDown();
            return
        } else {
            $("input[name='user_name']").removeClass('form-control-danger');
            $("input[name='user_name']").parent().removeClass('has-danger');
            a1 = true;
        }

        if (a2.length <= 2) {
            $("input[name='user_apellido']").addClass('form-control-danger');
            $("input[name='user_apellido']").parent().addClass('has-danger');
            $('#apellidoRegister').slideDown();
            return
        }else {
            $("input[name='user_apellido']").removeClass('form-control-danger');
            $("input[name='user_apellido']").parent().removeClass('has-danger');
            a2 = true;
        }
        if (a3.length <= 2 || vEmail(a3) == false) {
            $("input[name='user_email']").addClass('form-control-danger');
            $("input[name='user_email']").parent().addClass('has-danger');
            return
        }
        else if (vEmail(a3)){
            $("input[name='user_email']").removeClass('form-control-danger');
            $("input[name='user_email']").parent().removeClass('has-danger');
            a3 = true;
        }

        if (a1 == true && a2 == true && a3 == true){
            $('#stepOne').animate({ height: 'toggle' }, 400);
            $('#stepTwo').animate({ height: 'toggle' }, 800);
        }
    });

    $('#goStepThree').on("click", function(event){
        event.preventDefault();

        var a1 = $("input[name='user_password_new']").val();
        var a2 = $("input[name='user_password_repeat']").val();

        if (a1.length < 1){
            $("input[name='user_password_new']").addClass('form-control-danger');
            $("input[name='user_password_new']").parent().addClass('has-danger');
            return
        } else {
            $("input[name='user_password_new']").removeClass('form-control-danger');
            $("input[name='user_password_new']").parent().removeClass('has-danger');
            a1 = true;
        }

        if (a2.length < 1 || vPassword() == false) {
            $("input[name='user_password_repeat']").addClass('form-control-danger');
            $("input[name='user_password_repeat']").parent().addClass('has-danger');
            return
        }else {
            $("input[name='user_password_repeat']").removeClass('form-control-danger');
            $("input[name='user_password_repeat']").parent().removeClass('has-danger');
            a2 = true;
        }

        if (a1 == true && a2 == true){
            $('#stepTwo').animate({ height: 'toggle' }, 800);
            $('#stepThree').animate({ height: 'toggle' }, 400);
            $("input[name='terminos']").prop('required',true);
        }
    });

    function vPassword(){
        $('#mensajes').html('');
        if ($("input[name='user_password_new']").val() == $("input[name='user_password_repeat']").val()) {
            return true
        }
        else{
            $('#mensajes').html('Las contraseña no coincide');
            return false
        }
    }


    function vEmail(email) {
        $('#mensajes').html('');
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test(email) == false){
            $('#mensajes').html('Correo inválido');
        }
        return re.test(email);
    }

    $( document ).ready(function() {
                $('#scene').parallax();
                $('#scene').width(window.innerWidth + 'px');
                $('#scene').height(window.innerHeight + 'px');

                var isMobile = { mobilecheck : function() {
                    return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
                    }
                }
                if(isMobile.mobilecheck()){
                    $('#login').removeClass('wrapper');
                    $("#scene").addClass("d-none");
                    $("#col8").addClass("d-none");
                    $('#col-login').removeClass('col-4');
                    $("#col-login").addClass("col-12");
                    $('#rows').removeClass('wrapper');
                    $("#rows").addClass("grapper");
                    $("#container").addClass("h-100 mt-3");
                    $("#col-login .form-group").addClass("mt-5");
                }
            });

            $(window).on("load", function() {
                $('body').css('overflow', 'hidden');
            });
</script>