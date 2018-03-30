<section>
<div class="container">
    
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <!-- <?php $this->renderFeedbackMessages(); ?> -->
        <h1 class="mt-5">Licencia</h1>
     <div class="card p-3">
        <span >
            <h3>Formulario para agregar una licencia</h3>
            <hr>
            <form  method="post" action="<?php echo Config::get('URL');?>licencia/createLicence_User">
                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nombre Licencia</label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="licencia_name" >
                  </div>
                </div>
                <div class=" form-group row">
                    
                      <label for="example-text-input" class="col-3 col-form-label">Cantidad de usuario:</label>

                    <div class="form-group row col-9">
                        <div class="col-4">
                        <input class="form-control" type="text" name="licencia_user" >
                        </div>
                      <label for="example-text-input" class="col-4 col-form-label">Fecha expiración:</label>
                      <div class="col-4">
                       <input  type="date" name="licencia_expiration" min="2018-01-01" max="2050-05-25" step="1">
                      </div>
                    </div>

                    <!-- buscador de usuarios -->
                    
                    <div class="row col-12">
                        <div class="col-12 ml-3 mr-3">
                            <p class="col-3">Agregar usuario</p>
                            <div class="input-group pt-3 col-9">
                                <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <input id="filtrar" type="text" class="form-control" placeholder="Buscar por Usuario o Email">
                                <button class="btn btn-success pl-3" id="buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <table class="table table-hover" id="addUsers">
                            <thead>
                                <tr>
                                    <th>Seleccionado</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody class="buscar" id="users">

                            </tbody>
                        </table>
                    </div>
                </div>
                 <ul class="pagination justify-content-end">
                      <button  type="submit" class="btn btn-primary">Guardar</button>
                 </ul>
                
            </form> 
        </span>
</div>
        <?php if ($this->licencias) { ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Nombre Licencia</td>
                    <td>Cant. Usuario</td>
                    <td>Fecha Expiración</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->licencias as $key => $value) { ?>
                        <tr>
                            <td><?= htmlentities($value->licence_name); ?></td>
                            <td><?= htmlentities($value->licence_user); ?></td>
                            <td><?= htmlentities($value->licence_expiration); ?></td>
                            <td><a href="<?= Config::get('URL') . 'licencia/edit/' . $value->licence_id; ?>">Editar</a></td>
                            <td><a href="<?= Config::get('URL') . 'licencia/delete/' . $value->licence_id; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>Error al crear </div>
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