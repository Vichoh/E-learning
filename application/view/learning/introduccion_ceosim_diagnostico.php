<!DOCTYPE html>
<html lang="es-CL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Riesgos naturales en Chile | Kimgen LAB</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/barra-kimgen.css" rel="stylesheet">
	<link href="../css/aula.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
<style>
header {
height:150px;
}
main {
margin-bottom:30px;
}
.gris {
background-color:#f9f9f9;
}
.col-md-8{
width:65% !important;
margin-right:10px;
}
.texto-blanco {
 color:#FFF;
}
footer {
 height:280px;
 background-color:#5d5b59;
 border-top: solid 2px #b5b4b3;
 padding-top: 20px;
}
.go-left {
font-weight: bold;
float:right;
font-size: 150%;
padding-right:30px;
line-height: 0.9;
}
h1{
color:#008bcb;
font-size:24px;
font-weight: normal;
}
h2{
color:#7b7b7b;
}
.azul{
color:#008bcb;
}
.rojo{
/* Rosa oscuro */
  color:#ba0d81;
}
ol{
list-style-type: none;
margin:0;
padding:0;
}
ol > li{
padding:7px;
padding-left:25px;
background-color:#ececec;
margin-bottom:2px;
}
aside ul{
list-style-type: none;
margin-bottom:30px;
padding:0;
}
aside ul > li{
margin-bottom:5px;
   text-align: left;
}
hr {
    border-top: 2px solid #ba0d81 !important;
}
</style>
  </head>
  <body>
        <nav class="navbar navbar-gris navbar-static-top">
          <div class="container">
            <div id="navbar" class="navbar-collapse collapse">
              <button type="button" class="btn btn-amarillo navbar-btn" id="ir-home"><span class="glyphicon glyphicon-home"></span></button>       
              <button type="button" class="btn btn-verde navbar-btn navbar-right" id="boton-log-out"><span class="glyphicon glyphicon-remove"></span></button>
              <?php if (Config::get('USE_GRAVATAR')) { ?>
                <a href="<?php echo Config::get('URL'); ?>user" title="ir a mi perfil"><img class="navbar-btn navbar-right avatar-kimgen" src='<?= $this->user_gravatar_image_url; ?>' /></a>
              <?php } else { ?>
                <a href="<?php echo Config::get('URL'); ?>user" title="ir a mi perfil"><img class="navbar-btn navbar-right avatar-kimgen" src='<?= $this->user_avatar_file; ?>' /></a>
              <?php } ?>                  
              <a href="<?php echo Config::get('URL'); ?>user" title="ir a mi perfil"><p class="navbar-text navbar-right" id="login-name"><?= $this->user_name; ?></p></a>
            </div>
          </div>
        </nav>
<header class="gris">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
   <a href="/"><img src="../img/logo_aula.png" alt="Logo Kimgen LAB" style="margin-top: 13px;"></a>
   </div>
   <div class="col-md-4">
   <a href="http://lpt.cl"><img src="../img/logo_lpt.png" alt="Logo Laboratorio de Planificación Territorial - Universidad Católica de Temuco" style="padding-top: 50px;"></a>
   </div>
   <div class="col-md-4">
   </div>
  </div>
 </div>
