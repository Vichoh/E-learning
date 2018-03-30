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
.col-md-7{
width:57% !important;
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
margin-bottom: 30px;
}
h2{
color:#7b7b7b;
}
.azul{
color:#008bcb !important;
}
.linea-izq{
	border-left: 2px solid #008bcb !important; 
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
</style>
  </head>
  <body>
	<nav class="navbar navbar-gris navbar-static-top">
	  <div class="container">
		<div id="navbar" class="navbar-collapse collapse">
		  <button type="button" class="btn btn-amarillo navbar-btn" id="ir-home" title="Volver a la página principal"><span class="glyphicon glyphicon-home"></span></button>
		  <button type="button" class="btn btn-amarillo navbar-btn" id="ir-volver" title="Volver a riesgos naturales"><span class="glyphicon glyphicon-arrow-left"></span></button>       
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
  <h1>AULA AUTOAPRENDIZAJE</h1>
  <div class="row">
    <div class="col-md-12">
      <ul id="progressbar-kimgen" class="riesgos">
        <li class="<?php if ($this->p1 == true && $this->p2 == true && $this->p3 == true && $this->p4 == true) { echo 'active';}?>">Introducción</li>
        <li class="<?php if ($this->p5 == true && $this->p6 == true) { echo 'active';}?>">Lección 1</li>
        <li class="<?php if ($this->p7 == true &&
                             $this->p8 == true &&
                             $this->p9 == true &&
                             $this->p10 == true &&
                             $this->p11 == true &&
                             $this->p12 == true &&
							 $this->p13 == true &&
							 $this->p14 == true) { echo 'active';}?>">Lección 2</li>
        <li class="<?php if ($this->p15 == true && $this->p16 == true && $this->p17 == true) { echo 'active';}?>">Lección 3</li>
      </ul>
    </div>
  </div>
  <div class="row">
   <div class="col-md-2">
    <div id="panel-afix">
		<div class="panel panel-default">
		  <div class="panel-body">
			<nav id="nav-scrollspy">
			  <ul class="nav nav-stacked" id="sidebar">
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_en_chile">Inicio</a></li>
				<li><a class="azul linea-izq" href="#introduccion"><?php if ($this->p1 == true && $this->p2 == true && $this->p3 == true && $this->p4 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Introducción</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_1"><?php if ($this->p5 == true && $this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 1</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_2"><?php if ($this->p7 == true &&
																								   $this->p8 == true &&
																								  $this->p9 == true &&
																								  $this->p10 == true &&
																								  $this->p11 == true &&
																								  $this->p12 == true &&
																								  $this->p13 == true &&
																								  $this->p14 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 2</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_3"><?php if ($this->p15 == true && $this->p16 == true && $this->p17 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 3</a></li>
			  </ul>
			</nav>
		  </div>	  
		</div>
		<div class="row">
			<p class="text-center rojo"><strong><small>VISITANOS</small></strong></p>
			<p ></p>
			<p class="text-center rojo"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a target="_blank" href="<?php echo Config::get('URL'); ?>/social" class="btn btn-pto-encuentro btn-sm" style="width: 130px">Punto de Encuentro</a></p>			
			<p class="text-center rojo"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a target="_blank" href="#" class="btn btn-centro-recursos btn-sm" style="width: 130px">Centro de Recursos</a></p>			
			<p class="text-center rojo"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a target="_blank" href="<?php echo Config::get('URL'); ?>/atlas" class="btn btn-atlas btn-sm" style="width: 130px">Atlas</a></p>			
		</div>
	</div>
   </div>
   <div class="col-md-7 gris">
    <article id="contenido-general">
     <div class="container-fluid">
      <h2>Riesgos naturales en Chile</h2>
      <h2 class="rojo" id="introduccion">INTRODUCCIÓN</h2>	  
	  <p class='text-justify'>
		Chile físicamente es un país que en cuanto a su latitud y longitud se caracteriza por una variabilidad climática, geomorfológica, geológica, climatológica diversa. Particularidades que se presentan en un territorio que se configura por un desierto con uno de los climas más áridos del planeta, y al mismo tiempo ambientes glaciales ubicados en el extremo Sur. Destaca además la presencia de La Cordillera de Los Andes que actúa como biombo climático que modela la distribución de los cursos hídricos.
	  </p>
	  <p class='text-justify'>
		Asimismo, es dominada por una extensa costa que abarca la sección poniente del territorio, distribuido sobre el cinturon de fuego del pacifico que como consecuencia genera amenaza por eventos de terremotos y un volcánismo activo representada por al menos 2000 volcanes distribuidos en la zona cordillerarana, de los cuales 90 son reconocidos como volcanes activos por el Servicio Nacional de Geología y Minería.
	  </p>
	  <p class='text-justify'>
		A raíz de estas condiciones físicas, reconocemos en el país una innumerable datación de eventos de origen natural, los cuales han ocasionado una serie de desastres socionaturales,  ejemplo de ello es la erupción del volcán Chaitén ocurrida el año 2008 la cual como consecuencia provoca la erradicación de una ciudad completa, el terremoto del 27 de febrero del año 2010, la ocurrencia de eventos aluvionales en la zona norte del país siendo el más relevante de ellos los ocurridos en marzo de 2015 afectando al menos 27 localidades en las regiones de Antofagasta, Atacama y Coquimbo, mientras que históricamente destaca el mayor terremoto registrado a nivel global ocurrido el 22 de mayo de 1960.
	  </p>
	  <p class='text-justify'>
		En un contexto de condición de riesgo, el país paulatinamente ha ido enfocado su interés en la reducción de los riesgos de desastres sumandos al  contexto global que a partir del año 1990 centra su preocupación en los efectos de los desastres, en este año la Asamblea General de las Naciones Unidas declaró el periodo 1990-1999 como el Decenio Internacional para la Reducción de los Desastres Naturales (DIRDN), cuatro años después, en la ciudad japonesa de Yokohama, se realizó una nueva conferencia mundial sobre la reducción de los desastres naturales, donde se elaboró la Estrategia y Plan de Acción de Yokohama para un Mundo más Seguro. En el año 2000, la Asamblea General de las Naciones Unidas estableció la Estrategia Internacional para la Reducción de Desastres (EIRD), como sucesora del DIRDN. En este sentido, la EIRD “proporciona un marco de acción de carácter mundial para reducir las pérdidas humanas, sociales, económicas y ambientales a que dan lugar las amenazas naturales y otros fenómenos tecnológicos y ambientales conexos” (EIRD, 2004)
	  </p>
	  <p class='text-justify'>
		El 22 de enero de 2005, siendo la novena sesión plenaria de la Conferencia Mundial sobre la Reducción de los Desastres, se aprobó en Kobe, Japón, el Marco de Acción de Hyogo (MAH) para el período 2005 - 2015, el MAH es el instrumento más importante para la implementación de la Reducción del Riesgo de Desastres (RRD) que adoptaron los Estados miembros de Naciones Unidas, entre los cuales se encuentra Chile,  su objetivo general es aumentar la resiliencia de las naciones. Posteriormente este marco es actualizado en el año 2015 en la ciudad de Sendai, y a semejanza del Marco de Hyogo, busca integrar a los países en el propósito de la Reducción del Riesgo de Desastre a nivel mundial.
	  </p>
	  	  <div class='panel panel-rosado'>
		<div class='panel-body '>
	  <a class='text-primary' id='img-1' href='#img-1'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/0_1.png' class='img-responsive center-block' alt='Imagen 1'></a>
		  <p><small>Fuente: KimGen LAB, 2017.</small></p>
		</div>
	  </div>
	  <p class='text-justify'>
		A partir de los marcos internacionales mencionados,  el país estructura un marco legal y normativo para la reducción de desastres y/o emergencias desde el nivel nacional hasta el nivel local, definida por la Constitución Política del Estado de Chile que en su primer capítulo señala: “es deber del Estado resguardar la seguridad nacional, dar protección a la población y  a la familia” acción que se materializar a través del Sistema Nacional de Protección Civil y es coordinada por la Oficina Nacional de Emergencia, dependiente del Ministerio del Interior, siendo el propósito general la gestión de los riesgos para disminuir la vulnerabilidad y aumentar la resiliencia. 
	  </p>	  
	  <p class='text-justify'>
		Referido a la conceptualización de la gestión de riesgo de desastres, ésta se asocia a la Estrategia Internacional para la Reducción de Desastres, en ella la <b> gestión del riesgo </b> se define como “el proceso sistemático de utilizar decisiones administrativas, organizaciones, destrezas y capacidades operáticas para ejecutar políticas y fortalecer capacidades de afrontamiento, con el  <strong>fin de reducir los impactos adversos de las amenazas naturales y la posibilidad de que ocurra un desastre”</strong>,  la definición comprende el enfoque y la práctica sistemática de gestionar la incertidumbre para minimizar los daños y las pérdidas potenciales. 
	  </p>
	  <p class='text-justify'>
		Mientras que la <b> reducción de riesgo de desastres</b> es definida como “el concepto y la práctica de <strong>reducir el riesgo de desastres mediante esfuerzos sistemáticos dirigidos al análisis y a la gestión de los factores causales de los desastres, lo que incluye la reducción del grado de exposición, la disminución de la vulnerabilidad de la población y la propiedad</strong>, una gestión sensata de los suelos y de medio ambiente, y el mejoramiento de la preparación ante los eventos adversos”.
	  </p>
	  <p class='text-justify'>
		
		</p>
	  <p class='text-justify'>
		Estas definiciones presentan dos ideas esenciales, primero que la gestión es un proceso, y segundo que la gestión es tanto para reducir el riesgo existente como para evitar la generación de nuevos riesgos.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			Para comprender los ámbitos de acción sobre los cuales trabajan estos enfoques es esencial comprender el riesgo como el resultado de la interacción de diferentes variables.
		  </p>
		  <a class='text-primary' id='img-2' href='#img-2'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/0_2.png' class='img-responsive center-block' alt='Imagen 2'></a>
		  <p class='text-justify'> En la definición, la amenaza representa todos aquellos eventos de origen natural o antrópico que pueden ocasionar un peligro para la población, la vulnerabilidad por su parte constituye las variables sociales y exposición ante una amenaza, mientras que la capacidad refiere a la disposición de recursos humanos y económicos para hacer frente a un desastre.</p>
		  <p><small>Fuente: KimGen LAB, 2017.</small></p>
		</div>
	  </div>
	  <p class='text-justify'>
		A raíz de los antecedentes antes mencionados, el presente curso desde un enfoque geográfico acentúa su interés en lograr la comprensión de la condición de riesgos en el país, originada por las particularidades físicas de los territorios que en integración con las variables sociales genera escenarios susceptibles a riesgos, el enfoque geográfico nos permite entender la construcción social del riesgo, como las formas en que la sociedad construye contextos frágiles que incrementan las dimensiones de vulnerabilidad propiciando la ocurrencia de desastres. En este contexto reconoceremos las estrategias de gestión de los riesgos, y los marcos normativos que operan en el país para la reducción de riesgos, con el propósito final de fortalecer la capacidad de respuesta y promover la resiliencia de la sociedad. 
	  </p>
	  
	  	  	  <div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>¿Qué acciones ha realizado nuestro país para evitar reducir el riesgo de desastres?</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> Incorporarse a la Política Global  para la Reducción de Desastres establecida por la ONU.</p>
		  <p class="text-justify"><b>II.</b> Generar un marco legal y normativo para la reducción de desastres desde el nivel nacional al local dentro de la Constitución Política del Estado.</p>
		  <p class="text-justify"><b>III.</b> Apoyar el Marco de Acción de Hyogo para implementar la reducción del riesgo de  desastres.</p>
		  <p class="text-justify"><b>IV.</b> Nuestro país aún no genera marcos legales para responder a los desastres naturales.</p>
		  <div class="radio">
			<label>
				<input type="radio" id="uno-alt1" name="pregunta-uno" value="1" <?php if ($this->p1 == true) { echo 'disabled'; } ?>>
				Sólo I
			</label>
			<br>
			<label>
				<input type="radio" id="uno-alt2" name="pregunta-uno" value="2" <?php if ($this->p1 == true) { echo 'disabled'; } ?>>
				Sólo IV
			</label>
			<br>
			<label>
				<input type="radio" id="uno-alt3" name="pregunta-uno" value="3" <?php if ($this->p1 == true) { echo 'disabled'; } ?> <?php if ($this->p1 == true) { echo 'checked'; } ?>>
				I, II y III
			</label>
			<br>
			<label>
				<input type="radio" id="uno-alt4" name="pregunta-uno" value="4" <?php if ($this->p1 == true) { echo 'disabled'; } ?>>
				Todas las anteriores
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="1" class="btn btn-rosado" <?php if ($this->p1 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>   
	  
	  <p class="text-right"><button class="btn btn-rosado" onclick="window.location='<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_1'" role="button"><span class="glyphicon glyphicon-star"></span> Avanzar a la Lección 1</button></p>
     </div>
    </article>
   </div>
   <div class="col-md-3 gris">
    <aside id="aside-afix">
     <div class="container-fluid">
      <img src="../img/aula/riesgos/1.png" class="img-responsive" alt="Riesgos naturales en Chile">
      <h2 class="text-center">Riesgos naturales en Chile</h2> <br>     
      <?php if (LoginModel::isUserLoggedIn() && $this->esta_matriculado == true) { ?>
        <p class="text-center matriculado"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <strong>MATRICULADO</strong></p>
      <?php } else { ?>
        <a class="btn btn-rosado center-block" id="matricular">Matricular</a>
      <?php } ?>
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
<footer id="final">
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
  <!-- /.mesaje al usuario -->
  
<!-- Modal de video-->
<div class="modal fade" tabindex="-1" id="modal-video">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header header-riesgos">
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titulo-video">Modal title</h4>
      </div>
      <div class="modal-body" id="mensaje-video">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer" id="botones-video">
        <button type="button" class="btn btn-rosado" id="continuar-video">Continuar con el curso</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

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
  
      $('body').scrollspy({
          target: '#nav-scrollspy',
      });
      $(window).scroll(function(){
        var a = $(window).scrollTop()
        var b = $("#contenido-general").height() - $("#aside-afix").height() +100
        if (a < 350){
          $("#aside-afix").css({top: 0,position:'relative',height:'auto',overflow:'none'});
          $("#panel-afix").css({top: 0,position:'relative'});
        }
        else if (a > 350 && a < b){
          $("#aside-afix").css({top: $(window).scrollTop() - 390, position:'absolute',height:'600px',overflow:'auto'});
          $("#panel-afix").css({top: $(window).scrollTop() - 390, position:'absolute'});	  
        }
      });
      document.getElementById("boton-log-out").addEventListener("click", function(){
         window.location.href = "../login/logout";
      });
      $("#ir-volver").on("click", function(){
         window.location.href = "../aula/riesgos_naturales_en_chile";
      });
	  document.getElementById("ir-home").addEventListener("click", function(){
         window.location.href = "/";
      });
	  
	  /* Guardar Respuestas */
	  $(document).ready(function () {      
		
		$("button#btn-respuesta-select").click(function (event) { 	
					pregunta = 1;					
					select1 = document.getElementById("uno-alt1").checked;
					select2 = document.getElementById("uno-alt2").checked;
					select3 = document.getElementById("uno-alt3").checked;
					select4 = document.getElementById("uno-alt4").checked;
					
					if(select1 == false && select2 == false && select3 == false && select4 == false){
							$("#mensaje-error").html('<p>Debes seleccionar una respuesta válida para la pregunta.</p>');
							$("#modal-error").modal('show');
							text = false;					
					}else{				
						if(select3 == true){
							text = true;					
						}else{
							$("#mensaje-error").html('<p>Tu respuesta esta incorrecta. Intenta de nuevo, revisa los textos y videos de la lección.</p>');
							$("#modal-error").modal('show');
							text = false;
						}									
					}					
			if(text){
				$.post( "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_pregunta", { npreg: pregunta, resp: text })
				.fail(function() {
					$("#mensaje-error").html('<p>Tu respuesta no pudo ser guardada.<br>Por favor intenta más tarde.</p>');
					$("#modal-error").modal('show');	
				})
				.done(function( data ){
					$("#btn-respuesta").prop('disabled', false);
					$("#mensaje-bien").html('<p>Tu respuesta es correcta y fue guardada.</p>');
					$("#modal-bien").modal('show');					
					$("#aceptar-bien").on("click", function(){
					$("#btn-respuesta").prop('disabled', true);
					location.reload();
					}); 
				});
					}
		    });  
	  
      $("button#btn-respuesta4").on("click", function(){
		    if($('#archivo').val() != "" || $(this).val() == "no-profe"){
				$.post( "<?php echo Config::get('URL'); ?>aula/volcanismo_pregunta", { npreg: 4, resp: 'video publicado' })
				 .done(function( data ) {
					location.reload();
				});
			}else{
				$("#mensaje-error").html('<p class="text-justify">Debe seleccionar algun video para compartir.</p>');
				$("#aceptar-error").on("click", function(){
					$("#modal-error").modal('hide');
				});
				$("#modal-error").modal('show');
			}        
      });
	  
	   $("#archivo").change(function(evento){                        
			var val = $(this).val();
			// Validacion tipo de archivo
			switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
				case 'mp4':
					break;
				default:
					$(this).val('');
					$("#mensaje-error").html('<p class="text-justify">Sólo se pueden seleccionar videos con extensión MP4.</p>');
					$("#aceptar-error").on("click", function(){
						$("#modal-error").modal('hide');
					});
					$("#modal-error").modal('show');
					break;
			}
			// Validacion de tamaño < 10 MB			
			if((this.files[0].size/1024) > 10240 || (this.files[0].size/1024) <= 0){
				$("#mensaje-error").html('<p class="text-justify">El video no debe superar los 10 MB.</p>');
				$("#aceptar-error").on("click", function(){
					$("#modal-error").modal('hide');
				});
				$("#modal-error").modal('show');
			}			
		});
		
	});
	function desplegar_video(titulo,htmlx){
        $("#titulo-video").html(titulo);
        $("#mensaje-video").html(htmlx);
        $("#continuar-video").off();
        $("#continuar-video").on("click", function(){
          $("#modal-video").modal('hide');
        });
        $("#modal-video").modal('show');
      };
      $('#modal-video').on('hidden.bs.modal', function (e) {
        $("#video-frame").remove();
      });

	/* videos */
	$("li").click(function (event) {		  
		liObject = event.currentTarget;
			
		switch(liObject.id) {
			case 'video':					
				var titulo = '<span class="glyphicon glyphicon-facetime-video"></span> &nbsp;&nbsp;'+$(liObject).data( "nombre" );
				var basehtml = '<div class="embed-responsive embed-responsive-16by9" id="video-frame"><iframe width="560" height="315" src="'+$(liObject).data( "url" )+'" allowfullscreen></iframe></div>';
				var video = $(liObject).data( "url" );
				var cierrehtml = basehtml.replace(":video", video);
					desplegar_video(titulo,cierrehtml);
				break;
		}
	});
      
	  /* Pop-up imagen*/
	  $("#img-1").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Reducción de Riesgo de Desastre');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/0_1.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-2").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Riesgo de Desastre según la EIRD');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/0_2.png" class="img-responsive center-block" alt="2"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
  </script>
  </body>
</html>