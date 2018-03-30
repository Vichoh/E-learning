
<section>
<div class="container ml-0 pl-0 " style="width: 100%;">

    <div class="col-8 offset-3 mt-5" style="height: 100%">

         <h1 class=" pt-4 pb-4 mb-4" style=" font-weight: 300; font-size: 30px">Usuarios </h1>

    
           <?php if ($this->users) { ?>
            <table class="table table-bordered">
              <thead >
                <tr class="bg-primary text-white">
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->users as $key => $value) { ?>
                <tr>
                  <th class="bg-info text-white"><?= htmlentities($value->user_realname); ?></th>
                  <td class="bg-info text-white"><?= htmlentities($value->user_name); ?></td>
                  <td class="bg-info text-white"><?= htmlentities($value->user_email); ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
            <div> </div>
        <?php } ?>
          <!--  paginacion -->
	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
     <?php for ($i=0; $i < ($this->users_count)/5; $i++) { ?>
         <li class="page-item"><a class="page-link" href="#">1</a></li>
     <?php } ?>
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
               
    </div>
</div>




</section>