</header>
<main>
 <div class="container">
  <h1>AULA AUTOAPRENDIZAJE </h1>
  <div class="row">
   <div class="col-md-8 gris">
    <article>
     <div class="container-fluid">
      <h2>Riesgos naturales en Chile</h2>
      <h3>Diagnóstico</h3>
   <p class="text-justify rojo">Bienvenidos al diagnóstico de <b>Riesgos naturales</b>, a continuación deberás responder 10 preguntas que te permitirán saber cuál es tu nivel de conocimiento sobre el riesgos naturales en Chile.</p>
      <p class="text-justify">Lee atentamente las indicaciones de cada pregunta. Una vez que finalices el diagnóstico dale a “enviar” para conocer tus resultados.</p>    
	<p></p>
	<hr>
		<p class="text-justify"><b>I. Instrucción para preguntas de selección múltiple</b></p>
		<p class="text-justify">Selecciona la respuesta correcta, recuerda que sólo hay una respuesta correcta por cada pregunta.</p>
    	<p class="text-justify">1.- Menciona cuáles son los factores que constituye el riesgo:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio text-justify">
				<label>
					<input type="radio" name="pregunta-uno" value="1">
					Peligro y vulnerabilidad
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-uno" value="2">
					Exposición y peligro
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-uno" value="4">
					Amenaza y vulnerabilidad 
				</label>
        	</div>
        </div>
      </div>
	  <p class="text-justify">2.- En caso de calamidad pública, el/la presidente/a tiene la facultad de decretar:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio text-justify">
				<label>
					<input type="radio" name="pregunta-seis" value="1">
					Estado de Emergencia
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-seis" value="2">
					Estado de Catástrofe
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-seis" value="3">
					Estado de Asamblea
				</label>
        	</div>
        </div>
      </div>
	  <p class="text-justify">3.- Cuál es la unidad encargada del monitoreo de las emergencias en Chile es:</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="radio text-justify">
            <label>
                <input type="radio" name="pregunta-siete" value="1">
                Bomberos y Carabineros
            </label>
            <br>
            <br>
            <label>
				<input type="radio" name="pregunta-siete" value="2">
                Fuerzas Armadas
            </label>
            <br>
            <br>
            <label>
				<input type="radio" name="pregunta-siete" value="3">
                Centro de Alerta Temprana (CAT)
            </label>
		          </div>
        </div>
      </div>
	  <p class="text-justify">4.- ¿Cuáles son las fases de la Gestión del Ciclo del Riesgo?</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="radio text-justify">
            <label>
                <input type="radio" name="pregunta-ocho" value="1">
                Prevención – Respuesta - Recuperación
            </label>
            <br>
            <br>
            <label>
              <input type="radio" name="pregunta-ocho" value="2">
                Antes – Durante – Después
            </label>
            <br>
            <br>
            <label>
               <input type="radio" name="pregunta-ocho" value="3">
                Mitigación – Prevención – Preparación 
            </label>
          </div>
        </div>
      </div>	  
    		  <p class="text-justify">5.- ¿Cuáles de las  acciones humanas descritas colaboran en el proceso de gestión de la emergencia?</p>
      <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> Establecer un plan de organización en el grupo familiar ante  la ocurrencia de una emergencia.</p>
		  <p class="text-justify"><b>II.</b> Urbanización en áreas de borde costero, llanuras de inundación, quebradas aluvionales.</p>
		  <p class="text-justify"><b>III.</b> Conocer los tipos de riesgos a los cuales estamos expuestos, saber qué hacer ante la manifestación de un evento, y contar con un kit de emergencia.</p>
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-tres" value="1">
				Sólo I
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="2">
				I y II
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="3">
				I y III
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="4">
				I, II y III
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="5">
				Todas las anteriores
			</label>
          </div>
		</div>
      </div> 
    	<p class="text-justify">6.- De acuerdo a la metodología que propone el Plan de Protección Civil ¿Cuáles son las acciones necesarias para realizar la identificación de riesgos y recursos disponibles en  una determinada unidad jurisdiccional, ya sea comuna o región?</p>
      <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> Análisis histórico </p>
		  <p class="text-justify"><b>II.</b> Investigación empírica ya sea técnica, científica, económica, de terreno, etc. </p>
		  <p class="text-justify"><b>III.</b> Discusión para priorizar participativamente las amenazas, vulnerabilidades y recursos.</p>
		  <p class="text-justify"><b>IV.</b> Elaboración de mapas y cartografías de identificando de riesgos y recursos para prevención y respuesta.</p>
		  <p class="text-justify"><b>V.</b> Planificación Integral en Protección Civil.</p>
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-cuatro" value="1">
				I y II
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="2">
				II, III y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="3">
				II,  IV y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="4">
				III y IV
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="5">
				Todas las anteriores
			</label>
          </div>
		</div>
      </div> 
    	
	  <hr>
		<p class="text-justify"><b>II. Instrucción para preguntas de opción múltiple</b></p>
		<p class="text-justify">Selecciona todas las opciones que consideres correcta según cada pregunta.</p>
    	<p class="text-justify">7.- Marque las alternativas correctas que indican las funciones de un Plan de Emergencia:</p>
      <div class="panel panel-default">
        <div class="panel-body text-justify">
          <div class="checkbox  text-justify">
          <label>
            <input type="checkbox" name="pregunta-9[]" value="1">
            Estandariza y protocoliza la respuesta a emergencias según nivel jurisdiccional que  corresponda
          </label>
          <br>
          <br>
          <label>
            <input type="checkbox" name="pregunta-9[]" value="2">
            Guía la acción colectiva y coordinada de los diferentes participantes del Comité de Protección Civil
          </label>
          <br>
          <br>
          <label>
             <input type="checkbox" name="pregunta-9[]" value="3">
            Encargada del monitoreo constante ante alguna emergencia que se presente a nivel nacional
          </label>
		  <br>
		  <br>
          <label>
             <input type="checkbox" name="pregunta-9[]" value="4">
            Determina la constitución del Comité de Operaciones de Emergencia
          </label>
          </div>
        </div>
      </div> 
	  <p class="text-justify">8.- ¿Cuáles de las siguientes funciones corresponden al Plan de Protección Civil de ONEMI?</p>
      <div class="panel panel-default">
        <div class="panel-body">
		  <div class="checkbox  text-justify">
			<label>
				<input type="checkbox" name="pregunta-5[]" value="1">
				Planificar, coordinar y ejecutar las acciones destinadas a prevenir o solucionar los problemas derivados de catástrofes.
			</label>
			<br>
			<br>
			<label>
				<input type="checkbox" name="pregunta-5[]" value="2">
				Delimitar las responsabilidades tanto políticas, legales, científicas, técnicas, como operativas, del Sistema Nacional de Protección Civil, en cada una de las etapas del ciclo del manejo de riesgos. 
			</label>
			<br>
			<br>
			<label>
				<input type="checkbox" name="pregunta-5[]" value="3">
				 Establecer el marco de acción global para abordar sistematizadamente las distintas etapas de ciclo de manejo del riesgo. 
			</label>
			<br>
			<br>
			<label>
				<input type="checkbox" name="pregunta-5[]" value="4">
				Elaborar mapas y cartografías identificando riesgos y recursos para prevención y respuesta. 
			</label>
           </div>
          </div>
		</div>
	    <hr>
	  <p class="text-justify"><b>III. Instrucción para preguntas de asociación de conceptos</b></p>
	  <p class="text-justify">Selecciona la opción correcta de acuerdo a los conceptos o definiciones según cada pregunta.</p>
	  <p class="text-justify">9.- Ordene los organismos mencionados, de acuerdo a las funciones que desempeñan en la gestión de riesgos según lo establecido en el Plan de Protección Civil:</p>
      <div class="panel panel-default">
        <div class="panel-body">
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-dos-a">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Comités de Protección Civil</option>
              <option value="2" >Comités de Operaciones de Emergencia</option>
            </select> 
           </div>
           <div class="col-md-8 text-justify">
           Organismo que representa los recursos humanos, técnicos y materiales del Sistema de Protección Civil para la prevención, mitigación, preparación y cumplimiento de planes y programas de emergencia.
           </div>
          </div>
          <br>
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-dos-b">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Comités de Protección Civil</option>
              <option value="2" >Comités de Operaciones de Emergencia</option>
            </select> 
            </div>
            <div class="col-md-8 text-justify">
             Organismo que se constituyen cuando se registran emergencias, desastres o catástrofes en su respectiva área jurisdiccional representan los recursos humanos, técnicos y materiales necesarios de coordinar para la respuesta y la rehabilitación ante la ocurrencia de un evento adverso o destructivo. 
             </div>
          </div>
		  <br>
        </div>
      </div>
    	<p class="text-justify">10.- Seleccione el nivel de alerta que corresponde a cada una de las definiciones presentadas a continuación:  </p>
      <div class="panel panel-default">
        <div class="panel-body">
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-diez-a">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Alerta temprana preventiva</option>
              <option value="2" >Alerta verde</option>
			  <option value="3" >Alerta amarilla</option>
			  <option value="4" >Aleta roja</option>
            </select> 
           </div>
           <div class="col-md-8 text-justify">
           Implica la vigilancia continua de la situación general del país, en cada área geográfica, para advertir con la máxima prontitud factible toda situación de riesgo, que pudiera desencadenar en un evento de emergencia.
           </div>
          </div>
          <br>
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-diez-b">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Alerta temprana preventiva</option>
              <option value="2" >Alerta verde</option>
			  <option value="3" >Alerta amarilla</option>
			  <option value="4" >Aleta roja</option>
            </select> 
            </div>
            <div class="col-md-8 text-justify">
             Se establece cuando el evento crece en extensión y severidad, requiriendo la movilización de todos los recursos necesarios y disponibles, para la atención y control del evento destructivo. 
             </div>
          </div>
		  <br>
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-diez-c">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Alerta temprana preventiva</option>
              <option value="2" >Alerta verde</option>
			  <option value="3" >Alerta amarilla</option>
			  <option value="4" >Aleta roja</option>
            </select> 
            </div>
            <div class="col-md-8 text-justify">
             Constituye un estado de reforzamiento de las condiciones de vigilancia y atención, mediante el monitoreo preciso y riguroso de las condiciones de riesgo advertidas, como también de una probable amenaza en curso, y las respectivas condiciones de vulnerabilidad asociadas a esa amenaza. 
             </div>
          </div>
		  <br>
         <div class="row">
          <div class="col-md-4">
            <select class="form-control" id="pregunta-diez-d">
              <option value="0" >Selecciona tu respuesta ...</option>
              <option value="1" >Alerta temprana preventiva</option>
              <option value="2" >Alerta verde</option>
			  <option value="3" >Alerta amarilla</option>
			  <option value="4" >Aleta roja</option>
            </select> 
            </div>
            <div class="col-md-8 text-justify">
             Se establece cuando una amenaza crece en extensión y severidad, lo que lleva a suponer que no podrá ser controlada con los recursos locales habituales, debiendo alistarse los recursos necesarios para intervenir, de acuerdo a la evolución del evento destructivo.
             </div>
          </div>
        </div>
      </div>
    	<button type="button" class="btn btn-rosado" id="finalizar-diagnostico"> Ver mi resultado</button>
    </div>
    </article>
   </div>
   <div class="col-md-4 gris">
    <aside>      
      <div class="container-fluid">
      <img src="../img/aula/riesgos/1.png" class="img-responsive" alt="Riesgos naturales en Chile">
      <h2 class="text-center">Riesgos naturales en Chile</h2> <br>  	  
      <a class="btn btn-rosado center-block" id="matricular">Matricular</a>
      <br>
      <p class="rojo text-center"><span class="glyphicon glyphicon-info-sign"></span> <strong>INFORMACIÓN ADICIONAL</strong></p>
      <p class="rojo"><span class="glyphicon glyphicon-user"></span> Estudiantes matriculados</p>
      <p><?= $this->total_matriculados; ?> estudiantes.</p> 
      <p class="rojo"><span class="glyphicon glyphicon-time"></span> Tiempo requerido para hacer el curso:</p>
      <p>6 semanas, con un tiempo de dedicación de 4 horas semanales.</p>
      <p class="rojo text-center"><span class="glyphicon glyphicon-file"></span> <strong>MATERIALES</strong></p>
	  <div class="panel-group" id="accordion" role="tablist">
		<div class="panel panel-transparente">				
			<div class="row">			
				<a href="#rdigital" data-parent="#accordion" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false">
					<p class="rojo col-md-10"><span class="glyphicon glyphicon-film"></span> Recursos digitales</p>				
					<p id="icon1" class="col-md-2"><span class="rojo text-left glyphicon glyphicon-plus btn-xs"></span></p>				
				</a>
			</div>
			<div class="panel-collapse collapse" role="tabpanel" id="rdigital" aria-expanded="false" style="height: 0px;">
				<ul class="list-group">
				   <!-- VIdeos Curso -->
					<?php
					$videos = $this->videos;
					for($i=0; $i<count($videos); $i++){
					?>
						<li id="video" data-p="<?= $i ?>" data-url="<?= $videos[$i]->url_archivo; ?>" data-nombre="<?= $videos[$i]->nombre_archivo; ?>"><span class="glyphicon glyphicon-facetime-video"></span> <a <?php if (LoginModel::isUserLoggedIn() && $this->esta_matriculado == true) { ?>href="#video" <?php } ?> ><?= $videos[$i]->nombre_archivo; ?></a></li>
					<?php } ?>		
				<!-- /VIdeos Curso -->
				</ul>						
			</div>
		</div> 	
		<div class="panel panel-transparente">
			<div class="row">
				<a href="#rdescargablecolor" data-parent="#accordion" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false">
					<p class="rojo col-md-10"><span class="glyphicon glyphicon-download-alt"></span> Recursos descargables a color</p>
					<p id="icon2" class="col-md-2"><span class="rojo text-left glyphicon glyphicon-plus btn-xs"></span></p>
				</a>
			</div>
			<div class="panel-collapse collapse" role="tabpanel" id="rdescargablecolor" aria-expanded="false" style="height: 0px;">
				<ul class="list-group">
					<!-- Fichas color Curso -->
					<?php
					$fichas_color = $this->fichas_color;
					for($i=0; $i<count($fichas_color); $i++){
					?>
						<li id="color" ><span class="glyphicon glyphicon-file"></span> <a <?php if (LoginModel::isUserLoggedIn() && $this->esta_matriculado == true) { ?>href="../pdf/riesgos/Fichas color/<?= $fichas_color[$i]->url_archivo; ?>" <?php } ?> download="<?= $fichas_color[$i]->nombre_archivo; ?> (color)"><?= $fichas_color[$i]->nombre_archivo; ?></a></li>
					<?php } ?>		
				<!-- /Fichas color Curso -->
				</ul>						
			</div>
		</div> 	
		<div class="panel panel-transparente">
			<div class="row">
				<a href="#rdescargablegris" data-parent="#accordion" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false">
					<p class="rojo col-md-10"><span class="glyphicon glyphicon-download-alt"></span> Recursos descargables en escala de grises</p>
					<p id="icon3" class="col-md-2"><span class="rojo text-left glyphicon glyphicon-plus btn-xs"></span></p>
				</a>
			</div>
			<div class="panel-collapse collapse" role="tabpanel" id="rdescargablegris" aria-expanded="false" style="height: 0px;">
				<ul class="list-group">
				   <!-- Fichas gris Curso -->
					<?php
					$fichas_gris = $this->fichas_gris;
					for($i=0; $i<count($fichas_gris); $i++){
					?>
						<li id="gris" ><span class="glyphicon glyphicon-file"></span> <a <?php if (LoginModel::isUserLoggedIn() && $this->esta_matriculado == true) { ?>href="../pdf/riesgos/Fichas gris/<?= $fichas_gris[$i]->url_archivo; ?>" <?php } ?> download="<?= $fichas_gris[$i]->nombre_archivo; ?> (gris)"><?= $fichas_gris[$i]->nombre_archivo; ?></a></li>
					<?php } ?>		
				<!-- /Fichas gris Curso -->
				</ul>						
			</div>
		</div> 		
	 </div>
      <p class="rojo text-center"><span class="glyphicon glyphicon-user"></span> <strong>DESTINATARIOS</strong></p>
      <p class="text-justify">Profesores, estudiantes, organizaciones civiles e instituciones del Estado vinculadas a la gestión y prevención de riesgos naturales.</p>
     </div>
    </aside>
   </div>
  </div>
 </div>
