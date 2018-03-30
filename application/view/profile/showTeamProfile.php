<section class="mb-0" style="background: url('<?php echo Config::get('URL'); ?>/img/ceo-regist.png'); height: 110%; background-repeat: no-repeat; background-size: 100% 100%">
    <div class="container pt-5">
        <div class="row">
            <div class="col-10 login mt-3 bd-primary pr-0 pl-0" style="background-color: white ">
                <!-- echo out the system feedback (error and success messages) -->
                
                <h5 class="bg-primary pt-2 pb-2 pl-2 pr-2 text-center">Perfil</h5>
                <?php $this->renderFeedbackMessages(); ?>
                <div class="row pr-2 pl-2">
                    <div class="col-4 pb-2">
                        <div class="card text-center">
                            <div class="text-center pt-2 image_wrapper">
                                <?php if (Config::get('USE_GRAVATAR')) { ?>
                                <img alt="Avatar" class="img-circle text-center" src='<?= $this->user_gravatar_image_url; ?>' style="height: 50px; width: 50px"/>='<?= $this->user_avatar_file; ?>' style="height: 50px; width: 50px"/>
                                <?php } else { ?>
                                <a href="#" data-toggle="popover" data-placement="top"><img alt="Avatar" class=" text-center image" src='<?= $this->user->user_avatar_link; ?>' style="height: 300px; width: 200px"/></a>
                                <?php } ?>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title"><?= $this->user->user_name; ?>
                                <?php if ($this->admin == $this->member) { ?> <a onclick="editName()" name="iconEdit"><i class="fa fa-pencil" name="nickname" aria-hidden="true"></i></a><?php } ?></h4>
                            </div>
                            <div class="text-center pb-2">
                                <p><i class="fa fa-fw fa-trophy" style="color:#dcca27"></i>  puntos</p>
                                <p><i class="fa fa-fw fa-gamepad" style="color:#2B93B6"></i>  juegos</p>
                                <p><i class="fa fa-fw fa-line-chart" style="color:#dcca27"></i> +999 en el ranking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <form action="<?php echo Config::get('URL'); ?>user/editUserName_action" method="post">
                            <div class="form-group mb-0" id="nickname" style="display: none">
                                <label for="nameUser">Nombre de Usuario</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input autofocus required class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" id="nickname" value="<?= $this->user->user_name; ?>"/>
                                    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                                    <input type="submit" class="btn btn-success" value="Guardar" />
                                </div>
                            </div>
                        </form>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col">
                                    <label for="nameUser">Nombre <?php if ($this->admin == $this->member) { ?><a onclick="editNombre()"><i class="fa fa-pencil" name="btnName" aria-hidden="true"></i></a><?php } ?></label>
                                    <form action="<?php echo Config::get('URL'); ?>user/editUserFirstName_action" method="post">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                            <input autofocus required class="form-control" type="text" id="nombre_user" name="new_first_name" placeholder="Ingrese su nombre" readonly="false" value="<?= $this->user->first_name; ?>"/>
                                            <button class="btn btn-success text-right" name="btnEName" onclick="editNombre()" style="display: none"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col">
                                    <label for="nameUser">Apellido <?php if ($this->admin == $this->member) { ?><a onclick="editLastName()"><i class="fa fa-pencil" name="btnAp" aria-hidden="true"></i></a><?php } ?></label>
                                    <form action="<?php echo Config::get('URL'); ?>user/editUserLastName_action" method="post">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                            <input autofocus required class="form-control" type="text" value="<?= $this->user->last_name; ?>" name="new_last_name" placeholder="Ingrese su Apellido" id="apeUser" readonly="false" />
                                            <button class="btn btn-success text-right" name="btnEAp" onclick="editLastName()" style="display: none"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <label for="email">E-mail <?php if ($this->admin == $this->member) { ?><a onclick="editEmail()"><i class="fa fa-pencil" name="btnEmail" aria-hidden="true"></i></a><?php } ?></label>
                            <form action="<?php echo Config::get('URL'); ?>user/editUserEmail_action" method="post">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <input autofocus required class="form-control" type="text" id="email_user" name="user_email" value="<?= $this->user->user_email; ?>" readonly="false" required/>
                                    <input type="submit" class="btn btn-success" value="Guardar" name="btnEEmail" style="display: none" />
                                </div>
                            </form>
                        </div>
                        
                        <form method="post" action="<?php echo Config::get('URL'); ?>user/changePassword_action" name="new_password_form">
                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col">
                                        <label for="password">Contraseña</label>
                                        <!--<a href="#forget-password" class="btn btn-xs btn-link" tabindex="4">Forget password?</a>-->
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                            <input class="form-control" required type="password" id="pass_user" name="user_password_current" pattern=".{6,}" placeholder="Ingrese contraseña actual" autocomplete="off" readonly="false"  />
                                            <?php if ($this->admin == $this->member) { ?>
                                            <button class="btn btn-warning text-right" onclick="editPass()" name="btnPass"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-6" id="rptPass" style="display: none;">
                                        <label for="password">Nueva contraseña (Mínimo 6 caracteres)</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                            <input class="form-control" id="change_input_password_new" type="password"
                                            name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="Ingrese nueva contraseña" />
                                        </div>
                                    </div>
                                    <div class="col-6" id="rptPasss" style="display: none;">
                                        <label for="change_input_password_repeat"></label>
                                        <div class="input-group pt-4">
                                            <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                            <input class="form-control" id="change_input_password_repeat" type="password"
                                            name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="reingrese nueva contraseña" />
                                        </div>
                                    </div>
                                    <div class="col pt-2" id="rptBtn" style="display: none;">
                                        <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                                        <input type="submit" class="btn btn-success " value="Guardar" name="btnEEmail"/>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col mb-3 text-right">
                    <a href="<?php echo Config::get('URL'); ?>team/view/<?php echo htmlentities($this->id_team); ?>/<?php echo htmlentities($this->id_group); ?>" class="btn btn-primary"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Volver </a>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</section>
<script>
function editName(){
var name = document.getElementById("nickname");
if (name.style.display === 'none') {
name.style.display = 'block';
} else {
name.style.display = 'none';
}
}
function editPass(){
var pass = document.getElementById("pass_user");
var passR = document.getElementById("rptPass");
var passRR = document.getElementById("rptPasss");
var btnPass = document.getElementsByName("btnPass");
var rptBtn = document.getElementById("rptBtn");
if (pass.readOnly === false) {
pass.readOnly = true;
btnPass[0].style.display = 'block';
passR.style.display = 'none';
passRR.style.display = 'none';
rptBtn.style.display = 'none';
} else {
pass.readOnly = false;
btnPass[0].style.display = 'none';
passR.style.display = 'block';
passRR.style.display = 'block';
rptBtn.style.display = 'block';
}
}
function editEmail(){
var em = document.getElementById("email_user");
var btnEmail = document.getElementsByName("btnEmail");
var btnEEmail = document.getElementsByName("btnEEmail");
if (em.readOnly === false) {
btnEmail[0].style.display = 'block';
btnEEmail[0].style.display = 'none';
em.readOnly = true;
} else {
btnEmail[0].style.display = 'none';
btnEEmail[0].style.display = 'block';
em.readOnly = false;
}
}
function editLastName(){
var ap = document.getElementById("apeUser");
var btnAp = document.getElementsByName("btnAp");
var btnEAp = document.getElementsByName("btnEAp");
if (ap.readOnly === false) {
ap.readOnly = true;
btnAp[0].style.display = 'block';
btnEAp[0].style.display = 'none';
} else {
ap.readOnly = false;
btnAp[0].style.display = 'none';
btnEAp[0].style.display = 'block';
}
}
function editNombre(){
var nombre = document.getElementById("nombre_user");
var btnName = document.getElementsByName("btnName");
var btnEName = document.getElementsByName("btnEName");
if (nombre.readOnly === false) {
nombre.readOnly = true;
btnName[0].style.display = 'block';
btnEName[0].style.display = 'none';
} else {
nombre.readOnly = false;
btnName[0].style.display = 'none';
btnEName[0].style.display = 'block';
}
}
</script>
<script type="text/javascript">
$(window).bind('ChangeView', function(e, data){
$('.change-img').popover({
placement : 'Right',
title : 'Change',
trigger : 'click',
html : true,
container: 'body',
content : function(){
var content = '';
content = $('#updateimg').html();
return content;
}
}).on('shown.bs.popover', function(){
});
});
$(window).bind('ChangeView', function(e, data){
$('.delete-img').popover({
placement : 'Right',
title : 'Change',
trigger : 'click',
html : true,
content : function(){
var content = '';
content = $('#deleteimg').html();
return content;
}
}).on('shown.bs.popover', function(){
});
});
$(document).ready(function(){
$(window).trigger('ChangeView', {});
});
</script>