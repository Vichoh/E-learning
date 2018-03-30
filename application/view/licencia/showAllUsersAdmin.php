<section>
<div class="container ml-0 pl-0 pr-0 mt-5" style="width: 100%;">

    <div class="list-group col-2 pr-0 bg-nav" style="height: 100% ; position: fixed; background-color: #37474F">
    <h4 class="card-title text-white pt-4 text-center">Licencias</h4>

      <a href="<?php echo Config::get('URL'); ?>licencia" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-credit-card text-success pr-2"></i>Mis Licencias</a>

      <a href="<?php echo Config::get('URL'); ?>licencia/activeLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-check-circle text-success pr-2"></i>Activar Licencia</a>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/createLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"><i class="fa fa-plus-square text-success pr-2"> </i> Crear licencia</a>
      <?php } ?>
        
      <?php if ($this->user_level == 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersTeacher" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersAdmin" class="list-group-item list-group-item-action bg-nav text-white active" ><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/getLicenceUserDelete" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"> <i class="fa fa-user-times text-success pr-2"></i>Solicitud Eliminacion</a>
      <?php } ?>
    </div>

    <div class="container-fluid col-8 offset-3">
             <h1 class=" pt-4 pb-4 mb-4" style=" font-weight: 300; font-size: 30px">Lista de Usuarios por Licencia</h1>
            


       <div class="row mt-3 card" >
        <div class="card-block col">
            <div class="row mb-5">
                
                <div class="col-3 ml-4">
                    <h1 class="" style=" font-weight: 300; font-size: 30px">Licencia</h1>
                </div>
                <div class="col-7 pr-2">
                    <select class="form-control col-12" id="licenses" name="licenses" onchange="grupos()">
                        <?php foreach($this->licencias as $key => $value) { ?>
                        <option value=<?= htmlentities($value->licence_id); ?>><?= htmlentities($value->licence_key); ?> - <?= htmlentities($value->licence_name); ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <hr>
            <h3  class= "ml-4 mb-3" style="font-size: 18px; font-weight: 300; line-height: 23px">Listado de Usuarios</h3>
        


                <div class="table-responsive row text-center text-white col-12 m-0">
                  <table class="table table-bordered">
                      <thead >
                        <tr class="bg-primary text-white">
                          <th>Nº</th>
                          <th>Nombre Usuario</th>
                          <th>Correo</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody id = "cursos">

                        <tr>
                          <th class="style-tarjetas"> </th>
                          <td class="bg-info text-white"> </td>
                          <td class="bg-info text-white"> </td>
                          <td class="bg-info text-white"> </td>
                          </tr>

                        </tbody>
                    </table>
                </div>
                

        </div>
    </div>
           
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            grupos();

        });
       
        function grupos(){
            var licencia = $ ('#licenses').val();
            console.log(licencia);
            var appUrl = '<?php echo Config::get('URL'); ?>';
            $.getJSON(appUrl + 'licencia/getUsersLicence/' + licencia, function(data) {
                console.log(data);
                var div = "";
                var divMatch = document.getElementById('cursos');
                divMatch.innerHTML = "";
                var count = 1;
                data.forEach(function (element) {
                    console.log(element);

                    console.log(getRandomColor());
                    var color = getRandomColor();

                    div += ' <tr><th class="style-tarjetas">' + count +'</th><th class="style-tarjetas">' + element.first_name + " " + element.last_name +  '</th><th class="style-tarjetas">'+ element.user_email+'  </th> <th class="style-tarjetas"> </th> </tr>'


                    count++;

                });
                divMatch.innerHTML = div;
            });
            }


            function setRandomColor() {
              document.getElementById("cardEstudiantesPaso1").style.borderColorTop = "getRandomColor()";
            }


            function getRandomColor() {
              var letters = '0123456789ABCDEF';
              var color = '#';
              for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
              }
              return color;
            }

            function selectTeam(id){
                $('.ceosim-img').fadeIn(500);
                var urlSend = '<?php echo Config::get('URL'); ?>team/teamsCourse/' + id;
                window.location.href = urlSend;
            }

        
    </script>
</section>
