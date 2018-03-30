<!doctype html lang="es">
<html>
    <head>
        <title>CEOSim</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="<?php echo Config::get('URL'); ?>/fav/favicon-16x16.png" />
        <link rel="icon" href="data:;base64,=">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
         <style>
        body{
        background-color: #f1f1f1;
        }
        h1, h2, h3, h5,h6{
        color:#8a2223;
        }
        .bg-amarillo{
        background-color: #ffe05c;
        }
        .bd-amarillo{
        border: 2px solid #ffe05c;
        }
        .login {
        background-color: white;
        }
        </style>
    </head>
    <body>
        <section class="login-page-box" style="background: url('<?php echo Config::get('URL'); ?>/img/ceo-log.png'); height: 100%; background-repeat: no-repeat; background-size: 100% 100%">
            <?php $this->renderFeedbackMessages(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-5 pt-2">
                        <img src="<?php echo Config::get('URL'); ?>/img/ceosim_h.png" style="height: 55px;">
                    </div>
                    <div class="col-7">
                        <nav class="nav nav-masthead mr-auto pt-3">
                            <h3 class="ml-auto"><a style="color: #8a2223;" href="<?php echo Config::get('URL'); ?>">
                            Inicio</a></h3>
                            <li class="nav-item ml-2">
                                <a class="btn btn-success btn-sg" role="button" href="<?php echo Config::get('URL'); ?>login">
                                Iniciar Sesión</a>
                            </li>                          
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4 bd-primary login mt-5 pl-0 pr-0">
                        <h5 class="bg-primary pt-2 pb-2 pl-2 pr-2 text-center text-white">Restablecer Contraseña</h5>
                        <form action="<?php echo Config::get('URL'); ?>login/setNewPassword" class="mr-2 ml-2" method="post">
                            <input type='hidden' name='user_name' value='<?php echo $this->user_name; ?>' />
                            <input type='hidden' name='user_password_reset_hash' value='<?php echo $this->user_password_reset_hash; ?>' />
                            <div class="form-group">
                                <label for="email">Nueva contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input autofocus class="form-control" type="password" name="user_password_new" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Repetir contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input autofocus class="form-control" type="password" name="user_password_repeat" required />
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" name="submit_new_password" class="btn btn-block btn-primary login-submit-button" tabindex="3">Cambiar contraseña</button>
                            </div>
                        </form>
                        <?php if (!empty($this->redirect)) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- echo out the system feedback (error and success messages) -->
            
        </div>
    </section>
</body>
</html>