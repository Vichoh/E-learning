<!DOCTYPE html>
<html lang="es-CL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Riesgos naturales | Kimgen LAB</title>
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
      <h3>Evaluación final</h3>
      <p class="text-justify rojo">Bienvenidos a la evaluación final de <b>Riesgos naturales</b>, a continuación deberás responder 15 preguntas que te permitirán acceder a la certificación del curso, para ello debes acertar a un mínimo de 80%.</p>
      <p class="text-justify">Lee atentamente las indicaciones de cada pregunta. Una vez que finalices el diagnóstico dale a “enviar” para conocer tus resultados.</p>    
	<p></p>
	<hr>
	  <p class="text-justify"><b>I. Instrucción para preguntas de selección múltiple</b></p>
	  <p class="text-justify">Selecciona la respuesta correcta, recuerda que sólo hay una respuesta correcta por cada pregunta.</p>
	 <p class="text-justify">1.- La mayoría de los aluviones que ocurren en Chile son causados por qué:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio text-justify">
				<label>
					<input type="radio" name="pregunta-seis" value="1">
					El agua se infiltra rápidamente en el suelo arcilloso luego de una intensa nevazón.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-seis" value="2">
					Por la ocurrencia de precipitaciones tenues y esporádicas.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-seis" value="3">
					A raíz de intensas precipitaciones o por deshielos abruptos, el agua se acumula en el suelo y fluye rápidamente.
				</label>
        	</div>
        </div>
      </div>
	  <p class="text-justify">2.- La mayor parte de la población que falleció durante el tsunami del año 1960 fue por qué:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio text-justify">
				<label>
					<input type="radio" name="pregunta-siete" value="1">
					Fueron arrastrados por las fuertes precipitaciones.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-siete" value="2">
					Bajaron desde los cerros luego de la primera ola para recoger sus pertenencias.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-siete" value="3">
					Repoblaron la ciudad luego del terremoto.
				</label>	
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-siete" value="4">
					Poca disponibilidad de agua dulce y propagación de enfermedades.
				</label>
        	</div>
        </div>
      </div>
	  <p class="text-justify">3.- Las regiones con mayor presencia de volcanes de activos de Chile según el ranking de SERNAGEOMIN del año 2015 corresponden a:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio">
				<label>
					<input type="radio" name="pregunta-ocho" value="1">
					Antofagasta y Coquimbo
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-ocho" value="2">
					Los Lagos y Aysén
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-ocho" value="3">
					La Araucanía y Coquimbo
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-ocho" value="4">
					La Araucanía y Los Lagos
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-ocho" value="4">
					Antofagasta y Los Lagos
				</label>
			</div>
        </div>
      </div>
	 <p class="text-justify">4.- La Estrategia Internacional para la Reducción de Desastres de las Naciones Unidas (EIRD) considera la “Resiliencia” como:</p>
      <div class="panel panel-default">
        <div class="panel-body">
        	<div class="radio text-justify">
				<label>
					<input type="radio" name="pregunta-quince" value="1">
					La capacidad de recuperación de los sistemas y mientras mayor resiliencia, mejor será la magnitud del riesgo de desastre.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-quince" value="2">
					La capacidad de afectar los sistemas y mientras menor resiliencia, mejor será la magnitud del riesgo de desastre.
				</label>
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-quince" value="3">
					La magnitud de impacto en los sistemas y mientras menor resiliencia, mejor será la magnitud del riesgo de desastre
				</label>				
				<br>
				<br>
				<label>
					<input type="radio" name="pregunta-quince" value="4">
					La capacidad de afectar los sistemas y mientras mayor resiliencia, peor será la magnitud del riesgo de desastre.
				</label>
        	</div>
        </div>
      </div>
	  <p class="text-justify">5.- ¿Cuáles de las  acciones humanas descritas colaboran en el proceso de gestión de la emergencia?</p>
      <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> Dislocaciones tectónicas.</p>
		  <p class="text-justify"><b>II.</b> Erupciones volcánicas.</p>
		  <p class="text-justify"><b>III.</b> Hipocentro submarino menor a 6,4° en la escala de Richter.</p>
		  <p class="text-justify"><b>IV.</b> Vientos marinos superiores a 100 km/hr.</p>
		  <p class="text-justify"><b>V.</b> Deslizamientos en el talud continental.</p>		  
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-cinco" value="1">
				I, II y III
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="2">
				II, IV y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="3">
				III, IV y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="4">
				I, II y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="5">
				I, III y V
			</label>
          </div>
		</div>
      </div> 
	  <p class="text-justify">6.- Las fases del ciclo de gestión del riesgo de desastre contempla:</p>
      <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> La prevención</p>
		  <p class="text-justify"><b>II.</b> La respuesta</p>
		  <p class="text-justify"><b>III.</b> La mitigación</p>
		  <p class="text-justify"><b>IV.</b> La preparación</p>
		  <p class="text-justify"><b>V.</b> La recuperación</p>
		  
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-once" value="1">
				I y II
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-once" value="2">
				III y IV
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-once" value="3">
				I, II y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-once" value="4">
				II, III y V
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-once" value="5">
				II, III y IV
			</label>
          </div>
		</div>
      </div>
	  <hr>
	  <p class="text-justify"><b>II. Instrucción para preguntas de opción múltiple</b></p>
	  <p class="text-justify">Selecciona todas las opciones que consideres correcta según cada pregunta.</p>
	  <p class="text-justify">7.- Desde el punto de vista climático ¿cuáles son los factores a los que se encuentra más expuesto Chile?</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="checkbox text-justify">
			  <label>
				<input type="checkbox" name="pregunta-1[]" value="1">
				Anticiclón del Pacífico Sur
			  </label>
			  <br>
			  <br>
			  <label>
				<input type="checkbox" name="pregunta-1[]" value="2">
				Desierto de Atacama
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-1[]" value="3">
				Monzón Amazónico
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-1[]" value="4">
				Frente Polar
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-1[]" value="5">
				Patagonia septentrional
			  </label>
          </div>
        </div>
      </div>   
	  <p class="text-justify">8.- Selecciona cuáles de los enunciados son correctos en función de las características asociadas a los tipos de terremotos que ocurren en Chile:</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="checkbox text-justify">
			  <label>
				<input type="checkbox" name="pregunta-4[]" value="1">
				Interplaca de mecanismo inverso o tipo thrust: Son los más frecuentes en Chile y pueden provocar tsunami.
			  </label>
			  <br>
			  <br>
			  <label>
				<input type="checkbox" name="pregunta-4[]" value="2">
				Intraplaca de profundidad intermedia: Son los más destructivos en Chile. 
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-4[]" value="3">
				Interplaca de profundidad intermedia: Son poco frecuentes en Chile y pueden provocar tsunami.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-4[]" value="4">
				Intraplaca superficial de la placa Sudamericana o corticales: Ocurren en fallas activas.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-4[]" value="5">
				Intraplaca de tipo thust: Pueden provocar tsunamis. 
			  </label>
          </div>
        </div>
      </div>  
	  <p class="text-justify">9.-Según el Banco Mundial (2015), la cuantificación de los riesgos naturales de Chile se expresan en:</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="checkbox text-justify">
			  <label>
				<input type="checkbox" name="pregunta-9[]" value="1">
				El 54% de la población chilena está expuesta a los riesgos naturales.
			  </label>
			  <br>
			  <br>
			  <label>
				<input type="checkbox" name="pregunta-9[]" value="2">
				El 12% del territorio nacional está expuesto a tres o más tipos de amenazas naturales.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-9[]" value="3">
				El 2% de la población chilena está expuesta a los riesgos naturales.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-9[]" value="4">
				Las pérdidas económicas entre los años 1980 y 2011 bordearon al 1,2% del PIB por causa de los desastres de origen natural.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-9[]" value="5">
				La agricultura es la más afectada ante riesgos de origen natural.
			  </label>
          </div>
        </div>
      </div>   
	  <p class="text-justify">10.- El concepto de “Protección Civil” es entendido por ONEMI como:</p>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="checkbox text-justify">
			  <label>
				<input type="checkbox" name="pregunta-12[]" value="1">
				La protección a las personas ante una situación de riesgo colectivo.
			  </label>
			  <br>
			  <br>
			  <label>
				<input type="checkbox" name="pregunta-12[]" value="2">
				La protección a sus bienes ante una situación de riesgo colectivo.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-12[]" value="3">
				La protección del suelo ante una situación de riesgo colectivo.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-12[]" value="4">
				La protección al ambiente ante una situación de riesgo colectivo.
			  </label>
			  <br>
			  <br>
			  <label>
				 <input type="checkbox" name="pregunta-12[]" value="5">
				La protección de los recursos naturales ante una situación de riesgo colectivo.
			  </label>
          </div>
        </div>
      </div>   
	  <hr>
	  <p class="text-justify"><b>III. Instrucción para preguntas de asociación de conceptos</b></p>
	  <p class="text-justify">Selecciona la opción correcta de acuerdo a los conceptos o definiciones según cada pregunta.</p>
	  <p class="text-justify">11.- Según la EIRD ¿Cuál es la ecuación que expresa el resultado del riesgo?</p>
      <div class="panel panel-default">
		<select class="form-control" id="pregunta-dos-a">
		  <option value="0" >Selecciona tu respuesta ...</option>
		  <option value="1" >(Vulnerabilidad X Capacidades)/Amenaza</option>
		  <option value="2" >(Amenaza X Vulnerabilidad)/Capacidades</option>
		</select> 
      </div>	  
	  <p class="text-justify">12.- Los riesgos naturales de origen geológico, son gatillados principalmente por:</p>
      <div class="panel panel-default">
		<select class="form-control" id="pregunta-tres-a">
		  <option value="0" >Selecciona tu respuesta ...</option>
		  <option value="1" >Borde divergente entre la placa de Nazca con la Antártica.</option>
		  <option value="2" >Borde de subducción entre la placa de Nazca con la placa Sudamericana</option>
		  <option value="3" >Borde transformante entre la placa Sudamericana con la placa Pacífica</option>			  
		</select> 
      </div>
	  <p class="text-justify">13.- Según la UNISDR, la finalidad de la gestión del riesgo de desastre es:</p>
      <div class="panel panel-default">
		<select class="form-control" id="pregunta-diez-a">
		  <option value="0" >Selecciona tu respuesta ...</option>
		  <option value="1" >Aumentar el impacto adverso de las amenazas naturales y la posibilidad de que ocurra un desastre.</option>
		  <option value="2" >Regular el impacto adyacente de las amenazas naturales y la posibilidad de que ocurra un desastre.</option>
		  <option value="3" >Reducir el impacto adverso de las amenazas naturales y la posibilidad de que ocurra un desastre. </option>			  
		</select> 
      </div>
	  <p class="text-justify">14.- Las funciones del Comité de Operaciones de Emergencia se basan en ser:</p>
      <div class="panel panel-default">
		<select class="form-control" id="pregunta-trece-a">
		  <option value="0" >Selecciona tu respuesta ...</option>
		  <option value="1" >Normativa y ejecutiva, según las características y magnitud de la emergencia.</option>
		  <option value="2" >Vinculante y técnica, según las características y magnitud de la emergencia.</option>
		  <option value="3" >Técnica y ejecutiva, según las características y magnitud de la emergencia.</option>
		</select> 
      </div>	  
	  <p class="text-justify">15.- El Observatorio Volcanológico de Los Andes del Sur (OVDAS) es:</p>
      <div class="panel panel-default">
		<select class="form-control" id="pregunta-catorce-a">
		  <option value="0" >Selecciona tu respuesta ...</option>
		  <option value="1" >Un sistema de operación de la emergencia ante una erupción.</option>
		  <option value="2" >Un sistema técnico de monitoreo volcánico.</option>
		  <option value="3" >Una institución de gestión de la emergencia a nivel internacional.</option>
		</select> 
      </div>
      <button type="button" class="btn btn-rosado" id="finalizar"> Ver mi resultado</button>
    </div>
    </article>
   </div>
   <div class="col-md-4 gris">
    <aside>      
      <div class="container-fluid">
      <img src="../img/aula/riesgos/1.png" class="img-responsive" alt="Riesgos naturales">
      <h2 class="text-center">Riesgos naturales en Chile</h2> <br>  	  
      <p class="text-center matriculado"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <strong>MATRICULADO</strong></p>
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
    
    $("#finalizar").on("click", function(){	
	  var p1 = document.getElementsByName('pregunta-1[]');
	  var p2a = document.getElementById("pregunta-dos-a").value;
	  var p3a = document.getElementById("pregunta-tres-a").value;
	  var p4 = document.getElementsByName('pregunta-4[]');
	  var p5 = $('input[name=pregunta-cinco]:checked').val();
	  var p6 = $('input[name=pregunta-seis]:checked').val();
	  var p7 = $('input[name=pregunta-siete]:checked').val();
	  var p8 = $('input[name=pregunta-ocho]:checked').val();
	  var p9 = document.getElementsByName('pregunta-9[]');
	  var p10a = document.getElementById("pregunta-diez-a").value;
	  var p11 = $('input[name=pregunta-once]:checked').val();
	  var p12 = document.getElementsByName('pregunta-12[]');
	  var p13a = document.getElementById("pregunta-trece-a").value;
	  var p14a = document.getElementById("pregunta-catorce-a").value;
	  var p15 = $('input[name=pregunta-quince]:checked').val();
	  
      var ok1 = 0;
      var ok4 = 0;
      var ok9 = 0;
	  var ok12 = 0;

      for (var i=0; i < p1.length; i++){
        if(p1[i].checked == true){
          ok1 = 1;
          break;
        }
      }
      for (var i=0; i < p4.length; i++){
        if(p4[i].checked == true){
          ok4 = 1;
          break;
        }
      }
      for (var i=0; i < p9.length; i++){
        if(p9[i].checked == true){
          ok9 = 1;
          break;
        }
      }
	  for (var i=0; i < p12.length; i++){
        if(p12[i].checked == true){
          ok12 = 1;
          break;
        }
      }
		var cont = 0;
		if(ok1 != 0 && p2a != 0 && p3a != 0 && ok4 != 0 && p5 != undefined && p6 != undefined && p7 != undefined && p8 != undefined && ok9 != 0 && p10a != 0 && p11 != undefined && ok12 != 0 && p13a != 0 && p14a != 0 && p15 != undefined){  
		  if(p1[0].checked == true && p1[1].checked == false && p1[2].checked == true && p1[3].checked == true && p1[4].checked == false){
			  cont++;
		  }
		  if(p2a  == 2){
			cont++;
		  }
		  if(p3a == 2){
			cont++;
		  }
		  if(p4[0].checked == true && p4[1].checked == true && p4[2].checked == false && p4[3].checked == true && p4[4].checked == false){
			cont++;
		  }
		  if(p5 == 4){
			cont++;
		  }
		  if(p6 == 3){
			cont++;
		  }
		  if(p7 == 2){
			cont++;
		  }
		  if(p8 == 4){
			cont++;
		  }
		  if(p9[0].checked == true && p9[1].checked == true && p9[2].checked == false && p9[3].checked == true && p9[4].checked == false){
			cont++;
		  }
		  if(p10a == 3){
			cont++;
		  }
		  if(p11 == 3){
			cont++;
		  }
		  if(p12[0].checked == true && p12[1].checked == true && p12[2].checked == false && p12[3].checked == true && p12[4].checked == false){
			cont++;
		  }
		  if(p13a == 3){
			cont++;
		  }
		  if(p14a == 2){
			cont++;
		  }
		  if(p15 == 1){
			cont++;
		  }
		  evaluacionfinal = ((cont*100)/15);
		  if (cont >= 12){
		    $("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Evaluación final curso de riesgos naturales');
		    $("#mensaje-bien").html('<h3>¡Felicidades!</h3><br><h4>Has obtenido '+cont+'/15.</h4><p class="text-justify">Lograste el porcentaje adecuado para certificarte. Nos contactaremos contigo al correo electrónico proporcionado para el envío de tu certificación.</p>');

			$("#aceptar-bien").html('Enviar evaluación');
			$("#aceptar-bien").on("click", function(){	  
			   $.post( "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_guardar_evaluacion_final", {evaluacionfinal: evaluacionfinal})
				.fail(function() {
					$("#mensaje-error").html('<p>Hemos tenido problemas, tu evaluación final no pudo ser guardada.</p>');						
					$("#modal-error").modal('show');
				})
				.done(function( data ) {												
					window.location.href = "<?php echo Config::get('URL'); ?>";
			   });
			});
			$("#modal-bien").modal('show');	
		  }else{
			if (cont < 12 ){
				 $("#titulo-error").html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Evaluación final curso de riesgos naturales');
				 $("#mensaje-error").html('<p class="text-justify">Para obtener la certificación necesitas de un mínimo de 80% de acertividad.</p> <p>¿Seguro que quieres enviar tu evaluación?</p>');
				 $("#aceptar-error").off();
				 $("#aceptar-error").removeClass('btn-danger').addClass('btn-default');
				 $("#aceptar-error").html('No, déjame revisar');
				 $("#aceptar-error").on("click", function(){
				    $("#enviar").remove();
					$("#modal-error").off();
					$("#aceptar-error").html('Aceptar');
					$("#aceptar-error").removeClass('btn-default').addClass('btn-danger');	
					$("#modal-error").modal('hide');
				 });
				 $("#botones-error").append('<button type="button" class="btn btn-danger" id="enviar">Enviar evaluación</button>');
				 $("#enviar").on("click", function(){
				   $("#aceptar-error").prop('disabled', true);
				   $("#enviar").prop('disabled', true);
				   $.post( "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_guardar_evaluacion_final", {evaluacionfinal: evaluacionfinal})
					.fail(function() {
						$("#mensaje-error").html('<p>Hemos tenido problemas, tu evaluación final no pudo ser guardada.</p>');						
						$("#modal-error").modal('show');
					})
					.done(function( data ) {
						$("#enviar").remove();
						$("#modal-error").off();
						$("#aceptar-error").html('Aceptar');
						$("#aceptar-error").removeClass('btn-default').addClass('btn-danger');	
						$("#modal-error").modal('hide');
							
						$("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Evaluación final curso de riesgos naturales');
						$("#mensaje-bien").html('<h4>Has obtenido '+cont+'/15.</h4><p class="text-justify">Lamentablemente no es el porcentaje adecuado para certificarte.</p>');

						$("#aceptar-bien").html('Ir a la pagina principal');
						$("#aceptar-bien").on("click", function(){													
						   window.location.href = "<?php echo Config::get('URL'); ?>";
						});
						$("#modal-bien").modal('show');	
				    });
				 }); 
				 $("#modal-error").on('hidden.bs.modal', function (e){
					$("#enviar").remove();
					$$("#modal-error").off();
					$("#aceptar-error").html('Aceptar');
					$("#aceptar-error").removeClass('btn-default').addClass('btn-danger');					
				 });
				 $("#modal-error").modal('show');
			}
		  }
		}else{
			$("#mensaje-error").html('<p>Para finalizar la evaluación debes responder todas las preguntas.</p>');						
			$("#modal-error").modal('show');
		}	
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
  </script>
  </body>
</html>