<section>
<div class="container ml-0 pl-0 mt-5">

    <div class="list-group col-xl-2 col-lg-2 col-md-2 col-sm-12 pr-0 bg-nav" style="height: 100% ; position: fixed; background-color: #37474F">
    <h4 class="card-title text-white pt-4 text-center">Licencias</h4>
      <a href="<?php echo Config::get('URL'); ?>licencia" class="list-group-item list-group-item-action bg-nav text-white active"> <i class="fa fa-credit-card text-success pr-2"></i>Mis Licencias</a>

      <a href="<?php echo Config::get('URL'); ?>licencia/activeLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"> <i class="fa fa-check-circle text-success pr-2"></i>Activar Licencia</a>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/createLicence" class="list-group-item list-group-item-action bg-nav text-white " style="background-color: #37474F"><i class="fa fa-plus-square text-success pr-2"> </i> Crear licencia</a>
      <?php } ?>
        
      <?php if ($this->user_level == 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersTeacher" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>
        <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/showUsersAdmin" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"><i class="fa fa-user text-success pr-2"></i> Usuarios por Licencia</a>
      <?php } ?>

      <?php if ($this->user_level > 2 ){ ?>
      <a href="<?php echo Config::get('URL'); ?>licencia/getLicenceUserDelete" class="list-group-item list-group-item-action bg-nav text-white" style="background-color: #37474F"> <i class="fa fa-user-times text-success pr-2"></i>Solicitud Eliminacion</a>
      <?php } ?>

    </div>



    <div class="col-8 offset-3" >

         <h1 class=" pt-4 pb-4 mb-4" style=" font-weight: 300; font-size: 30px">Licencias</h1>

    
        <?php if ($this->licencias) { ?>
            <table class="table table-bordered">
              <thead >
                <tr class="bg-primary text-white">
                  <th>Nombre Licencia</th>
                  <th>Codigo</th>
                  <th>Fecha Caducidad</th>
                  <th>Estado Licencia</th>
                  <th>Observacion</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->licencias as $key => $value) { ?>
                <tr>
                  <th class="bg-info text-white"><?= htmlentities($value->licence_name); ?></th>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_key); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_expiration); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->valido); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->licence_observacion); ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
            <div> </div>
        <?php } ?>
               
    </div>
</div>


<script type="text/javascript">


$('#buscar').on('click', function(e) {

    e.preventDefault();
    var busqueda = $('#filtrar').val();
    console.log($('#filtrar').val() );
    var appUrl = '<?php echo Config::get('URL'); ?>';
    $.getJSON(appUrl+ 'user/searchUserLvlTwo/' + busqueda , function(data) {
        console.log(data);
        if(data.user_id==null){
            $("#addusers").addClass("disabled");
            $("#users tr").remove(); 
            var table = document.getElementById("users");
            var row = table.insertRow(table.rows.lenght);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<td>Usuario no registrado</td>';
            cell1.colSpan = 5;     
        }else{
            $("#users tr").remove(); 
            var table = document.getElementById("users");
            var row = table.insertRow(table.rows.lenght);
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            email = data.user_email.split("@");

            cell1.innerHTML = '<th><label class="form-check-label text-center"><input class="form-check-input" type="checkbox" name="user_id" value='+data.user_id+' id="check"></label></th>';
            cell2.innerHTML = '<td>'+ data.user_name + '</td>';
            cell3.innerHTML = '<td>'+ data.first_name + ' ' + data.last_name + '</td>';
            cell4.innerHTML = '<td>'+ email[0] + '@</td>';            
            
            $('#check').click(function(){
                var che = document.getElementById("check").checked;
                if(che){
                    $("#addusers").removeClass("disabled");
                }else{
                    $("#addusers").addClass("disabled");
                }
            });
            
        }    
    });   
});



</script>

</section>