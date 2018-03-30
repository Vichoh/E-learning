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
				<li><a class="azul linea-izq" href="#l1"><?php if ($this->p5 == true && $this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 1</a>
				  <ul class="nav nav-stacked">
				   <li>
					<a href="#l11"><?php if ($this->p5 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.1</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l111"><?php if ($this->p5 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.1.1</a></li>
					</ul>
				   </li>
				   <li>
					<a href="#l12"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.2</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l121"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.2.1</a></li>
					 <li><a href="#l122"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.2.2</a></li>
					 <li><a href="#l123"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.2.3</a></li>
					</ul>
				   </li>
				   <li>
					<a href="#l13"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.3</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l131"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.3.1</a></li>
					 <li><a href="#l132"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.3.2</a></li>
					 </ul>
				   </li>
				   <li>
					<a href="#l14"><?php if ($this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span> '; } ?> 1.4</a>
				   </li>
				  </ul>
				</li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_2"><?php if ($this->p7 == true &&
											   $this->p8 == true &&
											   $this->p9 == true &&
											   $this->p10 == true &&
											   $this->p11 == true &&
											   $this->p12 == true &&
											   $this->p13 == true &&
											   $this->p14 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?>Lección 2</a></li>
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
      <h2 id="l1" class="rojo" style="text-align:justify">LECCIÓN 1. El origen de los riesgos socionaturales en Chile: análisis de amenazas</h2>  
	 
	  <h3 id='l11' class='text-justify' >1.1	Chile  país de riesgos naturales: las particularidades  geográficas y los tipos de  riesgos</h3>	  
	  <h4 id='l111'>1.1.1 Riesgo de origen geológico las tectónicas de placas </h4>
	  <p class='text-justify'>
		La tectónica de placas es una teoría geológica que explica cómo la litosfera, o sea, la porción externa de la corteza terrestre caracterizada por ser fría y rígida (Rosales, 2016), correspondiente al suelo que pisamos en nuestro país. La litosfera terrestre está compuesta por 20 segmentos de placas tectónicas con tamaños y formas irregulares (Tarbuck & Lutgens, 2013). A lo largo de estos límites de placas, sus bordes pueden ser convergentes o de subducción; separación o transformante o, finalmente, divergentes. En nuestro país, se encuentra el borde de subducción entre la placa de Nazca (placa oceánica) y Sudamericana (placa continental), y en el sur, la placa Antártica (placa oceánica) interactúa con la placa Sudamericana.
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-1' href='#img-1'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_1.png' class='img-responsive center-block' alt='Imagen 1'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
	  <h3 id='l12' class='text-justify'>1.2	Transferencia de energía interna de la Tierra y su impacto sobre Chile</h3>
	  <p class='text-justify'>
		La interacción entre el manto con las capas adyacentes (núcleo-caliente; corteza-fría) genera que los materiales que componen la capa intermedia se muevan generando las “Corrientes de convección”. En la parte baja, cercana al Núcleo, los materiales del Manto se calientan, dilatan y aumenta su tamaño, empujando los materiales que se encuentran encima de ellos hasta alcanzar la capa superior.
	  </p>
	  <p class='text-justify'>
		Mientras tanto, en la parte alta que se encuentra en contacto con la corteza, los materiales se enfrían, disminuyen su volumen y se contraen. Este efecto genera que aumente su densidad y se hundan en el Manto hasta alcanzar nuevamente el Núcleo, donde se vuelven a calentar.
	  </p>
	   <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-2' href='#img-2'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_2.png' class='img-responsive center-block' alt='Imagen 2'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		Este proceso, hace que algunos autores como Cisternas & Vera (2008) señalen que la Tierra es un “planeta vivo”, debido al calor generado en su interior. En este movimiento, la Tectónica de Placas es solo la muestra superficial de todo la corriente interna, el cual determina la estructura y los procesos dinámicos que ocurren en la superficie, sobretodo en Chile, lugar que se ha mantenido muy interiorizado sobre los efectos superficiales de estos procesos debido al borde convergente o de subducción. 
	  </p>
	  <p class='text-justify'>
		En esta área, las placas se “destruyen” y/o “reciclan” producto de la coalición en la parte frontal de una de ellas o hundimiento de una placa bajo la otra, llegando eventualmente a incorporarse en la astenósfera o dicho de forma simplificada, “consumida” en el manto. Esta zona se caracteriza por la presencia de profundas fosas oceánicas, islas volcánicas y cadenas montañosas como es el caso de nuestro país. A raíz de estos procesos, se identifica la mayor presencia de riesgos naturales de origen geológico, tales como terremoto, tsunamis y erupciones volcánicas.
	  </p>  	
		<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-3' href='#img-3'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_3.png' class='img-responsive center-block' alt='Imagen 3'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
	  <h4 id='l121'>1.2.1 Origen de los terremotos en Chile</h4>
	  <p class='text-justify'>
		Los terremotos que ocurren en Chile son generados por la interacción del borde convergente o de subducción entre la Placa Oceánica de Nazca con la Placa Continental Sudamericana (revisar la lección 1 del curso Terremoto). Esta interacción genera una acumulación de energía según el avance de la Placa de Nazca que en promedio, puede alcanzar los 6.8 cm/año (Centro Sismologíco Nacional, 2014). Dependiendo la zona de liberación de energía, Ruiz & Madariaga (2015), clasifica los terremotos en cuatro tipos a partir de su localización:
	  </p>
	  	<table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Tipo de terremoto</th>
			<th>Característica</th>
			<th>Magnitud terremoto</th>
			<th>Ejemplo </th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>(A) Interplaca de mecanismo inverso o tipo thrust</td>
			<td>Mayor frecuencia pueden generar tsunami</td>
			<td>Superior a los 7.5 Richter </td>
			<td>Valdivia, 1575; Santiago, 1647; Valparaíso, 1730; Copiapó, 1822; </td>
		</tr>
		<tr>
			<td>(B) Intraplaca de profundidad intermedia</td>
			<td>Más destructivos en Chile</td>
			<td>Cercanas a los 8.0 Richter</td>
			<td>Chillan, 1939; Calama, 1950; Tarapacá, 2005</td>
		</tr>
		<tr>
			<td>(C) Intraplaca superficial de la placa Sudamericana o corticales</td>
			<td>Ocurren en fallas activas</td>
			<td>Inferior a los 7.0 Richter</td>
			<td>Falla de San Ramón </td>
		</tr>
		<tr>
			<td>(D) Intraplaca superficiales en la placa de Nazca o superficiales detrás de la fosa</td>
			<td>Habitualmente no causan daños en áreas pobladas</td>
			<td>Cercanas a los 6.0 Richter</td>
			<td>No aplica a una referencia continental </td>
		</tr>
	  </tbody>
	</table>
	  <p class='text-justify'>
		En relación a lo mencionado, si se traza un corte longitudinal a Chile hacia la profundidad es posible localizar donde es liberada la energía de los terremotos que ocurren en nuestro país, de tal forma, cercano a la costa se generan los terremotos interplaca. Además, estos terremotos se caracterizan por tener una gran magnitud y una serie de desastres vinculados a ellos.
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-4' href='#img-4'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_4.png' class='img-responsive center-block' alt='Imagen 4'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen, propagación y medición de terremotos en nuestro país, te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/terremoto_en_chile"><b>Terremotos en Chile</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>
	  <h4 id='l122'>1.2.2 Origen de los tsunamis en Chile</h4>
	  <p class='text-justify'>
		Los tsunamis que ocurren en Chile son generados como consecuencia de una fuente tsunamigénicos, la cual da origen a este riesgo natural. A partir de esto, se identifican principalmente tres tipos de acciones tsunamigénicos y que permite identificar algunas características asociadas al tiempo de alerta y reacción ante una emergencia de este tipo, tales como:
	  </p>
	  <table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Tipo de fuente tsunamigenica</th>
			<th>Característica</th>
			<th>Porcentaje de origen tsunami</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>Dislocaciones tectónicas</td>
			<td>El terremoto provoca súbitos levantamientos o hundimientos en la corteza marina de la Tierra, y por consiguiente general el desplazamiento de la columna de agua.</td>
			<td>Es el responsable del 96% de los tsunamis observados.</td>
		</tr>
		<tr>
			<td>Erupciones volcánicas </td>
			<td>Las erupciones volcánicas submarinas liberan energía y material por diferentes conductos lo que genera un cambio en la columna de agua por la fuerza de la erupción en el fondo oceánico.</td>
			<td>Es el responsable del 3% de los tsunamis</td>
		</tr>
		<tr>
			<td>Deslizamiento en el talud continental </td>
			<td>Esta fuente genera tsunamis con menor energía que los de origen tectónico, además que sus efectos predominantemente son locales.</td>
			<td>Es el responsable del 0.8% de los tsunamis</td>
		</tr>
		<tr>
			<td>Impacto de meteoritos; desprendimientos de glaciares y flujos hacia el mar de corrientes de turbidez o lava volcánica </td>
			<td>Fenómenos de origen natural que poseen una esporádica participación en la generación de tsunamis, sin embargo, pueden inundar a nivel local un territorio importante.</td>
			<td></td>
		</tr>
		<tr>
			<td>Explosiones nucleares detonadas en la superficie o en el fondo del mar</td>
			<td>Fenómenos de artificial y/o antrópico que poseen una esporádica participación en la generación de tsunamis, sin embargo, pueden inundar a nivel local un territorio importante.</td>
			<td></td>
		</tr>
	  </tbody>
	</table>
	  <p class='text-justify'>
		En relación a lo anterior, cuando en Chile ocurre un terremoto con hipocentros menores a 60 kilómetros, con magnitudes inferiores a 6,4 en la escala de Richter es poco probable que generen tsunami. Mientras tanto, cuando los terremotos registran una magnitud sobre los 7,75 grados Richter, el umbral de generación de tsunami aumenta, tal como se muestra en la siguiente imagen.
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-5' href='#img-5'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_5.png' class='img-responsive center-block' alt='Imagen 5'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
  
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen, propagación y medición de tsunamis en nuestro país, te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/tsunami_en_chile"><b>Tsunamis en Chile</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>
	  <h4 id='l123'>1.2.3 Origen de los Volcanes en Chile</h4>
	  <p class='text-justify'>
		Los volcanes que se encuentran en Chile son generados principalmente por dos razones; la primera, es por causa de la subducción de la Placa de Nazca bajo la Sudamericana donde se forman los arcos volcánicos. Mientras que la segunda, es el resultado de los hotspot o puntos calientes, cuyo resultado son los volcanes intraplaca o islas volcánicas.
	  </p>
	  <p class='text-justify'>
		Las erupciones volcánicas, pueden ser clasificadas según el Índice de Explosividad Volcánica, el cual se basa en dos factores principales correspondiente a la altura de la columna eruptiva y la cantidad de material emitido, clasificando desde el 0 al 8 en la escala de una escala exponencial en Hawaianas, Estromboliana, Subplinianas, Plinianas, Ultraplinianas. 
	  </p>
	  	<table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Tipo de erupción volcánica</th>
			<th>Características</th>
			<th>Erupción de este tipo en Chile</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>Hawaiana</td>
			<td>Son erupciones tranquilas, de magmas pobres en sílice, no explosivas. El magma muy fluido alcanza el cráter principal y fluye formando “ríos de lava”. Por lo general, la columna eruptiva es inferior a los 100 m.</td>
			<td>Volcán Tupungatito, región Metropolitana (1959 – 1960)</td>
		</tr>
		<tr>
			<td>Estromboliana</td>
			<td>Estas erupciones pueden o no presentar coladas de lava, pero si eyección de piroclastos tipo escoria. Producen columnas eruptivas, desde 0,1 a 5 km de altura.</td>
			<td>Volcán Lonquimay, región de La Araucanía  (1998)</td>
		</tr>
		<tr>
			<td>Subplinianas</td>
			<td>Estas erupciones presentan eyección de escorias o pómez con una columna eruptiva de 5 a 20 km.</td>
			<td>Volcán Chaitén, región de Los Lagos (2008)</td>
		</tr>
		<tr>
			<td>Plinianas</td>
			<td>Estas erupciones son altamente explosivas, el principal material eyectado es pómez, característico de magmas muy ricos en sílice. En este tipo de erupción, la columna puede alcanzar hasta unos 40 km de Altura</td>
			<td>volcán Quizapu, región del Maule (1932)</td>
		</tr>
		<tr>
			<td>Ultraplinianas</td>
			<td>Estas erupciones generan columnas superiores a los 40 km y no se han presentado en tiempo histórico</td>
			<td>El registro histórico de SERNAGEOMIN reconoce que el volcán Maipo, región Metropolitana hace 450.000 años alcanzó piroclastos de hasta 500 km3</td>
		</tr>
	  </tbody>
	</table>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen volcanico te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/volcanismo_en_chile"><b>Volcanismo en Chile</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>
	  <h3 id='l13'>1.3 Eventos de origen hidrometereologicos</h3>
	  <h4 id='l131'>1.3.1 Origen de las inundaciones en Chile</h4>
	  <p class='text-justify'>
		Las inundaciones que ocurren en Chile son generados por cinco tipos de causas o factores detonantes según indica Rojas, Mardones, Arumí y Aguayo (2014). Estos corresponden a las precipitaciones, los procesos volcánicos, los procesos nivoglaciares, los deslizamientos y las actividades antrópicas.
	  </p>
	  
	  	<table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Factores detonantes</th>
			<th>Causa o proceso</th>
			<th>Características</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>Precipitaciones persistentes </td>
			<td>Por consecuencia de precipitación convectiva y orografía, además de las precipitaciones frontales</td>
			<td>Es el proceso que causa la mayor recurrencia de inundaciones.</td>
		</tr>
		<tr>
			<td>Procesos volcánicos</td>
			<td>Por consecuencia de las erupciones volcánicas, se generan lahares o flujos de lava, además, de la fusión de nieve/hielo </td>
			<td>Los ríos experimentan crecidas en alguna sección de su recorrido por causa de la obstrucción de cause a partir de lahares o flujos de lava.</td>
		</tr>
		<tr>
			<td>Procesos nivoglaciares</td>
			<td>Son la consecuencia de las crecidas nivales que son estacionales y por los GLOFs/IDLOFs que son esporádicos </td>
			<td></td>
		</tr>
		<tr>
			<td>Deslizamientos </td>
			<td>Por consecuencia de procesos cosísmicos y otros deslizamientos </td>
			<td>Los ríos experimentan crecidas en alguna sección de su recorrido por causa de la obstrucción a raíz de los deslizamientos</td>
		</tr>
		<tr>
			<td>Actividades antropicas</td>
			<td>Por consecuencia de la rotura de estructuras hidráulicas y/o el mal manejo de obras hidráulicas </td>
			<td></td>
		</tr>
	  </tbody>
	</table>

	  
	  
	  
	  <p class='text-justify'>
		Mediante la investigación desarrollada por Rojas et al (2014), se identificaron cinco áreas homogéneas donde las inundaciones poseen características en común dentro del territorio nacional. Las regiones integradas entre Arica y Parinacota hasta Coquimbo, poseen escasa influencia de eventos por precipitaciones frontales. Mientras tanto, las regiones de Valparaíso, Metropolitana, O´Higgins y Biobío su principal causa son las precipitaciones vinculadas al frente polar. De igual forma, la región del Maule destaca por la ocurrencia de inundaciones asociadas a factores antrópicos. En las regiones de La Araucanía, Los Ríos y Los Lagos, aumentan las inundaciones producto de volcanismo y los deslizamientos cosísmicos. Finalizando en las regiones de Aysén y Magallanes las inundaciones por causa de los GLOFs/IDLOFs.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen, propagación y medición de inundaciones en nuestro país, te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/inundaciones_en_chile"><b>Inundaciones en Chile</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>
	  <h4 id='l132'>1.3.2 Origen de los aluviones en Chile</h4>
	  <p class='text-justify'>
		Los aluviones que ocurren en Chile son generados por la interacción de un proceso que ocurren cuando el agua se acumula rápidamente en el suelo a raíz de una lluvia intensa o por deshielos abruptos, convirtiendo el terreno en un caudaloso río de lodo o barro. Estas corrientes fluyen rápidamente por una ladera o quebrada, de fuertes pendientes, destruyendo todo a su paso con poca o nula advertencia. Otras acepciones que recibe este proceso físico es solifluxión cuando el deslizamiento ocurre en terrenos arcillosos y las pendientes son moderadas, gelifluxión cuando el escenario donde ocurre el proceso es en áreas glaciares.
	  </p>
	  <p class='text-justify'>
		Los aluviones o flujos de detritos como procesos de carácter azonal pueden extenderse varios kilómetros desde su punto de origen, originándose en las cabeceras de las cuencas avanzando hasta la desembocadura, aumentando considerablemente de tamaño a medida que arrastran árboles, rocas, y otros materiales que encuentra en su recorrido colmatando o sobrepasando la capacidad de evacuación del canal de escurrimiento.
	  </p>
	  <p class='text-justify'>
		El desarrollo de procesos aluvionales se producen básicamente por la saturación de suelos poco permeables en períodos de precipitaciones intensas, también en escenarios donde se sumen condiciones como inclinadas pendientes, zonas de quebradas y cursos de aguas con régimen esporádico. De esta forma, se puede sintetizar los factores y/o agentes desencadentes a la intensidad de las precipitaciones; naturaleza del terreno y sus materiales; finalizando por las pendientes topográficas y la morfología de las laderas.
	  </p>
	  	<table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Factores y/o agentes desencadenantes </th>
			<th>Descripción</th>
			<th>Elementos a considerar</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>Intensidad de las precipitaciones</td>
			<td>Precipitaciones de baja intensidad en largos periodos de tiempo y precipitaciones gran intensidad en cortos períodos de tiempo pueden desencadenar proceso aluvionales</td>
			<td>Intensidad<br>Duración<br>Distribución</td>
		</tr>
		<tr>
			<td>Naturaleza del terreno y sus materiales</td>
			<td>La estabilidad de los suelos depende de su composición mineralógica y la textura, por tanto, el grano fino como el limo o arcilla son más sensibles ante los procesos aluvionales</td>
			<td>Composición mineralógica<br>Textura</td>
		</tr>
		<tr>
			<td>Pendientes topográficas y la morfología de las laderas</td>
			<td>En terrenos homogéneos, cada tipo de material tendrá una altura crítica y un ángulo máximo, a partir de los cuales se producirá un desequilibrio gravitacional, siendo posible la rotura</td>
			<td>Altura<br>Angulo máximo</td>
		</tr>
	  </tbody>
	</table>

	  <div class="panel panel-rosado">
		  <div class="panel-heading">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ACTIVIDAD
		  </div>
		  <div class="panel-body ">
			  <p class="text-justify">
				Los flujos de barros o aluviones son el tipo de remoción que más daño ocasionan en cuanto a pérdidas materiales producto de su dimensión y alcance, estos en el país se han ocasionado en diversas oportunidades siendo los casos emblemáticos el aluvión de 1991 en la ciudad de Antofagasta, el año 1993 en la Quebrada de Macul en la Región Metropolitana, y el reciente episodio de flujos en la zona norte ocurrido el 25 de marzo del  año 2015 donde el proceso se activa en 5 cuencas de las regiones de Atacama, Coquimbo y Antofagasta.
			  </p>
			  <p class="text-justify">
				<strong>Flujos de barro ocurridos en la Quebrada de Macul 1993</strong>
			  </p>
			  <p class="text-justify">
				En esa ocasión, los flujos de detritos en Quebrada San Ramón y en Quebrada de Macul, causaron 26 víctimas fatales, 9 desaparecidos, 5.000 damnificados y 1.169 viviendas afectadas, así como cuantiosos daños a la propiedad pública y privada (Naranjo y Varela, 1996).
			  </p>
			  <a class='text-primary' id='img-6' href='#img-6'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/1_6.png' class='img-responsive center-block' alt='Imagen 6'></a>
		</div>
	  </div>
	  <div class="panel panel-rosado">
        <div class="panel-heading">
			<span class="glyphicon glyphicon-facetime-video"></span> VIDEO
		</div>
        <div class="panel-body ">
          <p class="text-justify">
			En el siguiente video, podrás revisar un registro noticioso que da cuenta de las consecuencias ocasionadas por el aluvión en la Quebrada de Macul 1993.
		  </p>
          <div class="embed-responsive embed-responsive-16by9">
			<iframe src="https://www.youtube.com/embed/ZmJMh-SIkJs?rel=0" allowfullscreen="" width="560" height="315"></iframe>
          </div>
        </div>
      </div>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen, propagación y medición de aluviones en nuestro país, te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/aluviones_en_chile"><b>Aluviones en Chile</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>	  
	  <h3 id='l14'>1.4 Origen de las remociones en masa en Chile</h3>
	  <p class='text-justify'>
		Las remociones en masa ocurren principalmente por factores y agentes desencadenantes, considerando como tal las precipitaciones. En los terrenos inestables pueden movilizarse de manera lenta rápida y extremadamente rápida; esto dependerá de la topografía, el tamaño del suelo o roca afectado, el tipo de material de los suelos, los agentes desencadenantes. 
	  </p>
	  <p class='text-justify'>
		En 1978, Varnes D. clasifico los movimientos en función del tipo de movimiento, velocidad del movimiento, contenido de agua, la profundidad de la superficie de ruptura y el material involucrado. En este contexto reconoce los siguientes tipo de remociones; caídas de roca, deslizamientos, flujos, toppling (volcamientos) y extensiones laterales.
	  </p>
	  	<table class='table riesgos text-justify'>
	  <thead>
		<tr>
			<th>Tipo de remoción</th>
			<th>Característica </th>
			<th>Tamaño material</th>
			<th>Movimiento </th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
			<td>Caídas</td>
			<td>Movimiento que ocurre cuando material rocoso se desprende de una ladera inclinada y se traslada mediante caída libre, rodando y rebotando pudiendo alcanzar una alta velocidad dependiendo del tamaño del material arrojado</td>
			<td>El material puede ser de cualquier tamaño</td>
			<td>Rápido en laderas de 25° - 45° de pendiente</td>
		</tr>
		<tr>
			<td>Deslizamientos</td>
			<td>Movimiento ladera abajo de masas de suelo o roca cuando el terreno se vuelve inestable.<br>Se pueden reconocer deslizamientos traslacionales y rotacionales.</td>
			<td>Roca<br>Suelo<br>Detritos (fragmentos de roca)<br>Nieve</td>
			<td>Movimiento lento cuando se desarrolla en rocas y rápido cuando ocurre en suelos</td>
		</tr>
		<tr>
			<td>Volcamientos o toppling</td>
			<td>Movimiento que se realiza en bloques o por la presión de fluidos en grietas, generalmente hacia abajo </td>
			<td>Bloques de roca o suelo</td>
			<td>Gatillado por la gravedad</td>
		</tr>
		<tr>
			<td>Extensiones laterales</td>
			<td>Movimiento de bloques rocosos o masas de suelo donde se desplazan lentamente en pendientes muy bajas.</td>
			<td>Llanuras con rellenos granulares de origen antrópico.<br>Llanuras deltaicas y terrazas fluviales Escarpes de riberas fluviales y lacustres y bordes de humedales</td>
			<td>Desplazamientos muy lentos a favor de pendientes muy bajas</td>
		</tr>
		<tr>
			<td>Flujos de detritos, barro o aluviones </td>
			<td>Movimiento de corrientes lodosas que fluyen rápidamente por una ladera o quebrada. Son de carácter azonal y pueden extenderse varios kilómetros desde su punto de origen, arrastrando árboles, rocas y otros materiales.</td>
			<td>Detritos y lodo que arrastra árboles, rocas y otros materiales en su traslado.</td>
			<td>Desplazamientos rápidos en función a la pendiente.</td>
		</tr>
	  </tbody>
	</table>

	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
		  <p class='text-justify'>
			Si deseas saber más sobre el origen, propagación y medición de remoción en masa en nuestro país, te invitamos a revisar el curso: <u><a target="_blank" href="<?php echo Config::get('URL');?>aula/remociones_en_chile"><b>Remociones en masa</b></a></u>. Acá podrás revisar en detalles los elementos que interactúan en este riesgo natural.
		  </p>
		</div>
	  </div>
	  
	  	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
		</div>
		 <div class="panel-body text-justify">
				  <h4>¡Revisa lo aprendido!</h4>
				  <p>Los riesgos naturales son de diverso origen. Señala que riesgos están presentes en nuestro país:</p>
				  <div class="panel panel-default">
		<div class='panel-body '>
		  						<div class="checkbox">
							<label>
								<input type="checkbox" name="pregunta-2[]" value="1" <?php if ($this->p2 == true) { echo 'checked'; } ?> <?php if ($this->p2 == true) { echo 'disabled="disabled"'; } ?>>
									Aluviones
							</label>
							<br>
							<label>
								<input type="checkbox" name="pregunta-2[]" value="2" <?php if ($this->p2 == true) { echo 'checked'; } ?> <?php if ($this->p2 == true) { echo 'disabled="disabled"'; } ?>>
									Sismos 
							</label>
							<br>
							<label>
								<input type="checkbox" name="pregunta-2[]" value="3" <?php if ($this->p2 == true) { echo 'checked'; } ?> <?php if ($this->p2 == true) { echo 'disabled="disabled"'; } ?>>
									Erupciones volcánicas
							</label>
							<br>
							<label>
								<input type="checkbox" name="pregunta-2[]" value="4" <?php if ($this->p2 == true) { echo 'disabled="disabled"'; } ?>>
									Huracanes
							</label>
						</div>
					</div>
				  </div>
		<button id="btn-respuesta-select" data-number="2" class="btn btn-rosado" <?php if ($this->p2 == true) { echo 'disabled="disabled"'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>
		</div>
	  </div>	
	  
	  	  	  	  <div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>El riesgo de carácter azonal al que está expuesta la población de la zona Norte de nuestro país es:</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-tres" value="1" id="tres-alt1" <?php if ($this->p3 == true) { echo 'disabled'; } ?>>
				Erupciones volcánicas
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="2" id="tres-alt2"<?php if ($this->p3 == true) { echo 'disabled'; } ?>>
				Tsunami
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="3" id="tres-alt3" <?php if ($this->p3 == true) { echo 'disabled'; } ?> <?php if ($this->p3 == true) { echo 'checked'; } ?>>
				Aluviones
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="3" class="btn btn-rosado" <?php if ($this->p3 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>   
	 	
	<div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>La tectónica de placa es un proceso que explica principalmente el origen de fenómenos asociados a:</p>
		 <div class="panel panel-default">
        <div class="panel-body">
		 <div class="radio">
			<label>
				<input type="radio" name="pregunta-cuatro" value="1" id="cuatro-alt1" <?php if ($this->p4 == true) { echo 'disabled'; } ?>>
				Sismos e inundaciones
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="2" id="cuatro-alt2" <?php if ($this->p4 == true) { echo 'disabled'; } ?> <?php if ($this->p4 == true) { echo 'checked'; } ?>>
				Sismos y volcanismo
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-cuatro" value="3" id="cuatro-alt3" <?php if ($this->p4 == true) { echo 'disabled'; } ?>>
				Volcanismo e inundaciones
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="4" class="btn btn-rosado" <?php if ($this->p4 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div> 
	
      <p class="text-right"><button class="btn btn-rosado" onclick="window.location='<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_2'" role="button"><span class="glyphicon glyphicon-star"></span> Avanzar a la Lección 2</button></p>
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
			aObject = event.currentTarget;
			switch($(aObject).data("number")) {
				case 2:
				    var p1 = document.getElementsByName('pregunta-2[]');
					if(p1[0].checked == false && p1[1].checked == false && p1[2].checked == false && p1[3].checked == false){
							$("#mensaje-error").html('<p>Debes seleccionar una respuesta válida para la pregunta.</p>');
							$("#modal-error").modal('show');
							text = false;					
					}else{
							if(p1[0].checked == true && p1[1].checked == true && p1[2].checked == true && p1[3].checked == false){
							text = true;
							}else{
								$("#mensaje-error").html('<p>Tu respuesta esta incorrecta. Intenta de nuevo, revisa los textos y videos de la lección.</p>');
								$("#modal-error").modal('show');
								text = false;
							}
					}
					pregunta = 2;
					break;			
				case 3:
					select1 = document.getElementById("tres-alt1").checked;
					select2 = document.getElementById("tres-alt2").checked;
					select3 = document.getElementById("tres-alt3").checked;
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
					pregunta = 3;
					break;				
				case 4:
					select1 = document.getElementById("cuatro-alt1").checked;
					select2 = document.getElementById("cuatro-alt2").checked;
					select3 = document.getElementById("cuatro-alt3").checked;
					if(select1 == false && select2 == false && select3 == false){
							$("#mensaje-error").html('<p>Debes seleccionar una respuesta válida para la pregunta.</p>');
							$("#modal-error").modal('show');
							text = false;					
					}else{				
						if(select2 == true){
							text = true;					
						}else{
							$("#mensaje-error").html('<p>Tu respuesta esta incorrecta. Intenta de nuevo, revisa los textos y videos de la lección.</p>');
							$("#modal-error").modal('show');
							text = false;
						}									
					}					
					pregunta = 4;
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

      $('#modal-video').on('hidden.bs.modal', function (e) {
        $("#video-frame").remove();
      });
	  
	  /* Pop-up imagen*/
	  $("#img-1").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Placas tectónicas');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/1_1.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });   
	  $("#img-2").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Transferencia de energia interna de la Tierra');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/1_2.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-3").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Movimiento de las placas tectónicas');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/1_3.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-4").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Tipos de terremotos');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/1_4.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  }); 
	  $("#img-5").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Umbral de generación de tsunami ');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/1_5.png" class="img-responsive" alt="1"><br><small>Fuente:  KimGen LAB, 2017.</small>');
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