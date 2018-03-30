<div class="container">
    <h1>Edit your avatar</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    <div class="">
        <div class="card-block rounded border-4 mt-5 p-0" style="border-width: 1px; border-color: #e0e0e0; border-style: solid;">

            <div style="box-shadow: 0px 3px 5px #999;">
                <div class="card-block row">
                    <div class="col-7">
                    <h3>Selecciona una foto para tu perfil</h3>
                    <br>
                    <div class="box">
                        
                        <h4 class="display-4 text-primary text-center col-6 "><?= $this->user->user_name; ?></h4>
                    </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            
                        <div class="text-center col-6">
                            <div class="text-center pt-2">
                                <?php if (Config::get('USE_GRAVATAR')) { ?>
                                    <img alt="Avatar" class="rounded-circle img-circle text-center" src='<?= $this->user_gravatar_image_url; ?>' style="height: 70px; width: 100px"/>='<?= $this->user_avatar_file; ?>' style="height: 100px; width: 100px"/>
                                    <?php } else { ?>
                                    <img alt="Avatar" class="rounded-circle text-center image" src='<?= $this->user->user_avatar_link; ?>' style="height: 120px; width: 120px"/>
                                    <?php } ?>
                                </div> 
                            </div>
                            <div class="col-6 pt-5 pl-4">
                            <a class="btn btn-danger" href="<?php echo Config::get('URL'); ?>user/deleteAvatar_action">Eliminar avatar</a></div>
                            
                            </div>
                        </div>

                <!--<div class="feedback info">
                    Esta sección es experimental,<br>permite cambiar el avatar de usuario. Si al cargar tu avatar sigues viendo una imágen anterior, debes recargar el sitio web de forma forzada con la tecla F5.
                </div>-->
            </div>
        </div>
        <div class="">
            <div class="">
                <div class="pb-2">
                    <form action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
                        <div class="row card-block" style="height: 250px;">
                            <div class="col-6" style="margin-top: 110px">
                                <span class="btn btn-lg btn-file text-white" style="background-color: #ba68c8;"><i class="fa fa-upload"></i> Subir foto
                                    <input type="file" id="avatar_file" name="avatar_file" />
                                </span>
                            </div>
                            <br />
                            <div class="col-6">
                                <output id="list"></output>
                            </div>
                        </div>

                        <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
                        <input  type="hidden" name="MAX_FILE_SIZE" value="5000000" />

                        <br>
                        <div class="p-0 m-0 row" style="box-shadow: 0px -2px 5px #999;">
                            <div class="col-10 mt-5" align="right">
                                <p style="color: #bdbdbd">***Se guardara esta foto para tu perfil de usuario***</p>
                            </div>
                            <div class="col-2">
                          <input type="submit" class="btn btn-lg text-white mt-5 mb-3"  style="background-color: #00bcd4;" value="Actualizar" />
                          </div>
                      </div>
                  </form>
                  <br>


              </div>


              <div class="col-8">
                <div class="dragdrop">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
  function archivo(evt) {
                  var avatar_file = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = avatar_file[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                          document.getElementById("list").innerHTML = ['<img class="thumb rounded-circle" src="', e.target.result,'" width="220px" height="200px" title="', escape(theFile.name), '"/>'].join('');
                      };
                  })(f);

                  reader.readAsDataURL(f);
              }
          }

          document.getElementById('avatar_file').addEventListener('change', archivo, false);
      </script>