</main>
<footer>
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-3">
    <a href="/"><img src="../img/logo_aula.png" alt="Logo Kimgen LAB"></a>
   </div>
   <div class="col-md-3">
    <p class="texto-blanco">ACERCA DE</p>
    <p class="texto-blanco">KimGen LAB es una<br>plataforma educativa en<br>riesgos naturales de Chile</p>
   </div>
   <div class="col-md-3">
    <p class="texto-blanco">QUIÉNES SOMOS</p>
    <p class="texto-blanco">Un equipo interdisciplinario<br>comprometido con la geografía y la<br>educación en riesgos naturales</p>
   </div>
   <div class="col-md-3">
    <a href="https://www.facebook.com/KimgenUCT/"><img src="../img/fb.jpg" alt="Facebook"></a>
    <a href="https://twitter.com/kimgenuct"><img src="../img/tw.jpg" alt="Twitter"></a>
    <img src="../img/ytb.jpg" alt="YouTube">
   </div>
  </div>
  <div class="row">
   <div class="col-md-3">
   </div>
   <div class="col-md-9">
    <img src="../img/logos_aula_footer.jpg" class="img-responsive" alt="Logo Kimgen LAB">
   </div>
  </div>
 </div>
</footer> 

<!-- Modal mensaje de info-->
<div class="modal fade " tabindex="-1" id="modal-mensaje">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-info" id="header-mensaje">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titulo">Mensaje</h4>
      </div>
      <div class="modal-body" id="mensaje">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer" id="botones-mensaje">
        <button type="button" id="aceptar-mnsje" class="btn btn-primary" data-dismiss="modal">Aceptar</button> 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- Modal de error-->
