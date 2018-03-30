        <section class="wrapper" id="login">
            <ul id="scene" class="scene unselectable pl-0" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
                <li class="layer wrapper" data-depth="0.10">
                    <div class="background"></div>
                </li>
                <li class="layer wrapper" data-depth="0.10">
                    <div class="city"></div>
                </li>
            </ul>
            <div class="wrapper" id="rows">
                <div class="container" id="container">
                    <div class="row">
                        <div class="col-5 pt-2">
                            <img src="<?php echo Config::get('URL'); ?>/img/ceosim_h.png" style="height: 55px;">
                        </div>
                        <div class="col-7 pt-3">
                            <ul class="nav mr-auto">
                                <li class="nav-item ml-auto">
                                    <a class="btn btn-success next" role="button" href="<?php echo Config::get('URL'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                                </li>
                                <li class="nav-item ml-1">
                                    <a class="btn btn-success next" role="button" href="<?php echo Config::get('URL'); ?>login">
                                    Iniciar Sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4 bd-primary bg-white mt-5 pl-0 pr-0">
                            <h5 class="bg-primary pt-2 pb-2 pl-2 pr-2 text-center text-white">Restablecer Contraseña</h5>
                            <?php $this->renderFeedbackMessages(); ?>
                            <form action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action" class="mr-2 ml-2" method="post">
                                <div class="form-group">
                                    <label for="email">E-mail o Nombre de Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                        <input autofocus class="form-control" type="text" name="user_name_or_email" required />
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-block btn-primary login-submit-button" tabindex="3">Recuperar contraseña</button>
                                </div>
                            </form>
                            <?php if (!empty($this->redirect)) { ?>
                            <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/jquery.parallax.js"></script>
        <script>
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