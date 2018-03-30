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
              <button type="button" class="btn btn-amarillo navbar-btn" id="ir-volver" title="Volver a volcanismo"><span class="glyphicon glyphicon-arrow-left"></span></button>
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
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_introduccion"><?php if ($this->p1 == true && $this->p2 == true && $this->p3 == true && $this->p4 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Introducción</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_1"><?php if ($this->p5 == true && $this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 1</a></li>
				<li><a class="azul linea-izq" href="#l2"><?php if ($this->p7 == true &&
											$this->p8 == true &&
											$this->p9 == true &&
											$this->p10 == true &&
											$this->p11 == true &&
											$this->p12 == true &&
											$this->p13 == true &&
											$this->p14 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 2</a>
				  <ul class="nav nav-stacked">
				   <li>
					<a href="#l21"><?php if ($this->p7 == true && $this->p8 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?>  2.1</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l211"><?php if ($this->p7 == true && $this->p8 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?>  2.1.1</a></li>
					</ul>
				   </li>
				   <li>
					<a href="#l22"><?php if ($this->p7 == true && $this->p8 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?>  2.2</a>
				   </li>
				  </ul>
				</li>
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
      <h2 id="l2" class="rojo" style="text-align:justify">LECCIÓN 2. La condición de riesgos y los sistemas de asentamientos en Chile: el análisis de vulnerabilidad </h2>
	  
	  <p class='text-justify'>
		La lección anterior del curso dio cuenta de  las condiciones geográficas que en Chile ocasionan eventos de origen natural, generando escenarios de amenaza para la población representados por ejemplo en la actividad volcánica, eventos sísmicos, eventos hidrometeorológicos, entre otros. Por consiguiente, la presente lección continúa con el segundo elemento que constituye la definición de riesgo, hablamos de la vulnerabilidad constituida por cómo la población sufre consecuencias producto de los eventos de origen físico naturales, y  a la vez como la relación de la sociedad  con el medio en que habita genera escenarios de riesgos, de este modo comprenderemos la  construcción social del riesgo manifestada en las reiteradas ocasiones que los patrones de comportamiento de la sociedad y sus actividades  inciden directamente en la ocurrencia de desastres socionaturales. 
	  </p>
	  <h3 id='l21' class='text-justify'>2.1 La población sus actividades y su estrecho vínculo con los desastres socionaturales</h3>
	  <p class='text-justify'>
		Como bien se ha expuesto, Chile es un país susceptible a constantes peligros o amenaza, sin embargo, más allá de las condiciones físico-naturales, la forma en que la población hace uso del espacio es la que ocasionalmente genera condiciones de riesgos, sobre todo cuando se olvida las dinámicas históricas de los territorios, ejemplo de ello son las expansiones urbanas en áreas no adecuadas como quebradas que se activan con las precipitaciones, el desarrollo inmobiliario en el borde costero y en zonas expuestas al peligro volcánico, la localización de viviendas en llanuras de inundación, o quebradas susceptibles de activase ante precipitaciones inusuales. Dinámicas que obedecen por un lado al crecimiento propio de las áreas urbanas, un patrón de comportamiento de la población y además de una escaza regulación restrictiva (Arenas, Lagos, & Hidalgo, 2010)
	  </p>
	  <p class='text-justify'>
		Es por ello que hoy en día los desastres se conciben como <b>desastres socionaturales</b>, bajo la premisa "los desastres no son naturales, sino que consecuencias de las acciones humanas", el enfoque incentiva a los distintos actores tanto gubernamentales como a la sociedad civil asumir la responsabilidad de contribuir en la reducción de riesgos, disminuyendo las acciones que generan condiciones de riesgos en los territorios. Promoviendo así la concientización sobre la responsabilidad humana en la generación de desastres, pues si bien los desastres resultan de un fenómeno natural, las consecuencias se incrementan producto de factores sociales específicos, tales como la localización de los asentamientos y actividades humanas en lugares inadecuados.
	  <p>
	  <h3 id='l211' class='text-justify'>2.1.1 El sistema de asentamientos y su exposición a los riesgos naturales </h3>
	  <p class='text-justify'>
		El crecimiento demográfico y la disposición de suelo para lugares de residencia, trae consigo la expansión o crecimiento urbano que implica la expansión de áreas de esparcimiento y lugares de desenvolvimiento, ya sea recreacionales, laborales, cotidianos, etc. El problema surge cuando el crecimiento urbano no es regulado, permitiendo el asentamiento de población en zonas de peligros y por consiguiente confiere el aumento de la vulnerabilidad y exposición de la población a sufrir daños.
	  </p>
	  <p class='text-justify'>
		En este sentido, se presentan a continuación algunos ejemplos que demuestran cómo la población sufre los estragos producto de eventos naturales. Enfatizando de este modo en la vulnerabilidad y exposición, elementos que comprenden el contexto social y material representado por las personas y por los recursos, producción, infraestructura, bienes y servicios, que se sitúan dentro del área de influencia directa de un fenómeno o evento físico (Lavell, 2007 en Ruíz, 2016).
	  </p>
	  <p class='text-justify'>
		<b>El tsunami de 1960 y los estragos en los poblados ubicados en el borde costero del sur.</b>
	  </p>
	  <p class='text-justify'>
		El año 1960 se vivió el mayor terremoto desde que se cuenta con registros de medición. De acuerdo a los daños producidos en Chile, se estimó un total de 5.000 muertos; 3.000 heridos; 2 millones de damnificados y 550 mil dólares de pérdidas. Por otra parte, el tsunami afecto distintas localidades costeras alrededor del océano Pacífico, repercutiendo en Hawai, Japón, Rusia, Nueva Zelanda, Australia entre otros. En estos países las olas variaron entre 13 y 7 metros, por ejemplo, Japón, que está a más de 17.000 kilómetros de distancia del área de generación del tsunami, reporto alrededor de 200 pérdidas de vidas humanas, cuantificando económicamente los daños en 50 millones de dólares; otro ejemplo fue el de Estados Unidos, ya que también la ola llego a su costa Pacífica, produciendo daños cuantificados sobre los 25 millones de dólares.
	  </p>
	  <p class='text-justify'>
		A continuación se evidencia las consecuencias en algunas de las ciudades más afectadas por el terremoto y tsunami:
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			<b>Corral, Región de los Ríos: repoblamiento en áreas de riesgos</b>
		  </p>
		  <p class='text-justify'>
			En el caso de Corral, localidad devastada por el terremoto  se vuelve a repoblar una zona desvastada por el tsunami provocado por el terremoto de 1960. (Gutiérrez, Peña-Cortés & Cisterna. 2013)
		  </p>
		  <p class='text-justify'>
			Áreas como el sector Corral bajo, camino a la Aguada y Amargos, como se evidencia en la siguiente imagen, respectivamente, fueron pobladas. Estando todas estas en zonas de riesgos de inundación por tsunami. 
		  </p>
		  <p class='text-justify'>
			Zonas de Corral bajo riesgo de tsunami, según el evento 1960. 
		  </p>
		  <a class='text-primary' id='img-1' href='#img-1'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_1.png' class='img-responsive center-block' alt='Imagen 1'></a>
		  <p class='text-justify'>
			<small>Fuente: Gutiérrez et al, 2013.</small>
		  </p>
		</div>
	  </div>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			<b>Puerto Saavedra</b>
		  </p>
		  <p class='text-justify'>
			En la costa de la Araucanía las localidades Toltén, Puerto Saavedra y Quele, se vieron absolutamente devastados por el paso del tsunami, inundando más de 2 kilómetros tierra adentro siguiendo el cauce de los ríos en zonas de baja pendiente. En Puerto Saavedra sólo una casa logró quedar inmune, la mayoría de su población logró evacuar gracias a la sirena de Bomberos, sin embargo 50 personas fallecieron en el lugar. La mayoría de ellas producto que bajaron de los cerros después de la primera ola, luego de la bajada de las aguas, regresaron a sus casas a retirar sus pertenencias en donde los atrapo la segunda Ola, de mayor tamaño que la anterior. 
		  </p>
		  
		  <a class='text-primary' id='img-2' href='#img-2'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_2.png' class='img-responsive center-block' alt='Imagen 2'></a>		  
		  <p><small>Fuente: Exploraquinta.ucv.cl </small></p>
		  <p class='text-justify'>
			En la actualidad, y a pesar de haber vivido los estragos de el mayor terremoto de la historia el poblado se asienta en la línea de costa, tal como se evidencia en la siguiente imagen, sin embargo es necesario resaltar que de a poco se hace el esfuerzo por reordenar la población un ejemplo de ello es la ubicación del Hospital en zonas fuera de peligro de inundación por tsunami.
		  </p>
		  <a class='text-primary' id='img-3' href='#img-3'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_3.png' class='img-responsive center-block' alt='Imagen 3'></a>		  
		  <p><small>Fuente: Google Earth, 2017 </small></p>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Población expuesta a peligro volcánico</b>
	  </p>
	  <p class='text-justify'>
		De acuerdo a Sernageomin, existen más de 2000 volcanes en Chile, de ellos 90 se reconocen como volcanes activos, reconociendo estos como aquellos que en el último periodo geológico correspondiente al holoceno han presentado algún tipo de actividad, de ellos destacan en el ranking de actividad el volcán Villarrica y el volcán Llaima, ubicados en la región de La Araucanía, el volcán Calbuco y volcán Chaitén ubicados en la región los Lagos. Uno de los eventos con mayores consecuencias evidenciados en el último tiempo fue el ocurrido el año 2011 en Chaitén.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			<b>La erupción del Chaitén</b>
		  </p>
		  <p class='text-justify'>
			Entre los días  10 y 13 de mayo, se inició la actividad volcánica generando una de las mayores erupciones a nivel global desde la década de los 90. Como consecuencia del impacto, más de 4000 familias debieron abandonar sus viviendas y fueron desplazadas a diferentes localidades y ciudades de la Isla de Chiloé y el continente. Al año 2015, cerca de un 40% de los habitantes han retornado a la ciudad la cual fue definida como un área no apta para la vida humana por su predisposición potencial a ser afectada por riesgos provenientes de la naturaleza.
		  </p>
		  <a class='text-primary' id='img-4' href='#img-4'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_4.png' class='img-responsive center-block' alt='Imagen 4'></a>		  
		  <p><small>Fuente: elhuemul.cl </small></p>
		  <p class='text-justify'>
			La ciudad de Chaitén en la actualidad ha vuelto a repoblarse a pesar de los esfuerzos iniciales de erradicación completa de la ciudad hacia el vecino poblado de Santa Barbara. 
		  </p>
		  <a class='text-primary' id='img-5' href='#img-5'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_5.png' class='img-responsive center-block' alt='Imagen 5'></a>		  
		  <p><small>Fuente: elhuemul.cl </small></p>
		</div>
	  </div>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			<b>Melipeuco, Región de La Araucanía </b>
		  </p>
		  <p class='text-justify'>
			El poblado de Melipeuco está ubicado al sureste del volcán Llaima a 14 km del cráter. Esta localidad, se encuentra en una zona de muy alto peligro, susceptible de ser afectada por lahares, durante erupciones originadas en el edificio principal y/o en los cráteres adventicios orientales, tales como las ocurridas entre los siglos XVII a XX (Moreno y Naranjo, 2003).
		  </p>
		  <p class='text-justify'>
			El Volcán Llaima es considerado uno de los volcanes más activos de latino AmérIca. Desde el año 1640 a la actualidad, presenta 50 erupciones documentadas. Los lahares del volcán Llaima se originan, en su mayoría, por la súbita descarga de agua subglacial generada por la rápida fusión de nieve y/o hielo durante las etapas álgidas de una erupción y también de la incorporación de los productos generados durante la erupción que los causa. (Amigo, Silva & Saavedra, 2014)
		  </p>
		  <p class='text-justify'>
			La siguiente imagen corresponde al mapa de peligro volcánico del volcán Llaima, en ella es posible presenciar la exposición de los poblados de Melipeuco y Cherquenco ante una eventual erupción de magnitud en el volcán.
		  </p>
		  <a class='text-primary' id='img-6' href='#img-6'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_6.png' class='img-responsive center-block' alt='Imagen 6'></a>		 
		  <p class='text-justify'>
			<small>Fuente: SERNAGEOMIN, 2015.</small>
		  </p>
		</div>
	  </div>	  
	  <p class='text-justify'>
		<b>Áreas urbanas expuestas a peligros hidrometeorológicos: urbanización en el piedemonte Región Metropolitana.</b>
	  </p>
	  <p class='text-justify'>
		La ciudad de Santiago concentra el 43% de la población total del país representado alrededor de seis millones de personas, esto sumado a las características geográficas de la Región Metropolitana localizada en la Precordillera, reúne las condiciones para que ciertas áreas de expansión urbana se desenvuelvan en áreas susceptibles de sufrir eventos de origen hidrometeorológicos.
	  </p>
 	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	   <a class='text-primary' id='img-7' href='#img-7'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_7.png' class='img-responsive center-block' alt='Imagen 7'></a>
		  <p>
	  <p class='text-justify'><small>Fuente: Google Earth, 2016.</small></p>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Urbanización en conos aluviales de quebradas, ciudad de Tocopilla.</b>
	  </p>
	  <p class='text-justify'>
		La siguiente infografía publicada en el Mercurio, evidencia como los flujos del aluvión de agosto del año 2015 hacen su llegada a la ciudad de Tocopilla ubicada a los pies de conos aluviales, ejemplos como estos dan cada vez mayor fuerza a la idea de que los desastres no son naturales sino que consecuencias de actividades humanas y de las relaciones que mantenemos con nuestro entorno. Es así que Tocopilla en un contexto histórico ha evidenciado eventos de remociones en masa y es probable que esto siga ocurriendo en una ciudad que se ha ido expandiendo en zonas de riesgos.
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-8' href='#img-8'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_8.png' class='img-responsive center-block' alt='Imagen 8'></a>
		  <p>
		<small>Fuente: El Mercurio, 2015.</small>
		  </p>
		</div>
	  </div>
	  
	  	<div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>¿Cuál o cuáles son los factores que mejor describen el enfoque de concebir los desastres como desastre socionatural?</p>
         <p>Marque la alternativa correcta</p>
		 <div class="panel panel-default">
        <div class="panel-body">
		  <p class="text-justify"><b>I.</b> Si bien los desastres resultan de un fenómeno natural, las consecuencias se incrementan producto de factores sociales específicos, tales como la localización de los asentamientos y actividades humanas en lugares inadecuados.</p>
		  <p class="text-justify"><b>II.</b> Apunta a construir un enfoque donde los distintos actores tanto gubernamentales como la sociedad civil, asuman la responsabilidad de  contribuir en la reducción de riesgos, disminuyendo las acciones que generan condiciones de riesgos de los territorios.</p>
		  <p class="text-justify"><b>III.</b> Promueve la conciencia sobre la responsabilidad humana en la generación de desastres.</p>
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-cinco" value="1" id="cinco-alt1" <?php if ($this->p5 == true) { echo 'disabled'; } ?> >
				Sólo I
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="2" id="cinco-alt2"<?php if ($this->p5 == true) { echo 'disabled'; } ?>>
				Sólo II
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="3" id="cinco-alt3" <?php if ($this->p5 == true) { echo 'disabled'; } ?>>
				I y III
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cinco" value="4" id="cinco-alt4" <?php if ($this->p5 == true) { echo 'disabled'; } ?> <?php if ($this->p5 == true) { echo 'checked'; } ?>>
				Todas las anteriores
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="5" class="btn btn-rosado" <?php if ($this->p5 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div> 
	  <h3 id='l22'>2.2 Las consecuencias económicas de los desastres</h3>
	  <p class='text-justify'>
		Hemos revisado las consecuencias humanas de los desastres y los daños devastadores que ocasionan, consecuencias que tambien se traducen a costos económicos, en este sentido de acuerdo a las estimaciones de la oficina para la reducción del riesgo de desastres (UNISDR) Chile fue el sexto país que más daños económicos sufrió producto de desastres naturales en el año 2015, en esta misma línea la OCDE define a Chile como uno de los países con mayor exposición a eventos de origen natural, y de acuerdo a una publicación del Banco Mundial del año 2015, un 54%  de la población y un 12% del territorio está expuesto a 3 o más tipos de amenazas de origen natural. Otras cifras señalan que entre 1980 y 2011 el país registro pérdidas cercanas al 1,2% de su PIB debido a desastres de origen natural.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '>
		  <p class='text-justify'>
			Más específicamente en la línea de financiamiento para situaciones de emergencias, durante 2014 se asignaron más de 79 mil millones de pesos, desglosados en los siguientes ítems.
		  </p>
		  <a class='text-primary' id='img-9' href='#img-9'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_9.png' class='img-responsive center-block' alt='Imagen 9'></a>		  
		  <p class='text-justify'>
			<small>Fuente: Ministerio del Interior, 2015.</small>
		  </p>
		  <p class='text-justify'>
			Estas cifras reúnen las operaciones para las emergencias de los días 1 y 2 de abril de 2014  en el norte grande, específicamente en la reconstrucción, normalización de la conectividad regional, la entrega de subsidios de reconstrucción y reparación, En su conjunto, el Plan de Reconstrucción de Tarapacá 2014-2018 considera un presupuesto de más de 181 mil millones de pesos.
		  </p>
		</div>
	  </div>	  
	  <p class='text-justify'>
		
		Para el caso particular del año 2015 solo el primer semestre se superó el monto destinado en gasto invertido el año 2014. La siguiente infografía publicada en La Tercera da cuenta de la inversión por cada evento ocurrido en aquellas regiones que vivieron desastres.
	  </p>
	  	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-10' href='#img-10'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/2_10.png' class='img-responsive center-block' alt='Imagen 10'></a>
		  <p>
		<small>Fuente: La Tercera.</small>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		En síntesis, los datos y cifras mencionadas dan cuenta de manera concreta el porcentaje de gasto que provocan los desastres en el país, consecuencia de ello es el retraso considerable del crecimiento económico de las localidades afectadas, efectos negativos que pueden reducirse a través de la Gestión del Riesgo de Desastres  definiendo requerimientos e intervenciones a largo plazo para aumentar la capacidad de afrontamiento de los más vulnerables.
	  </p>
	  <p class='text-justify'>
		Es en esta línea que la gestión para la reducción de riesgos de desastres cobra real importancia dada las particularidades del territorio nacional expuesto a una gran cantidad de amenazas de origen natural y antrópico manifestadas desde tiempos históricos con daños de diversas consecuencias para la población. 
	  </p>
	  <div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>¿Cuál ha sido el tipo de desastre natural que más costo económico ha tenido para el país en los últimos dos años?</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-seis" value="1" id="seis-alt1" <?php if ($this->p6 == true) { echo 'disabled'; } ?>>
				Erupciones volcánicas
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-seis" value="2" id="seis-alt2" <?php if ($this->p6 == true) { echo 'disabled'; } ?>>
				Terremotos
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-seis" value="3" id="seis-alt3" <?php if ($this->p6 == true) { echo 'disabled'; } ?> <?php if ($this->p6 == true) { echo 'checked'; } ?>>
				Aluviones
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="6" class="btn btn-rosado" <?php if ($this->p6 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>   
	  	<div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>¿Cuál es la causa que genera mayor condición de riesgo de desastres naturales en nuestro país?</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-tres" value="1" id="siete-alt1" <?php if ($this->p7 == true) { echo 'disabled'; } ?>>
				Las características geográfico-físicas del país.
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="2" id="siete-alt2" <?php if ($this->p7 == true) { echo 'disabled'; } ?>>
				Los procesos de urbanización.
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="3" id="siete-alt3" <?php if ($this->p7 == true) { echo 'disabled'; } ?> <?php if ($this->p7 == true) { echo 'checked'; } ?>>
				La forma en que la población hace uso del espacio sin considerar la dinámica histórica de los territorios.
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="7" class="btn btn-rosado" <?php if ($this->p7 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>  
	  <p class="text-right"><button class="btn btn-rosado" onclick="window.location='<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_3'" role="button"><span class="glyphicon glyphicon-star"></span> Avanzar a la Lección 3</button></p>
     </div>
    </article>
   </div>
   <div class="col-md-3 gris">
    <aside id="aside-afix">
     <div class="container-fluid">
      <img src="../img/aula/riesgos/1.png" class="img-responsive" alt="Riesgos naturales en Chile">
      <h2 class="text-center">Riesgos naturales en Chile</h2> <br>     
      <?php if (LoginModel::isUserLoggedIn() && $this->esta_matriculado == true) { ?>
        <p class="text-center matriculado" ><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <strong>MATRICULADO</strong></p>
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
	  $("#ir-volver").on("click", function(){
         window.location.href = "../aula/volcanismo_en_chile";
      });
      $('body').scrollspy({
          target: '#nav-scrollspy',
      });
      $(window).scroll(function(){
        var a = $(window).scrollTop()
        var b = $("#contenido-general").height() - $("#aside-afix").height() + 100
        if (a < 350){
          $("#aside-afix").css({top: 0,position:'relative',height:'auto',overflow:'none'});
          $("#panel-afix").css({top: 0,position:'relative'});
        }
        else if (a > 350 && a < b){
          $("#aside-afix").css({top: $(window).scrollTop() - 380, position:'absolute',position:'absolute',height:'600px',overflow:'auto'});
          $("#panel-afix").css({top: $(window).scrollTop() - 380, position:'absolute'});
        }
      });
      
	  /* Guardar Respuestas */
	  $(document).ready(function () {      
			$("button#btn-respuesta-select").click(function (event) { 	
			aObject = event.currentTarget;
			switch($(aObject).data("number")) {	
				case 5:
					select1 = document.getElementById("cinco-alt1").checked;
					select2 = document.getElementById("cinco-alt2").checked;
					select3 = document.getElementById("cinco-alt3").checked;
					select4 = document.getElementById("cinco-alt4").checked;
					
					if(select1 == false && select2 == false && select3 == false && select4 == false){
							$("#mensaje-error").html('<p>Debes seleccionar una respuesta válida para la pregunta.</p>');
							$("#modal-error").modal('show');
							text = false;					
					}else{				
						if(select4 == true){
							text = true;					
						}else{
							$("#mensaje-error").html('<p>Tu respuesta esta incorrecta. Intenta de nuevo, revisa los textos y videos de la lección.</p>');
							$("#modal-error").modal('show');
							text = false;
						}									
					}					
					pregunta = 5;
					break;				
				case 6:
					select1 = document.getElementById("seis-alt1").checked;
					select2 = document.getElementById("seis-alt2").checked;
					select3 = document.getElementById("seis-alt3").checked;
					if(select1 == false && select2 == false && select3 == false){
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
					pregunta = 6;
					break;
				case 7:
					select1 = document.getElementById("siete-alt1").checked;
					select2 = document.getElementById("siete-alt2").checked;
					select3 = document.getElementById("siete-alt3").checked;
					if(select1 == false && select2 == false && select3 == false){
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
					pregunta = 7;
					break;
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

			$("button#btn-compartir").on("click", function(event){
				aObject = event.currentTarget;
				switch($(aObject).data("number")) {
					case 9:
						var aviso = document.getElementById("aviso9");
						text = document.getElementById("respuesta9").value;
						pregunta = 9;
						break;
					case 10:
						var aviso = document.getElementById("aviso10");
						text = document.getElementById("respuesta10").value;
						pregunta = 10;
						break;
					case 11:
						var aviso = document.getElementById("aviso11");
						text = document.getElementById("respuesta11").value;
						pregunta = 11;
						break;
					case 12:
						var aviso = document.getElementById("aviso12");
						text = document.getElementById("respuesta12").value;
						pregunta = 12;
						break;					
				}				
				if (text.length >= 15 && text.length <= 140){		
				  aviso.innerHTML = '';
				  $("#titulo").html('<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Punto de Encuentro');
				  $("#mensaje").html('Tu comentario se publicará en tu muro.');		  
				  $("#aceptar-mnsje").off();		  
				  $("#aceptar-mnsje").removeClass('btn-primary').addClass('btn-default');
				  $("#aceptar-mnsje").html('Espera, déjame corregir');
				  $("#aceptar-mnsje").on("click", function(){
					$("#modal-mensaje").modal('hide');
					$("#publicar-respuesta").remove();
					$("#aceptar-mnsje").html('Aceptar');
					$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');		  
				  });
				  $("#botones-mensaje").append('<button type="button" class="btn btn-primary" id="publicar-respuesta">Compartir respuesta</button>');
				  $("#publicar-respuesta").on("click", function(){
					$("#aceptar-mnsje").prop('disabled', true);
					$("#publicar-respuesta").prop('disabled', true);	
					$.post( "<?php echo Config::get('URL'); ?>aula/volcanismo_pregunta", { npreg: pregunta, resp: text })
					.fail(function() {
						$("#modal-mensaje").modal('hide');
						$("#aceptar-mnsje").prop('disabled', false);
						$("#publicar-respuesta").prop('disabled', false);						
						$("#publicar-respuesta").remove();
						$("#aceptar-mnsje").html('Aceptar');
						$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');
						
						$("#mensaje-error").html('<p>Tu comentario no se pudo compartir en el Punto de Encuentro.<br>Por favor intenta más tarde.</p>');
						$("#modal-error").modal('show');	
					})
					.done(function( data ){					
						$.post( "https://kimgen.ml/aula/create", {url: "", post_text: text, post_clase: 2, post_taxonomy: 2, con_archivo: 0 })
						.fail(function() {
							$("#modal-mensaje").modal('hide');
							$("#aceptar-mnsje").prop('disabled', false);
							$("#publicar-respuesta").prop('disabled', false);						
							$("#publicar-respuesta").remove();
							$("#aceptar-mnsje").html('Aceptar');
							$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');
							
							$("#mensaje-error").html('<p>Tu comentario no se pudo compartir en el Punto de Encuentro.<br>Por favor intenta más tarde.</p>');
							$("#modal-error").modal('show');		
						})
						.done(function( data ){
							$("#modal-mensaje").modal('hide');
							$("#aceptar-mnsje").prop('disabled', false);
							$("#publicar-respuesta").prop('disabled', false);						
							$("#publicar-respuesta").remove();
							$("#aceptar-mnsje").html('Aceptar');
							$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');

							$("#mensaje-bien").html('<p>Tu comentario se compartio correctamente en el Punto de Encuentro.</p>');
							$("#modal-bien").modal('show');					
							$("#aceptar-bien").on("click", function(){
								location.reload();
							});				
						}); 					
					});
				  });
				  $("#modal-mensaje").modal('show');
				}else{
					if (text.length < 15){				
						aviso.innerHTML = '<div class="alert alert-danger  fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Tu respuesta es muy breve, debes incluir por lo menos '+(15-text.length)+' caracteres más.</div>';
					}
					if (text.length > 140){				
						aviso.innerHTML = '<div class="alert alert-danger  fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Tu respuesta es muy extensa, te excediste en '+(text.length-140)+' caracteres.</div>';
					}
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
      })
      
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
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Zonas de Corral bajo riesgo de tsunami, según el evento 1960');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_1.png" class="img-responsive center-block" alt="1"><p><small>Fuente: Gutiérrez et al, 2013.</small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-2").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Tsunami Puerto Saavedra');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_2.png" class="img-responsive center-block" alt="2"><p><small>Fuente:  </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-3").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Vista satelital huella de arena');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_3.png" class="img-responsive center-block" alt="3"><p><small>Fuente:  </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-4").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp; Ciudad de Chaitén tras la erupción del volcán Chaitén');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_4.png" class="img-responsive center-block" alt="4"><p><small>Fuente:  </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-5").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp; Ciudad de Chaitén en la actualidad');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_5.png" class="img-responsive center-block" alt="5"><p><small>Fuente:  </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-6").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Melipeuco, Región de La Araucanía ');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_6.png" class="img-responsive center-block" alt="6"><p><small>Fuente: SERNAGEOMIN, 2015. </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-7").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp; Urbanización en el piedemonte de la región Metropolitana');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_7.png" class="img-responsive center-block" alt="7"><p><small>Fuente: Google Earth, 2016. </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-8").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Urbanización en conos aluviales de quebradas en la ciudad de Tocopilla');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_8.png" class="img-responsive center-block" alt="8"><p><small>Fuente: El Mercurio, 2015. </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-9").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Financiamiento para situaciones de emergencias');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_9.png" class="img-responsive center-block" alt="9"><p><small>Fuente: Ministerio del Interior, 2015. </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-10").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Inversión por cada evento ocurrido por región');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/2_10.png" class="img-responsive center-block" alt="10"><p><small>Fuente: La Tercera. </small></p>');
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