<div class="modal fade " tabindex="-1" id="modal-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-danger" id="header-error">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titulo-error"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> Problema detectado</h4>
      </div>
      <div class="modal-body" id="mensaje-error">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer" id="botones-error">
        <button type="button" id="aceptar-error" class="btn btn-danger" data-dismiss="modal">Aceptar</button> 
      </div>
    </div>
  </div>
</div>

<!-- Modal de Success-->
<div class="modal fade " tabindex="-1" id="modal-bien">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-success" id="header-bien">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titulo-bien"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Bien hecho</h4>
      </div>
      <div class="modal-body" id="mensaje-bien">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer" id="botones-bien">
        <button type="button" id="aceptar-bien" class="btn btn-success" data-dismiss="modal">Aceptar</button> 
      </div>
    </div>
  </div>
</div>


  <script type="text/javascript">
  $(document).ready(function(){
	  $("#rdigital").on("hide.bs.collapse", function(){
		$("#icon1").html('<span class="rojo text-left glyphicon glyphicon-plus btn-xs col-md-2"></span>');
	  });
	  $("#rdigital").on("show.bs.collapse", function(){
		$("#icon1").html('<span class="rojo text-left glyphicon glyphicon-minus btn-xs col-md-2"></span>');
	  });
	});
	$(document).ready(function(){
	  $("#rdescargablecolor").on("hide.bs.collapse", function(){
		$("#icon2").html('<span class="rojo text-left glyphicon glyphicon-plus btn-xs col-md-2"></span>');
	  });
	  $("#rdescargablecolor").on("show.bs.collapse", function(){
		$("#icon2").html('<span class="rojo text-left glyphicon glyphicon-minus btn-xs col-md-2"></span>');
	  });
	});
	$(document).ready(function(){
	  $("#rdescargablegris").on("hide.bs.collapse", function(){
		$("#icon3").html('<span class="rojo text-left glyphicon glyphicon-plus btn-xs col-md-2"></span>');
	  });
	  $("#rdescargablegris").on("show.bs.collapse", function(){
		$("#icon3").html('<span class="rojo text-left glyphicon glyphicon-minus btn-xs col-md-2"></span>');
	  });
	});
     document.getElementById("boton-log-out").addEventListener("click", function(){
         window.location.href = "../login/logout";
      });
     document.getElementById("ir-home").addEventListener("click", function(){
         window.location.href = "/";
      });
    
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    });
    
    $("#finalizar-diagnostico").on("click", function(){		
	  var p1 = $('input[name=pregunta-uno]:checked').val();
	  var p2a = document.getElementById("pregunta-dos-a").value;
      var p2b = document.getElementById("pregunta-dos-b").value;
	  var p3 = $('input[name=pregunta-tres]:checked').val();
	  var p4 = $('input[name=pregunta-cuatro]:checked').val();
	  var p5 = document.getElementsByName('pregunta-5[]');
	  var p6 = $('input[name=pregunta-seis]:checked').val();
	  var p7 = $('input[name=pregunta-siete]:checked').val();
	  var p8 = $('input[name=pregunta-ocho]:checked').val();
	  var p9 = document.getElementsByName('pregunta-9[]');
	  var p10a = document.getElementById("pregunta-diez-a").value;
      var p10b = document.getElementById("pregunta-diez-b").value;
	  var p10c = document.getElementById("pregunta-diez-c").value;
      var p10d = document.getElementById("pregunta-diez-d").value;

      var ok5 = 0;
      var ok9 = 0;

	  for (var i=0; i < p5.length; i++){
        if(p5[i].checked == true){
          ok5 = 1;
          break;
        }
      }
      for (var i=0; i < p9.length; i++){
        if(p9[i].checked == true){
          ok9 = 1;
          break;
        }
      }
	  
		var cont = 0;
		if(p1 != undefined && p2a != 0 && p2b != 0 && p3 != undefined && p4 != undefined && ok5 != 0 && p6 != undefined && p7 != undefined && p8 != undefined && ok9 != 0 && p10a != 0 && p10b != 0 && p10c != 0 && p10d != 0){  
		  if(p1 == 4){
			  cont++;
		  }
		  if(p2a  == 1 && p2b == 2){
			cont++;
		  }
		  if(p3 == 3){
			cont++;
		  }
		  if(p4 == 5){
			cont++;
		  }
		  if(p5[0].checked == true && p5[1].checked == true && p5[2].checked == true && p5[3].checked == true){
			cont++;
		  }
		  if(p6 == 2){
			cont++;
		  }
		  if(p7 == 3){
			cont++;
		  }
		  if(p8  == 2){
			cont++;
		  }
		  if(p9[0].checked == true && p9[1].checked == true && p9[2].checked == false && p9[3].checked == true){
			cont++;
		  }
		  if(p10a == 2 && p10b == 4 && p10c == 1 && p10d == 3){
			cont++;
		  }
		    if (cont == 10){
			  $("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;Diagnóstico curso de riesgos naturales completado');
			  $("#mensaje-bien").html('<h3>¡Felicidades!</h3><br><h4>Has obtenido '+cont+'/10.</h4><p class="text-justify">¡Muy bien! tienes un alto nivel de conocimientos en esta materia, sin embargo hay algunos aspectos que son importante fortalecer. Te invitamos a tomar el curso y potenciar tus conocimiento y habilidades.</p>');
			}
			if (cont >= 8 && cont < 10 ){
			  $("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;Diagnóstico curso de riesgos naturales completado');
			  $("#mensaje-bien").html('<h3>¡Felicidades!</h3><br><h4>Has obtenido '+cont+'/10.</h4><p class="text-justify">Muy bien tienes un alto nivel de conocimientos en esta materia, sin embargo hay algunos aspectos que necesitas reforzar! Te invitamos a tomar el curso y potenciar tus conocimiento y habilidades.</p>');
			}
			if (cont >= 5 && cont < 8){
			  $("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;Diagnóstico curso de riesgos naturales completado');
			  $("#mensaje-bien").html('<h3>¡Bien Hecho!</h3><br><h4>Has obtenido '+cont+'/10.</h4><p class="text-justify">Tienes información sobre el tema, pero aún requieres conocer más para tomar decisiones apropiadas en caso de una erupción volcánica. Te invitamos a tomar el curso y potenciar tus conocimiento y habilidades.</p>');
			}
			if(cont < 5){
			  $("#titulo-bien").html('&nbsp;Diagnóstico curso de riesgos naturales realizado');
			  $("#mensaje-bien").html('<h3>¡Buen intento!</h3><br><h4>Has obtenido '+cont+'/10.</h4><p class="text-justify">Necesitas preparate más! Te invitamos a tomar el curso y potenciar tus conocimiento y habilidades.</p>');
			}
			diagnostico = ((cont*100)/10);
			$("#aceptar-bien").html('Matricularme en el curso');
			$("#aceptar-bien").on("click", function(){	  
			   $.post( "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_guardar_diagnostico", {diagnostico: diagnostico})
				.done(function( data ) {
					window.location.href = "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_matricular";
			   });
			});
			$("#modal-bien").modal('show');			
		}else{
			$("#mensaje-error").html('<p>Para finalizar el diagnóstico debes responder todas las preguntas.</p>');						
			$("#modal-error").modal('show');
		}	
	});
	
	$("#matricular").on("click", function(){
        $("#mensaje-error").html('<p class="text-justify">Para poder matricularte debes terminar el diagnóstico.</p>');
        $("#modal-error").modal('show');
	});
	
	  /** Videos */
      function popup_login(){
        $("#mensaje-error").html('<p class="text-justify">Para poder acceder a esto recursos debes matricularte en el curso.</p>');
        $("#modal-error").modal('show');
      }
      $("li").click(function (event) {		  
			liObject = event.currentTarget;
				
			switch(liObject.id) {
				case 'video':					
					popup_login();
					break;
				case 'color':					
					popup_login();
					break;
				case 'gris':					
					popup_login();
					break;
			}
		});	
  </script>
  </body>
</html>