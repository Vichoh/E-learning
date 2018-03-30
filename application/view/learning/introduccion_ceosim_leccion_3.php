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
.lista-ordenada{
list-style-type: decimal !important;
}
.lista-ordenada > li{
background-color: transparent !important;
margin-bottom: 0px !important;
margin-left: 15px !important;
padding-left: 10px !important;
}
.norma{
height: 60px;
margin: 5px;
border: 1px solid #ba0d81;
background-color: #ba5097;
color: white;
}
.norma:hover{
background-color: #6b96c9;
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
        <li class="<?php if ($this->p15 == true) { echo 'active';}?>">Lección 3</li>
      </ul>
    </div>
  </div>
  <div class="row">
   <div class="col-md-2 hidden-xs">
      <div id="panel-afix">
		<div class="panel panel-default" >
		  <div class="panel-body">
			<nav id="nav-scrollspy">
			  <ul class="nav nav-stacked" id="sidebar">
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_en_chile">Inicio</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_introduccion"><?php if ($this->p1 == true && $this->p2 == true && $this->p3 == true && $this->p4 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Introducción</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_1"><?php if ($this->p5 == true && $this->p6 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 1</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>aula/riesgos_naturales_leccion_2"><?php if ($this->p7 == true &&
											$this->p8 == true &&
											$this->p9 == true &&
											$this->p10 == true &&
											$this->p11 == true &&
											$this->p12 == true &&
											$this->p13 == true &&
											$this->p14 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 2</a>
				</li>
				<li><a class="azul linea-izq" href="#l3"><?php if ($this->p15 == true && $this->p16 == true && $this->p17 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> Lección 3</a>
				  <ul class="nav nav-stacked">
				   <li><a href="#l31"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.1</a></li>
				   <li><a href="#l32"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.2</a></li>
				   <li>
					<a href="#l33"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.3</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l331"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.3.1</a></li>
					 <li><a href="#l332"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.3.2</a></li>
					</ul>
				   </li>
				   <li><a href="#l34"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.4</a></li>
				   <li>
					  <a href="#l35"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.5</a>
					  <ul class="nav nav-stacked">
						 <li><a href="#l351"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.5.1</a></li>						 
					  </ul>
				   </li>
				   <li>
					<a href="#l36"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.6</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l361"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.6.1</a></li>
					 <li><a href="#l362"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.6.2</a></li>
					 <li><a href="#l363"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.6.3</a></li>
					</ul>
				   </li>
				   <li>
					<a href="#l37"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.7</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l371"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.7.1</a></li>
					</ul>
				   </li>
				   <li>
					<a href="#l38"><?php if ($this->p15 == true) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.8</a>
					<ul class="nav nav-stacked">
					 <li><a href="#l381"><?php if ($this->p15 == true ) { echo '<span class="glyphicon glyphicon-ok-circle" style="color:#16AA00"></span>';}?> 3.8.1</a></li>
					</ul>
				   </li>
				  </ul>
				</li>
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
      <h2 id="l3" class="rojo" style="text-align:justify">LECCIÓN 3. La gestión para la reducción de riesgos de desastres en Chile</h2>
    
	  <p class='text-justify'>
		La definición de gestión del riesgo de desastres de acuerdo a la UNISDR corresponde a "El proceso sistemático de utilizar directrices administrativas, organizaciones, destrezas y capacidades operativas para ejecutar políticas y fortalecer las capacidades de afrontamiento, con el fin de  reducir el impacto adverso de las amenazas naturales y la posibilidad de que ocurra un desastre".
	  </p>
	  <p class='text-justify'>
		En este contexto, la lección tiene como propósito dar a conocer cómo opera en Chile la gestión para la reducción de riesgos de desastres, para ello nos enmarcaremos en el ciclo del riesgo marco que estructura en tres fases (antes – durante – después) la gestión de los riesgos. En este tenor, conocerás el marco normativo e institucional que opera en nuestro país, los roles y funciones de las instituciones técnicas, las medidas de preparación y mitigación, los sistemas de alerta, medidas de atención y control realizados durante un evento, y los procesos de recuperación y rehabilitación instaurados en eventos catastróficos ocurridos en el país. 
	  </p>
	  <p class='text-justify'>
		Por último, reconoceremos la importancia de la planificación del territorio como medida para reducir las consecuencias de una amenaza natural, concibiendo  que la preparación ante el riesgo de desastre es una responsabilidad social, donde cada acción inconsistente con la dinámica del territorio puede ocasionar desequilibrios propiciando en algunos casos la creación de escenarios de riesgos.
	  </p>
	  <h3 id='l31' class='text-justify'>3.1 El ciclo de gestión del riesgo de desastres: marco conceptual para la gestión del riesgo.</h3>
	  <p class='text-justify'>
		El ciclo de gestión de riesgo de desastres  es un marco que desde un enfoque holístico da cuenta de las relaciones entre amenazas del riego, el desarrollo de los desastres y la etapa de recuperación. Proporcionando el marco base para abordar los desastres incorporando el sistema institucional, las capacidades organizacionales, a través de tres fases: prevención, respuesta y recuperación, también reconocidas como antes, durante y después. 
	  </p>
	  <p class='text-justify'>
		<b>Prevención:</b> involucra las actividades previas a la ocurrencia de un evento con el fin de evitarlo o suprimirlo, de no ser posible la acción descrita el propósito será reducir al máximo los efectos sobre las personas. Esta fase se compone además de sub etapas reconocidas por <b>la mitigación, y preparación</b>. En Chile la prevención de los desastres se lleva a cabo a través del Sistema de Protección Civil, y otras normas especifícas por ejemplo aquellas que regulan la construcción antisísmica, o normas de regulación del uso de suelo urbano.
	  </p>
	  <p class='text-justify'>
		<b>Respuesta:</b> corresponde a la respuesta planificada y oportuna para que una amenaza no se convierta en desastres, es el proceso que se lleva a cabo inmediatamente después de ocurrido un evento y requiere del conjunto de acciones planificadas en la etapa de prevención se activen, en esta fase se reconocen dos sub etapas que son la <b>emergencia y el impacto</b>, la primera refiere a la declaración del tipo de alerta,  a los daños ocasionados, muertes, destrucciones, etc. La segunda sub etapa alude a las acciones inmediatas que dan respuesta al evento aquí se reconocen medidas como la evacuación, rescates, entre otras.
	  </p>
	  <p class='text-justify'>
		<b>Recuperación:</b> fase que inicia posterior al desastre, aquí se realizan actividades para reestablecer las consecuencias del evento, esta fase opera en dos momentos; el primero es la rehabilitación que ha comenzado en la fase de respuesta donde se va dando abastecimiento  en el corto plazo a las consecuencias de la emergencia por ejemplo de servicios básicos, la segunda sub etapa corresponde al proceso de reconstrucción que consiste en la reparación del daño ocasionado con el fin de volver al estado inicial, opera en el largo plazo requiere esfuerzos e inyección de recursos económicos para la reconstrucción. Cuando los efectos de un evento han sido de proporciones, existe la posibilidad de dictar decretos de emergencia económica posibilitando al gobierno gastar hasta un 2% del presupuesto anual en aspectos relacionados con una emergencia.
	  </p>
	   <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-1' href='#img-1'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_1.png' class='img-responsive center-block' alt='Imagen 1'></a>
		  <p>
			<small>Fuente: KimGen LAB, 2017.</small>
		  </p>
		</div>
	  </div>
	  <h3 id='l32' class='text-justify'>3.2 Marco Normativo e institucional de gestión de riesgos en Chile </h3>
	  <p class='text-justify'>
		Entendido el ciclo de gestión de riesgos, a continuación comprenderemos como opera en Chile el sistema en términos normativos e institucionales, para ello revisaremos el marco legal que regulariza la gestión de riesgos, el cual se contextualiza a partir de La Constitución Política de La República de Chile, que en su artículo 1°, inciso 5° establece "es deber del Estado dar protección a la población y la familia", a partir de ello se derivan una serie de normas que tienen implicancias en la gestión de reducción de riesgos de desastres. En esta línea revisaremos un resumen del marco regulatorio para la gestión de los riesgos de origen natural en el país:
	  </p>
	  	   <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <div class="row text-center">
		  <div class="row">	  
			  <div class='col-md-3 '></div>
			  <a href="#norma-1"><div class='col-md-3 norma' id='norma-1'>Ley 7727 de 1943</div></a>
			  <a href="#norma-2"><div class='col-md-3 norma' id='norma-2' href='#norma-2'>Decreto Supremo 26 de 1966</div></a>
			  <div class='col-md-3 '></div>
		  </div> 
		  <div class="row">
		      <div class='col-md-1 '></div>
			  <a href="#norma-3"><div class='col-md-3 norma' id='norma-3' href='#norma-3'>D.L. 369 1974</div></a>
			  <a href="#norma-4"><div class='col-md-3 norma' id='norma-4' href='#norma-4'>Ley 16282 de 1965</div></a>
			  <a href="#norma-5"><div class='col-md-3 norma' id='norma-5' href='#norma-5'>Ley 18.415 de 1985</div></a>
		  </div>
		  <div class="row">  
		      <div class='col-md-1 '></div>
			  <a href="#norma-6"><div class='col-md-3 norma' id='norma-6' href='#norma-6'>Decretos Supremos 458 y 47 1992</div></a>
			  <a href="#norma-7"><div class='col-md-3 norma' id='norma-7' href='#norma-7'>NCh433 46 de 1996</div></a>
			  <a href="#norma-8"><div class='col-md-3 norma' id='norma-8' href='#norma-8'>Decreto N° 156 de 2002</div></a>
		  </div>
		  <div class="row">
		      <div class='col-md-1 '></div>
			  <a href="#norma-9"><div class='col-md-3 norma' id='norma-9' href='#norma-9'>Ley 19.175 de 2005</div></a>
			  <a href="#norma-10"><div class='col-md-3 norma' id='norma-10' href='#norma-10'>Ley 18.965 de 2006</div></a>
			  <a href="#norma-11"><div class='col-md-3 norma' id='norma-11' href='#norma-11'>Decreto Supremo 68 del 2009</div></a>
		  </div>
		  <div class="row">	
			  <div class='col-md-3 '></div>		  
			  <a href="#norma-12"><div class='col-md-3 norma' id='norma-12' href='#norma-12'>Ley 20.444 de 2010</div></a>
			  <a href="#norma-13"><div class='col-md-3 norma' id='norma-13' href='#norma-13'>Decreto Supremo 38 del 2011</div></a>
			  <div class='col-md-3 '></div>
		  </div>
	  </div>  
	  </div>
	  </div>
	  
	  <p class='text-justify'>
		Del marco normativo antes expuesto, destaca el Plan Nacional de Protección Civil D.S. N°156, que constituye el instrumento regulatorio vigente y define el Sistema Nacional de Protección Civil, normando la estructura organizacional y administrativa del Sistema. Su objetivo principal es disponer una planificación multisectorial de carácter indicativo para la protección civil. Es preciso mencionar en este apartado que el plan será reemplazado por una <a href="#glosario-1" id="glosario-1"><u><b>Ley de Gestión de Riesgo de Desastres</b></u></a>, normativa que actualmente no existe en Chile. Sobre estos antecedentes profundizaremos en los apartados siguientes.
	  </p>
	  <h3 id='l33' class='text-justify'>3.3 Plan de protección Civil y Sistema de Protección Civil</h3>
	  <p class='text-justify'>
		El año 2002 se promulga el Plan Nacional de Protección Civil a través del D.S. N°156 que reemplaza un antiguo plan del año 1977, el actual Plan constituye el instrumento regulatorio que define el Sistema Nacional de Protección Civil, normando su estructura y administración. El objetivo general del Plan es disponer de una planificación multisectorial en materia de Protección Civil, de carácter indicativo, destinada al desarrollo de acciones permanentes para la prevención y atención de emergencias y/o desastres en el país, a partir de una visión integral de manejo de riesgos. 
	  </p>
	  <p class='text-justify'>
		Conceptualmente, "la Protección Civil se entiende como la protección a las personas, a sus bienes y ambientes ante una situación de riesgo colectivo, sea este de origen natural o generado por la actividad humana" (D.S N°156)
	  
	  </p>
	  <p class='text-justify'>
		La Protección Civil en Chile es asumida por el <b>Sistema Nacional de Protección Civil</b>, el cual integran las autoridades y servicios públicos y privados, el mundo de la ciencia y la tecnología y la comunidad organizada, incluyendo además a entidades de carácter voluntario bajo la responsabilidad del Ministerio del Interior y Seguridad Pública y de la coordinación de su organismo especializado, la Oficina Nacional de Emergencia, ONEMI, del Ministerio del Interior y Seguridad Pública, cuya gestión es aplicada a nivel nacional, regional, provincial y comunal . 
	  </p>
	  <p class='text-justify'>
		<b>Organigrama  del Sistema de Protección Civil</b>
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-2' href='#img-2'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_2.png' class='img-responsive center-block' alt='Imagen 2'></a>
		  <p>
		<small>Fuente: Gobierno de Chile, Ministerio del Interior y Seguridad Pública.</small>
		  </p>
		</div>
	  </div>
	  <h4 id='l331' class='text-justify'>3.3.1 Comité de Protección Civil</h4>
	  <p class='text-justify'>
		El Comité de Protección Civil es un equipo de trabajo definido por el Plan de Protección Civil  que reúne a las instituciones, servicios y organismos involucrados en la gestión del riesgo con el fin de contribuir a mejorar la seguridad de las personas, sus bienes y su medio ambiente, fundamentalmente en la fase preventiva del Ciclo de Manejo del Riesgo. Es un órgano de trabajo permanente y representa los recursos del Sistema para la prevención, mitigación, preparación, alerta temprana y cumplimiento de planes y programas de emergencia.
	  </p>
	  
	  <!-- para paneles-->
	  <div class='panel panel-rosado'>
		<div class='panel-body '> 
			<p class='text-justify'>
			Entre las principales funciones del Comité de Protección Civil se encuentran: 
		  </p>
		  <ol class='text-justify lista-ordenada'>
			<li>Coordinar la gestión de las diferentes instituciones para mejorar la seguridad de la población del territorio. </li>
			<li>Poner en común los recursos profesionales y técnicos. </li>
			<li>Compartir información y diagnósticos. </li>
			<li>Desarrollar un sistema de comunicación inter Comité de manera que la información clave fluya con la rapidez necesaria en cada caso.</li>
			<li>Identificar los principales riesgos del territorio y elaborar planes de emergencia adecuados. </li>
			<li>Ejercitar los planes de emergencia. </li>
			<li>Educar e informar dentro de su ámbito de competencia. 
			<li>Predeterminar la ubicación del Centro de Operaciones de Emergencia para el funcionamiento del Comité de Operaciones cuando este se activa.</li>
		  </ol>		
		</div>
	  </div>
	  
	  
	  
	  
	  
	  <h4 id='l332' class='text-justify'>3.3.2 Los Planes de emergencia</h4>
	  <p class='text-justify'>
		El Plan de Emergencia es  un instrumento que proviene del Plan de Protección Civil, contiene de manera ordenada y organizada, las acciones y procedimientos que se deben poner en marcha, los roles y funciones del recurso humano, y los recursos técnicos, materiales y financieros que se utilizarán en la respuesta frente a una situación de emergencia, desastre o catástrofe. En este sentido, el Plan de Emergencia debe establecer previamente hasta dónde se administra una emergencia con medios propios, y cuándo se recurre a instancias superiores del Sistema de Protección Civil (en sus niveles comunal, provincial, regional o nacional). Como principio considera que no contiene procedimientos rígidos destinados a enfrentar eventos adversos, sino que se trata de un documento dinámico y flexible, que puede ser modificado y/o adecuado sobre la base de las lecciones aprendidas en hechos (eventos) reales, o como resultado de sus ejercitaciones, considerando además, que la o las variables de riesgo son cambiantes, de acuerdo a la incidencia en factores, tanto naturales como humanos, que finalmente afectan la concepción inicial del Plan.
	  </p>
	  <p class='text-justify'>
	  <div class='panel panel-rosado'>
		<div class='panel-body '> 
			<p class='text-justify'>
		En definitiva el Plan de Emergencia es un documento que: 
	  </p>
	  <ol class='text-justify lista-ordenada'>
		<li>Estandariza y protocoliza la respuesta a emergencias. </li>
		<li>Guía la acción colectiva y coordinada de los diferentes participantes. </li>
		<li>Asigna la responsabilidad a las personas y organizaciones para llevar a cabo acciones específicas en caso de emergencia. </li>
		<li>Establece las líneas de relaciones de autoridad y organización y muestra cómo todas las acciones se coordinarán. </li>
		<li>Identifica el personal, equipo, instalaciones, suministros y otros recursos disponibles dentro de la jurisdicción necesarios para responder.</li>
		  </ol>		
		</div>
	  </div>
	 
	  <p class='text-justify'>
		<b>Metodologías que se utilizan para la elaboración de un plan de emergencia</b>
		</p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-3' href='#img-3'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_3.png' class='img-responsive center-block' alt='Imagen 3'></a>
		  <p>
			<small>Fuente: Gobierno de Chile.</small>
		  </p>
		</div>
	  </div>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				A continuación puedes revisar los planes de emergencia elaborados para la comuna de Pucón y Melipeuco.
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.melipeuko.cl/LEY%20DE%20TRANSPARENCIA/Plan%20Emergencia%20Volc%C3%A1nica%20Actualizado%20(2015).pdf">Plan de emergencia Melipeuco</a>
			<a class="btn btn-rosado" target="_blank" href="http://www.municipalidadpucon.cl/web2010/para%20descarga/Plan%20Emergencia%20Volcanica/PlanEmergenciaVolcanica.pdf">Plan de emergencia Pucón</a>
		</div>
	  </div>
	  <h3 id='l34' class='text-justify'>3.4 Comité de operaciones de emergencias</h3>
	  <p class='text-justify'>
		El año 2011 se promulga el D.S. 38 que determina la constitución del Comité de Operaciones de Emergencia, en adelante COE,  es un equipo de trabajo conformado por los representantes de las instituciones, servicios y organismos que ya forman parte del Comité de Protección Civil, se encuentran relacionados por su naturaleza y ámbito de competencia, al tipo de evento o incidente que genera la emergencia o desastre. Cuya función es técnico ejecutiva y se constituye en caso de emergencia, según sea las características y magnitud de la emergencia. 
	  </p>
	  <p class='text-justify'>
		Mediante la norma señalada se menciona que el COE:  “Deberá constituirse un Comité Nacional de Operaciones de Emergencia, cuando se registren emergencias, desastres o catástrofes que provoquen daños de consideración en las personas y/o bienes, que afecten a todo o parte del territorio nacional, entendiéndose por tal cuando se vean involucradas una o dos más regiones del país, o bien, en el caso que, afectándose a una o más comunas de una misma región, el Ministro del Interior resuelva que el siniestro provoca un alto impacto en la población, atendida la magnitud del mismo.
	  </p>
	  <h3 id='l35' class='text-justify'>3.5 Oficina Nacional de Emergencias: unidad coordinadora para la gestión de la emergencia en Chile</h3>
	  <p class='text-justify'>
		ONEMI es el organismo técnico del Estado de Chile encargado de la coordinación del Sistema Nacional de Protección Civil. Su misión es planificar, coordinar y ejecutar las actividades destinadas a la prevención, mitigación, alerta, respuesta y rehabilitación que demanda el funcionamiento del Sistema Nacional de Protección Civil frente a amenazas y situaciones de emergencias, desastres y catástrofes; con el fin de resguardar a las personas, sus bienes y ambiente a nivel nacional, regional, provincial y comunal.
	  </p>
	  <h4 id='l351' class='text-justify'>3.5.1 Centro de Alerta Temprana (CAT) de ONEMI: sistema de monitoreo para la gestión del riesgo de desastres </h4>
	  <p class='text-justify'>
		El centro de alerta temprana es la unidad de la Oficina Nacional de Emergencias encargada del monitoreo constante ante alguna emergencia que se presente a nivel nacional, operando en tiempo real, alimenta su información de  instituciones técnicas las cuales a su vez monitorean distintos tipos de eventos, así se encuentran instituciones como SERNAGEOMIN, OVDAS, Centro Sismológico Nacional, Servicio Hidrográfico y Oceanográfico de la Armada, entre otros. 
	  </p>
	  	<div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-4' href='#img-4'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_4.png' class='img-responsive center-block' alt='Imagen 4'></a>  
		  <p>
		<small>Fuente: KimGen LAB, 2017 </small>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Sistema de alerta de ONEMI</b>
	  </p>
	  <p class='text-justify'>
		Los niveles de alerta de ONEMI son transversales ante las amenazas naturales y su función tiene relación con la gestión e inversión de recursos ante un evento de riesgo.
	  </p>
	  <p class='text-justify'>
		De acuerdo con lo establecido en el Decreto N°156 del Ministerio del Interior del año 2002, sitúa las alertas como un estado de vigilancia, atención y preparación; que en el ámbito de la Gestión Técnica de Protección Civil, debe expresarse en el monitoreo continuo de todo escenario o situación de riesgo.
	  </p>
	  <p class='text-justify'>
		El Plan Nacional de Protección Civil consagra para Chile la tipología internacional, con grados de alerta relacionables con las tres señales clásicas del semáforo: Verde, Amarillo y Rojo.
	  </p>
	  <div class="panel panel-rosado">
        <div class="panel-heading"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> MÁS INFORMACIÓN </div>
        <div class="panel-body">
          <table class="table table-sm">
            <thead>
              <tr style="border-bottom: 3px solid #000000">
                <th style="info">Alerta</th>
                <th style="info">Descripción</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 2px solid #000000">
                <th scope="row" class="bg-success">Alerta Verde</th>
                <td class="text-justify">Implica la vigilancia continua de la situación general del país, en cada área geográfica, para advertir con la máxima prontitud factible toda situación de riesgo, que pudiera desencadenar en un evento de emergencia.<br><br>Al advertirse una situación de riesgo que pudiera desencadenar en un evento de emergencia, esta Alerta Verde se proyecta al Sistema de Protección Civil (hacia el Comité Nacional y Regional de Emergencias y Direcciones Regionales de ONEMI de las zonas en riesgo), en su expresión de Alerta Temprana Preventiva, para el reforzamiento de los procedimientos de monitoreo y atención.</td>
              </tr>
              <tr style="border-bottom: 2px solid #000000">
                <th scope="row" class="warning">Alerta Amarilla</th>
                <td class="text-justify">Se establece cuando una amenaza crece en extensión y severidad, lo que lleva a suponer que no podrá ser controlada con los recursos locales habituales, debiendo alistarse los recursos necesarios para intervenir, de acuerdo a la evolución del evento destructivo.</td>
              </tr>
              <tr style="border-bottom: 2px solid #000000">
                <th scope="row" class="bg-danger">Alerta Roja</th>
                <td class="text-justify">Se establece cuando el evento crece en extensión y severidad, requiriendo la movilización de todos los recursos necesarios y disponibles para la atención y control del evento destructivo.<br><br>Una alerta roja se puede establecer de inmediato con la amplitud y cobertura necesarias, sin que medie previamente una alerta amarilla, según las características de la situación.</td>
              </tr>
            </tbody>
          </table>
          <p><small>Fuente: ONEMI.</small></p>
        </div>
      </div>
	  	  <div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p>¿Cuáles de los siguientes acrónimos corresponden a las metodologías utilizadas en Chile para elaborar un plan de emergencia?</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-ocho" value="1" id="ocho-alt1" <?php if ($this->p8 == true) { echo 'disabled'; } ?>>
				AIDEP, ACCEDER, CAT
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-ocho" value="2" id="ocho-alt2" <?php if ($this->p8 == true) { echo 'disabled'; } ?>>
				CAT, DEDO$, ACCEDER
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-ocho" value="3" id="ocho-alt3" <?php if ($this->p8 == true) { echo 'disabled'; } ?> <?php if ($this->p8 == true) { echo 'checked'; } ?>>
				AIDEP, ACCEDER, DEDO$
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="8" class="btn btn-rosado" <?php if ($this->p8 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>  
		  	  
	<div class="panel panel-rosado">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> EVALUACIÓN
      </div>
      <div class="panel-body text-justify">
        <h4>¡Revisa lo aprendido!</h4>
		<br>
		<p class='text-justify'>La siguiente definición: “Se establece cuando el evento crece en extensión y severidad, requiriendo la movilización de todos los recursos necesarios y disponibles para la atención y control del evento destructivo”, corresponde a:</p>
         <div class="panel panel-default">
        <div class="panel-body">
		  <div class="radio">
			<label>
				<input type="radio" name="pregunta-tres" value="1" id="nueve-alt1" <?php if ($this->p9 == true) { echo 'disabled'; } ?>>
				Alerta verde
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="2" id="nueve-alt2" <?php if ($this->p9 == true) { echo 'disabled'; } ?>>
				Alerta amarilla
			</label>
			<br>
			<label>
				<input type="radio" name="pregunta-tres" value="3" id="nueve-alt3" <?php if ($this->p9 == true) { echo 'disabled'; } ?> <?php if ($this->p9 == true) { echo 'checked'; } ?>>
				Alerta roja
			</label>
          </div>
		</div>
      </div> 
	        <button id="btn-respuesta-select" data-number="9" class="btn btn-rosado" <?php if ($this->p9 == true) { echo 'disabled'; } ?>><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Enviar</button>  
      </div>
    </div>  
	  <h3 id='l36' class='text-justify'>3.6 Instituciones técnicas que participan en el monitoreo de  la  gestión del riesgo de desastres en Chile</h3>
	  <p class='text-justify'>
		Ya hemos revisado en que consiste la gestión del riesgo, el ciclo de gestión de riesgos y el marco normativo que regula la gestión del riesgo en Chile, a través de lo cual hemos determinado que en el país opera un plan de protección civil que estructura la gestión de los riesgos, el cual se apoya en ONEMI quien es la encargada de la coordinación en caso de emergencias, organismo que para la determinación de los niveles de alerta se apoya en distintas instituciones técnicas las cuales conoceremos a continuación.
	  </p>
	  <h4 id='l361' class='text-justify'>3.6.1 Sistema de monitoreo volcánico </h4>
	  <p class='text-justify'>
		En consideración a los innumerables eventos eruptivos evidenciados en territorio nacional, es que en nuestro país opera un sistema de monitoreo volcánico a cargo del Servicio Nacional de Geología y Minería. Este sistema se denomina Red Nacional de Vigilancia Volcánica.
	  </p>
	  <p class='text-justify'>
		El objetivo de esta red es el monitoreo de la actividad a través  del OVDAS (Observatorio volcanológico de los Andes del Sur) que opera como centro de interpretación de datos de la red
	  </p>
	  <p class='text-justify'>
		<b>Red Nacional de Vigilancia Volcánica </b>
	  </p>
	  <p class='text-justify'>
		El Servicio Nacional de Geología y Minería (SERNAGEOMIN), tal como señala en su sitio web,  informa la situación de los volcanes activos monitoreados a través de dos tipos de boletines:
	  </p>
	  <ol class='text-justify lista-ordenada'>
		<li>El Reporte de Actividad Volcánica (RAV) da a conocer la situación de los volcanes activos agrupados por cada región del país, y la periodicidad de su publicación depende del nivel de alerta técnica (Verde: Sexto día hábil de cada mes; Amarilla: Cada 15 a 20 días; Naranja y Roja: Diariamente). </li>
		<li>El Reporte Especial de Actividad Volcánica (REAV) informa de manera extraordinaria la actividad anómala y puntual de un volcán específico y/o da cuenta de un cambio en el nivel de alerta técnica. </li>
	  </ol>
	  <p class='text-justify'>
		<b>Observatorio volcanológico de los Andes del Sur </b>
	  </p>
	  <p class='text-justify'>
		El OVDAS es el centro de interpretación de datos de la Red Nacional de Vigilancia Volcánica de SERNAGEOMIN.
	  </p>
	  <p class='text-justify'>
		Su dependencia está ubicada en la ciudad de Temuco, región de La Araucanía, la unidad es responsable de vigilar el sistema tecnológico de las estaciones de vigilancia y nodos de transmisión de datos instalados en el perímetro de los volcanes activos del país. Sobre esta base  SERNAGEOMIN informa a la ciudadanía a través de reportes periódicos sobre seguimiento habitual y reportes en caso de anomalías en el comportamiento de un volcán.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-5' href='#img-5'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_5.png' class='img-responsive center-block' alt='Imagen 5'></a>
		  <p>
			<small>Fuente: SERNAGEOMIN, 2016</small>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		Actualmente el Sistema vigila 43 volcanes reconocidos como los de mayor actividad en el país de un total de 90 volcanes activos.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				A continuación podrás revisar el monitoreo del Observatorio Volcanológico de los Andes del Sur. 
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.sernageomin.cl/volcan-observatorio.php">Monitoreo OVDAS</a>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Sistema de alerta volcánica </b>
	  </p>
	  <p class='text-justify'>
		SERNAGEOMIN genera además productos y servicios de información útiles para usuarios diversos en el ámbito de la protección civil, planificación territorial y gestión de emergencias. Entre ellas se reconoce el sistema de alerta volcánica donde se definen cuatro niveles de alerta, los cuales se determinan a partir del estado de actividad de los volcanes, para cada nivel de alerta se recomiendan acciones que debe seguir la población.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-body '> 
	  <a class='text-primary' id='img-6' href='#img-6'><img src='<?php echo Config::get('URL');?>img/aula/riesgos/3_6.png' class='img-responsive center-block' alt='Imagen 6'></a>
		  <p>
			<small>Fuente: SERNAGEOMIN, 2016. </small>
		  </p>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Mapas de peligros o amenaza volcánica </b>
	  </p>
	  <p class='text-justify'>
		Otro producto elaborado por SERNAGEOMINS son los mapas de peligros volcánicos, estos  corresponden a una representación cartográfica de las probables zonas de afectación ante flujos de lava, caída de piroclastos, lahares o aluviones volcánicos, entre otros, donde se informa la peligrosidad de estos procesos, ya sea a nivel proximal (inmediatamente alrededor del volcán), distal (en los valles), o regional (vinculado con caída de cenizas).
	  </p>
	  <p class='text-justify'>
		<b>¿Cómo se hacen los mapas de peligro volcánico?</b>
	  </p>
	  <p class='text-justify'>
		Para la elaboración de estos mapas, se establece la historia geológica del volcán, para reconocer estilos, recurrencia y extensión de erupciones, y así proyectar escenarios y niveles de peligro. Por ejemplo tener una alta recurrencia genera zonas de muy alto peligro, mientras que escenarios de baja probabilidad generan zonas de bajo peligro (SERNAGEOMIN).
	  </p>
	  <p class='text-justify'>
		<b>¿Para qué sirve?</b>
	  </p>
	  <p class='text-justify'>
		El objetivo principal del mapa de peligro volcánico es servir de fundamento para una adecuada gestión del riesgo en el contexto de la protección civil, en particular en el manejo de crisis volcánicas, la elaboración del Plan de Emergencia Volcánica municipal, la educación e información ciudadana, y la planificación del uso del suelo.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				Te invitamos a revisar los 43 mapas de peligro o amenaza volcánica elaborados por el Servicio Nacional de Geología y Minería.
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.sernageomin.cl/volcanes-mapas.php">Mapas de amenaza o peligro volcánico</a>
		</div>
	  </div>
	  <h4 id='l362' class='text-justify'>3.6.2 Red sismológica nacional a cargo del  Centro Sismológico Nacional </h4>
	  <p class='text-justify'>
		Como respuesta al terremoto de 1906, que destruyó parte de la ciudad de Valparaíso y de la zona central del país, el gobierno de Pedro Montt, a petición del entonces Rector de la Universidad de Chile, Valentín Letelier, fundó el Servicio Sismológico, el 1 de mayo de 1908. El Centro Sismológico Nacional, tiene la tarea de impulsar y desarrollar los aspectos observacionales de terremotos en el país con el fin de entregar la mejor, más completa, depurada y oportuna información posible relacionada con la observación del proceso de terremotos.
	  </p>
	  <h4 id='l363' class='text-justify'>3.6.3 Servicio hidrográfico y oceanográfico de la Armada: El sistema Nacional de Alarma de Maremotos y las cartas de inundación por tsunami</h4>
	  <p class='text-justify'>
		La normativa legal otorga al SHOA la responsabilidad de coordinar, operar y mantener el Sistema Nacional de Alarma de Maremotos. El SHOA hace llegar a las entidades Civiles, de las Fuerzas Armadas y Carabineros con asiento en los puertos y caletas del litoral, toda información relacionada con la magnitud y hora estimada de arribo de un posible tsunami a nuestras costas y recíprocamente hace llegar al Sistema Internacional de Alarma de Tsunami del Pacífico, información oportuna acerca de maremotos que tengan su origen en las costas de Chile. 
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				El Sistema Nacional de Alarmas de Maremoto, publica solo los sismos iguales o mayores  a 5 metros en la escala Richter, da cuenta de los detalles a través de un boletín y muestra la ubicación en un mapa. 
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.snamchile.cl">SNAM </a>
		</div>
	  </div>
	  <p class='text-justify'>
		<b>Cartas de inundación por tsunami</b>
	  </p>
	  <p class='text-justify'>
		Como elemento fundamental de apoyo a su tarea operativa, el SHOA ha iniciado a partir del año 1997 la ejecución del Proyecto CITSU, que consiste en la elaboración de Cartas de Inundación por Tsunami para la costa de Chile, herramientas que permiten definir los niveles de inundación máximos esperados para las principales zonas urbanas y portuarias del borde costero de Chile, ante la ocurrencia de eventos sísmicos tsunamigénicos de campo cercano. 
	  </p>
	  <p class='text-justify'>
		Para el ámbito de la prevención y mitigación del impacto de los tsunamis, las  cartas de inundación son útiles para la planificación urbana que es ejecutada  a través de los municipios en la construcción de los estudios de riesgos como un ejemplo, además en la elaboración de los planes de evacuación y protección civil, tareas que como vimos en los apartados anteriores es supervisada por  la oficina Nacional de Emergencia del Ministerio del Interior (ONEMI) y los gobiernos locales (región, provincia y comunas), y los Comités Locales de Emergencia, y elaborados en base  a las metodologías para la elaboración de un Plan Comunal de Respuesta ante Tsunami.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				A continuación podrás revisar las cartas de inundación para las principales ciudades del país.
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.shoa.cl/servicios/citsu/citsu.html">Cartas de inundación </a>
		</div>
	  </div>
	  <h3 id='l37' class='text-justify'>3.7 La importancia de la planificación territorial como estrategia para  la gestión de riesgo de desastres</h3>  
	  <p class='text-justify'>
		Cuando hablamos de planificación territorial al igual que el ordenamiento territorial tiene como propósito alcanzar un equilibrado sistema de vida  a través de un proceso  que significa identificar, distribuir, organizar y regular las actividades humanas en ese territorio de acuerdo con ciertos criterios y prioridades sustentables. 
	  <p class='text-justify'>
		En términos normativos Chile no cuenta con una ley de ordenamiento territorial, existiendo una serie de normas que operan de manera sectorizada sin una política transversal que articule la intervención consensuada de los territorios. En esta línea una de las normas que más se acerca a la regulación de los usos del suelo es la Ley General de Urbanismo y Construcciones, la cual opera solo en suelos urbanos, y particularmente para temáticas de riesgos define áreas de restricción para el crecimiento urbano a través de los estudios fundados de riesgos, sin embargo estas medidas no son retroactivas, es decir operan solo a partir de la aplicación de la norma.
	  </p>
	  <h4 id='l371' class='text-justify'>3.7.1 Los estudios fundados de riesgos y la zonificación de riesgos en los Planes Reguladores Comunales</h4>
	  <p class='text-justify'>
		El Plan regulador comunal de acuerdo a la definición del artículo 41 de la Ley General de Urbanismo y Construcciones es un instrumento de planificación territorial que contiene un conjunto de disposiciones sobre condiciones adecuadas de edificaciones y espacios urbanos y de comodidad en la regulación funcional entre las zonas habitables, de trabajo y equipamiento y esparcimiento.
	  </p>
	  <p class='text-justify'>
		Sus disposiciones se refieren al uso de suelo a través de la zonificación, definiendo la localización de equipamiento urbano, densidades y determinación de prioridades en la urbanización de terrenos para la expansión de la ciudad, en función de la factibilidad de ampliar o dotar de redes sanitarias y energéticas, otros aspectos urbanísticos.
	  </p>
	  <p class='text-justify'>
		El Plan regulador está compuesto de:
	  </p>
	  <p class='text-justify'>
		<b>a)</b> Una Memoria explicativa, que contiene los antecedentes socio-económicos; los relativos a crecimiento demográfico, desarrollo industrial y demás antecedentes técnicos que sirvieron de base a las proposiciones, y los objetivos, metas y prioridades de las obras básicas proyectadas;
	  </p>
	  <p class='text-justify'>
		<b>b) </b> Un estudio de factibilidad para ampliar o dotar de agua potable y alcantarillado, en relación con el crecimiento urbano proyectado, estudio que requerirá consulta previa al Servicio Sanitario correspondiente de la Región;
	  </p>
	  <p class='text-justify'>
		<b>c) </b> Una Ordenanza Local que contendrá las disposiciones reglamentarias pertinentes, y
	  </p>
	  <p class='text-justify'>
		<b>d) </b> Los planos, que expresan gráficamente las disposiciones sobre uso de suelo, zonificación, equipamiento, relaciones viales, límite urbano, áreas prioritarias de desarrollo urbano, etc. Para los efectos de su aprobación, modificación y aplicación, estos documentos constituyen un solo cuerpo legal.
	  </p>
	  <p class='text-justify'>
		En relación a los planos estos indican la zonificación establecida por el Plan, estas estructuran a la ciudad en diversas zonas o áreas asignando un uso de suelo, entre las cuales y relacionado al tema que nos convoca se definen áreas de exclusión o zonas de riesgos, para la determinación de estas zonas es necesario la realización de un estudio fundado de riesgos.
	  </p>
	  <p class='text-justify'>
		La supervisión de la planificación urbana y las áreas de riesgos se lleva a cabo a través de los estudios fundados de riesgos los cuales a través de un análisis técnico definen áreas restringidas al desarrollo urbano, por constituir un peligro para los asentamientos humanos, en este sentido las áreas de restricción se denominaran zonas no edificables o bien “áreas de riesgos".
	  </p>
	  <p class='text-justify'>
		Se entiende como área de riesgo a “aquellos territorios en los cuales, previo estudio fundado de riesgo, se limite determinado tipo de construcciones por razones de seguridad contra desastres naturales u otros semejantes, que requieran para su utilización la incorporación de obras de ingeniería o de otra índole suficientes para subsanar o mitigar tales efectos‿ (Artículo 2.1.17 de la Ordenanza General de Urbanismo y Construcciones)
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				Te invitamos a revisar el material que dispone el Ministerio de Vivienda y Urbanismo para ver la zonificación del Plan Regulador de la ciudad de Antofagasta, en el podrás revisar los usos de suelo designados con los usos permitidos y los usos prohibidos. Destaca el polígono con color verde definida como área de riesgo prohibiendo expresamente los asentamientos humanos y permite el asentamiento de áreas verdes.
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://zonificacionipt.minvu.cl/PRC/II/index.html">Zonificación del Plan Regulador de la ciudad de Antofagasta </a>
			<p class='text-justify'>
				<br>También puedes navegar en el siguiente enlace para revisar los planes reguladores comunales de otras ciudades del país.
			</p>
			<a class="btn btn-rosado" target="_blank" href="http://www.minvu.cl/opensite_20150529180447.aspx">Zonificación del Plan Regulador</a>
		</div>
	  </div>
	  <h3 id='l38' class='text-justify'>3.8 La responsabilidad de la sociedad en la gestión de reducción de desastres: la importancia de estar preparados y la capacidad de ser resilientes</h3>
	  <p class='text-justify'>
		Para que las intervenciones institucionales que apoyan a la gestión del riesgo de desastres sean aún mucho más fructiferas es necesario el reconocimiento y la concientización social en torno a la condición de riesgos del país, comprendiendo que el comportamiento social y los patrones de uso de los territorios son los que usualmente se convierten en los responsables de que una amenaza se materialice en desastres, en este sentido es necesario promover que  los actores locales ejerzan un rol activo en la preparación ante eventos de riesgos, para ello es necesario  reconocer el territorio que habitan comprender las dinamicas del medio físico y en función de ello tomar medidas de prevención o preparación si las condiciones lo ameritan.
	  </p>
	  <p class='text-justify'>
		De igual modo, desde la institucionalidad no es suficiente solo la reducción del riesgo a través de estrategias mecanicas u horizontales, en este sentido es posible que para la gestión integral del riesgo se requieran espacios de integración y concertación entre los conocimientos locales y los conocimientos propiamente técnicos, ello a través de la participación comunitaria que apoyen las estrategias para enfretar los peligros, reconociendo los distintos contextos sociales, culturales y económicos para de este modo desarrollar estrategias pertinentes y adecuadas de acuerdo a las realidades socioterritoriales.
	  </p>
	  	  <p class='text-justify'>
		Referido a la resiliencia, en el escenario de un país que posee una condición de riesgo activo y recurrente, manifestadas en episodios de distinta naturaleza y envergadua que han ocasionada un contndente historial de desastres, el propósito del curso ha sido promover la generación de una cultura de riesgo a través de la educación para la prevención de los desastres.
	  </p>
	  	  <p class='text-justify'>
		<b>La Resiliencia</b>
	  </p>
	  <p class='text-justify'>
		Conceptualmente los modelos sociales son dinámicos, ésta variación puede disminuir o aumentar el riesgos de desastre, considerando que tiene incidencia en la vulnerabilidad, exposición y la resiliencia, como podemos apreciar en la siguiente ecuación que propone la Estrategia Internacional para la Reducción de Desastres de las Naciones Unidas, la resiliencia es un denominador para la determinación del Riesgo de Desastre, por tanto a medida que tenemos mayor resiliencia, menor será la magnitud del riesgo de desastre.
	  </p>
	  <p class='text-justify'>
		<b>¿Qué significa ser resiliente?</b>
	  </p>
	  <p class='text-justify'>
		La resiliencia se entiende como la capacidad de recuperación, ya sea de una especie, de poblaciones, comunidades, ecosistemas, biomas hasta la biósfera, de alguna anomalía que afecta su normalidad. Corresponde a la cantidad de gasto energético que se requiere para regresar al estado normal. Si consideramos esto en la población, esto está dado principalmente por las estrategias que podamos definir para lograr esto en el menor tiempo posible y de la forma más eficiente en el gasto energético, que se traduce en costos monetarios principalmente.
	  </p>
	  <h4 id='l381' class='text-justify'>3.8.1 Campañas y educación en torno al riesgo: medidas  no estructurante para la preparación ante la emergencia  </h4>
	  <p class='text-justify'>
		El Plan Familia Preparada es un conjunto de orientaciones y recomendaciones para la comunidad, que invita a todos los miembros de una familia a trabajar en su seguridad y a estar mejor preparados para una emergencia.
	  </p>
	  <p class='text-justify'>
		Dicho plan consta de ocho pasos, entre los cuales se incluye realizar una lista con la información relevante del grupo familiar (por ejemplo, su condición médica); evaluar los eventuales riesgos del sector donde se vive; establecer un plan de evacuación y prever las medidas para ejecutarlo, además de establecer un punto de encuentro familiar en caso de que la emergencia ocurra cuando los integrantes de la familia no estén en su casa. Además, el plan recomienda que cada hogar cuente con una mochila que contenga elementos de utilidad en caso de emergencias.
	  </p>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-facetime-video'></span> VIDEO
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				Revisa el siguiente VIDEO conoce los pasos para la elaboración de un plan.
			</p>
			<div class="embed-responsive embed-responsive-16by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/jtYB3HFaEvc?rel=0" allowfullscreen></iframe>
		</div>
		</div>
	  </div>
	  <div class='panel panel-rosado'>
		<div class='panel-heading'>
			<span class='glyphicon glyphicon-pencil'></span> ACTIVIDAD
		</div>
		<div class='panel-body '>
			<p class='text-justify'>
				Elabora el plan de famila preaparada, para ello sigue las instrucciones del manual que está alojado en el siguiente <u><a target="_blank" href="http://familiapreparada.cl/"><b>enlace</b></a></u>
			</p>
		</div>
	  </div>
	  <p class='text-justify'>
		A continuación se exponen las campañas de preparación que dispone ONEMI para cada tipo de riesgo presente en el país:
	  </p>  
	 <div class='panel panel-rosado'>
		<div class='panel-body '>
			 <div class="row text-center">
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1715/ALUVIONES.pdf" class="btn btn-cafe">Aluviones</a>
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1713/ERUPCIONES.pdf" class="btn btn-danger">Erupciones</a>
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1711/TSUNAMI.pdf?sequence=6?sequence=1" class="btn btn-info">Tsunami</a>
	  </div>
	  <br>
	  <div class="row text-center">
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1763/SISMOS.pdf?sequence=3" class="btn btn-success">Sismos</a>
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1764/INCENDIOS_ESTRUCTURALES.pdf" class="btn btn-primary">Incendios estructurales</a>
		  <a target="_blank" href="http://repositoriodigitalonemi.cl/web/bitstream/handle/2012/1712/FORESTALES.pdf" class="btn btn-warning">Forestales</a>
      </div>
		</div>
	  </div>
	  
	  <p class="text-right"><br><button id="fin" class="btn btn-rosado" role="button"><span class="glyphicon glyphicon-star"></span> Finalizar curso</button></p>
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
      $("#ir-volver").on("click", function(){
         window.location.href = "../aula/volcanismo_en_chile";
      });
	  document.getElementById("ir-home").addEventListener("click", function(){
         window.location.href = "/";
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
				case 8:
					select1 = document.getElementById("ocho-alt1").checked;
					select2 = document.getElementById("ocho-alt2").checked;
					select3 = document.getElementById("ocho-alt3").checked;
					
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
					pregunta = 8;
					break;				
				case 9:
					select1 = document.getElementById("nueve-alt1").checked;
					select2 = document.getElementById("nueve-alt2").checked;
					select3 = document.getElementById("nueve-alt3").checked;
					
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
					pregunta = 9;
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

	  
		  $("button#btn-respuesta").click(function (event) { 		 	
			aObject = event.currentTarget;
			switch($(aObject).data("number")) {
				case 15:
					var aviso = document.getElementById("aviso15");
					text = document.getElementById("respuesta15").value;
					pregunta = 15;
			}
			if (text.length >= 15 && text.length <= 140){	
				 aviso.innerHTML = '';			
				 $("#titulo").html('<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Punto de Encuentro');
				 $("#mensaje").html('¿Quieres compartir tu respuesta en el Punto de Encuentro antes de enviar?');
				 $("#aceptar-mnsje").off();
				 $("#aceptar-mnsje").removeClass('btn-primary').addClass('btn-default');
				 $("#aceptar-mnsje").html('No, sólo enviar la respuesta');
				 $("#aceptar-mnsje").on("click", function(){
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
						
						$("#mensaje-error").html('<p>Tu respuesta no se guardo correctamente.<br>Por favor intenta más tarde.</p>');
						$("#modal-error").modal('show');	
					})
					.done(function( data ){		
						$("#modal-mensaje").modal('hide');
						$("#aceptar-mnsje").prop('disabled', false);
						$("#publicar-respuesta").prop('disabled', false);						
					    $("#publicar-respuesta").remove();
					    $("#aceptar-mnsje").html('Aceptar');
						$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');

						$("#mensaje-bien").html('<p>Tu respuesta se guardo correctamente.</p>');
						$("#modal-bien").modal('show');					
						$("#aceptar-bien").on("click", function(){
							location.reload();
						});						 
					});
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
						
						$("#mensaje-error").html('<p>Tu respuesta no se guardo correctamente y tampoco se compartio en el Punto de Encuentro.<br>Por favor intenta más tarde.</p>');
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
							
							$("#mensaje-error").html('<p>Tu respuesta se guardo correctamente, pero no se pudo compartir en el Punto de Encuentro.</p>');
							$("#modal-error").modal('show');		
						})
						.done(function( data ){
							$("#modal-mensaje").modal('hide');
							$("#aceptar-mnsje").prop('disabled', false);
							$("#publicar-respuesta").prop('disabled', false);						
							$("#publicar-respuesta").remove();
							$("#aceptar-mnsje").html('Aceptar');
							$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');

							$("#mensaje-bien").html('<p>Tu respuesta se guardo correctamente y fue compartida en el Punto de Encuentro.</p>');
							$("#modal-bien").modal('show');					
							$("#aceptar-bien").on("click", function(){
								location.reload();
							});				
						}); 					
					});
				}); 
				 $("#modal-mensaje").on('hidden.bs.modal', function (e){
					$("#publicar-respuesta").remove();
					$$("#modal-mensaje").off();
					$("#aceptar-mnsje").html('Aceptar');
					$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');					
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

			$("button#btn-compartir").on("click", function(){
				  text = "Video sobre las medidas de mitigación ante una erupciones volcánicas. Volcanismo: Lección 3.";
				  url = document.getElementById("url").value;
				  pregunta = 17;
				  if(url.length > 32 && url.substring(0, 32) == "https://www.youtube.com/watch?v="){
					  $("#titulo").html('<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Punto de Encuentro');
					  $("#mensaje").html('El video se publicará en tu muro.');		  
					  $("#aceptar-mnsje").off();		  
					  $("#aceptar-mnsje").removeClass('btn-primary').addClass('btn-default');
					  $("#aceptar-mnsje").html('Espera, déjame corregir');
					  $("#aceptar-mnsje").on("click", function(){
						$("#modal-mensaje").modal('hide');
						$("#publicar-respuesta").remove();
						$("#aceptar-mnsje").html('Aceptar');
						$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');		  
					  });
					  $("#botones-mensaje").append('<button type="button" class="btn btn-primary" id="publicar-respuesta">Compartir video</button>');
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
							
							$("#mensaje-error").html('<p>El video no se pudo compartir en el Punto de Encuentro.<br>Por favor intenta más tarde.</p>');
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
								
								$("#mensaje-error").html('<p>El video no se pudo compartir en el Punto de Encuentro.<br>Por favor intenta más tarde.</p>');
								$("#modal-error").modal('show');		
							})
							.done(function( data ){
								$("#modal-mensaje").modal('hide');
								$("#aceptar-mnsje").prop('disabled', false);
								$("#publicar-respuesta").prop('disabled', false);						
								$("#publicar-respuesta").remove();
								$("#aceptar-mnsje").html('Aceptar');
								$("#aceptar-mnsje").removeClass('btn-default').addClass('btn-primary');

								$("#mensaje-bien").html('<p>El video se compartio correctamente en el Punto de Encuentro.</p>');
								$("#modal-bien").modal('show');					
								$("#aceptar-bien").on("click", function(){
									location.reload();
								});				
							}); 					
						});
					  });
					  $("#modal-mensaje").modal('show');			   
				  }else{
					  $("#mensaje-error").html('<p>EL video no respeta el formato <em>"https://www.youtube.com/watch?v=33dsrr433"</em>, intenta con otro.</p>');
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
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Fases del ciclo del riesgos de desastre');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_1.png" class="img-responsive center-block" alt="1"><p><small>Fuente: KimGen LAB, 2017.</small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-2").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Organigrama del Sistema de Protección Civil');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_2.png" class="img-responsive center-block" alt="2"><p><small>Fuente: Gobierno de Chile, Ministerio del Interior y Seguridad Pública.</small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-3").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Metodologías para la elaboración de un plan de emergencia');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_3.png" class="img-responsive center-block" alt="3"><p><small>Fuente: Gobierno de Chile.</small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-4").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Centro de Alerta Temprana (CAT) ');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_4.png" class="img-responsive center-block" alt="4"><p><small>Fuente: </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-5").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Red Nacional de vigilancia Volcánica del SERNAGEOMIN');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_5.png" class="img-responsive center-block" alt="5"><p><small>Fuente: </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#img-6").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Niveles de Alerta Volcánica del SERNAGEOMIN');
		$("#mensaje-video").html('<img src="<?php echo Config::get('URL'); ?>img/aula/riesgos/3_6.png" class="img-responsive center-block" alt="6"><p><small>Fuente: SERNAGEOMIN, 2016. </small></p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
      
	  /* POP-UP Norma*/
	  $("#norma-1").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley 7727 de 1943. Fondo de Estabilización Económica (2% Constitucional)');
		$("#mensaje-video").html('<p class="text-justify">Permite al Presidente dictar Decretos de Emergencia Económica posibilitando al gobierno gastar hasta un 2% del presupuesto anual en aspectos relacionados con una emergencia, necesidades derivadas de calamidades públicas que no pueden ser pospuestas, o servicios que no pueden cerrar sin causar daño al país. El Fondo ha sido invocado luego de cada gran desastre luego de 1943.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-2").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Decreso Supremo 26 de 1966, Ministerio de Defensa. ');
		$("#mensaje-video").html('<p class="text-justify">Designa al Servicio Hidrográfico y Oceanográfico de la Armada (SHOA) como representante en el Pacific Tsunami Warning Center (PTWC).</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-3").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;D.L. 369 1974 crea la ONEMI');
		$("#mensaje-video").html('<p class="text-justify">Crea la Oficina Nacional de Emergencia del Ministerio del Interior y Seguridad Pública, el D.S. 509 de 1974 Aprueba Reglamento ONEMI. Establece el reglamento para la aplicación del D.L. Nº369 de1974.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-4").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley 16282 de 1965');
		$("#mensaje-video").html('<p class="text-justify">Fija disposiciones para casos de sismos o catástrofes. Establece que el Presidente puede definir un área como “zona de catástrofe” y, en esta área, le da atribuciones para gobernar por medio de decretos de excepción. </p><p class="text-justify">Estas normas deben estar orientadas a resolver problemas de las comunidades afectadas o a hacer la ayuda más eficiente. Además de lo anterior la ley regula el comercio luego de una catástrofe, penalizando a quien especule con bienes de primera necesidad o recurra a acumularlos. La norma también define quien es una víctima de un desastre como cualquiera que haya sufrido un daño considerable debido a la catástrofe. Bajo esta norma, el Presidente puede incluso abolir impuestos en el área designada, aunque solo momentáneamente. Finalmente, la ley permite al gobierno usar el ejército para mantener orden en la zona afectada.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-5").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley 18.415 de 1985 Ley Orgánica Constitucional sobre Estados de Excepción Constitucional');
		$("#mensaje-video").html('<p class="text-justify">Permite al Presidente aplicar estado de excepción en una situación de emergencia y calamidad pública, donde se ven sobrepasadas las capacidades de las autoridades para proveer el orden y la seguridad.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-6").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley y Ordenanza General de Urbanismo y Construcciones, Decretos Supremos 458 y 47 1992');
		$("#mensaje-video").html('<p class="text-justify">Esta ley establece que los instrumentos de planificación territorial, en específico los planes reguladores comunales y los planes reguladores intercomunales en su elaboración deben desarrollar estudios de riesgos y dependiendo de la peligrosidad de las amenazas naturales el estudio debe proponer zonas no edificables o de edificación restringida. Sin embargo, las normas son prospectivas es decir no operan bajo lo que ya se ha construido, de modo que existen numerosos asentamientos humanos ubicados en zonas de riesgo producto del  interés inmobiliario por ejemplo el desarrollo urbano en el borde costero  o también por la ocupación ilegal de terrenos por población vulnerable.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-7").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Norma Chilena para el diseño sísmico de edificios (NCh433 46 del año 1996)');
		$("#mensaje-video").html('<p class="text-justify">Establece los requisitos mínimos para el diseño sísmico de edificios, así como exigencias sísmicas que deben cumplir los equipos y otros elementos secundarios de edificios. Se incluyen recomendaciones sobre la evaluación del daño sísmico y su reparación. También zonifica el territorio nacional, estableciendo estándares diferenciados de diseño. </p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-8").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Decreto N° 156 de año 2002 Aprueba el Plan Nacional de Protección Civil');
		$("#mensaje-video").html('<p class="text-justify">Su principal objetivo es disponer de una planificación multisectorial en materia de Protección Civil, su carácter es indicativo,  siendo su objetivo general “el desarrollo de acciones permanentes para la prevención y atención de emergencias y/o desastres  en el país, a partir de una visión integral de manejo de riesgos”. Entre sus objetivos específicos dispone las responsabilidades del Sistema de Protección Civil, a través de los comités de protección civil, en cada una de las etapas del ciclo de manejo del riesgo. Además normaliza los elementos básicos a considerar en los planes de respuestas ante situaciones de emergencia, en específico los planes de emergencia, disponiendo para ello algunas metodologías como el AIDEP, ACCEDER, PLAN DEDO$, entre otros.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-9").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley Orgánica Constitucional 19.175 del año 2005 ');
		$("#mensaje-video").html('<p class="text-justify">sobre Gobiernos Regionales y Administración Regional. Asigna a los Intendentes y Gobernadores la función de adoptar medidas para prevenir y enfrentar situaciones de emergencia. </p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-10").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley Orgánica Constitucional de Municipalidades, Nº 18.965 del año 2006');
		$("#mensaje-video").html('<p class="text-justify">Indica que estas entidades pueden desarrollar funciones relacionadas con la prevención de riesgos y respuesta en situaciones de emergencia. </p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-11").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;D.S. 68 del 2009, Ministerio del Interior');
		$("#mensaje-video").html('<p class="text-justify">Establece un sistema de coordinación permanente de procesos de monitoreo sísmico y volcánico. </p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-12").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Ley 20.444 del 2010 Fondo Nacional de Reconstrucción y donaciones');
		$("#mensaje-video").html('<p class="text-justify">Establece mecanismos de incentivo tributario a las donaciones efectuadas en caso de catástrofes.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  $("#norma-13").on("click", function(){
		$("#titulo-video").html('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;D.S. 38 del 2011 Constitución del Comité de Operaciones de Emergencias COE');
		$("#mensaje-video").html('<p class="text-justify">Determina la constitución del Comité de Operaciones de Emergencia COE. Los COE son una institución colegiada, con funciones técnico ejecutivas que se constituye en caso de Emergencia. Según sea las características y magnitud de la emergencia se constituirá a nivel nacional, regional, provincial o comunal. Su labor es planificar y coordinar intersectorialmente las acciones de respuesta y rehabilitación temprana o de corto plazo en la zona afectada.</p>');
		$("#continuar-video").off();
		$("#continuar-video").html('Aceptar');
		$("#continuar-video").on("click", function(){
		  $("#modal-video").modal('hide');
		  $("#continuar-video").html('Continuar con el curso');
		});
		$("#modal-video").modal('show');
	  });
	  
	/* Evaluacion final*/
	  $("#fin").on("click", function(){
		<?php if($this->progreso_anterior >= 100 && !$this->evaluacionfinal){ ?>
			 $("#titulo-bien").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Curso de riesgos naturales completado');
			 $("#mensaje-bien").html('<h3>¡Felicidades!</h3><br><p class="text-justify">Has completado safisfactoriamente el curso de riesgos naturales, te invitamos a resolver la evalución final para obtener el certificado del curso.</p>');
			 $("#aceptar-bien").off();
			 $("#aceptar-bien").removeClass('btn-success').addClass('btn-default');
			 $("#aceptar-bien").html('No gracias, en otro momento.');
			 $("#aceptar-bien").on("click", function(){
				$("#modal-bien").modal('hide');						
				$("#publicar-respuesta").remove();
				$("#aceptar-bien").html('Aceptar');
				$("#aceptar-bien").removeClass('btn-default').addClass('btn-success');
			 });
			 $("#botones-bien").append('<button type="button" class="btn btn-success" id="publicar-respuesta">Ir a evaluación</button>');
			 $("#publicar-respuesta").on("click", function(){
				$("#modal-bien").modal('hide');						
				$("#publicar-respuesta").remove();
				$("#aceptar-bien").html('Aceptar');
				$("#aceptar-bien").removeClass('btn-default').addClass('btn-success');
				window.location.href = "<?php echo Config::get('URL'); ?>aula/riesgos_naturales_evaluacion_final";
			 }); 
			 $("#modal-bien").on('hidden.bs.modal', function (e){
				$("#publicar-respuesta").remove();
				$$("#modal-bien").off();
				$("#aceptar-bien").html('Aceptar');
				$("#aceptar-bien").removeClass('btn-default').addClass('btn-success');					
			 });
			 $("#modal-bien").modal('show');
	  <?php } else {?>
		<?php if($this->evaluacionfinal){ ?>
		  $("#titulo-error").html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;Evaluación final curso de riesgos naturales completado');
		  $("#mensaje-error").html('<p class="text-justify">Lo sentimos, ya realizaste la evaluación final.</p>');
		  $("#modal-error").modal('show');
		<?php } else {?>
		  $("#titulo-error").html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;Curso de riesgos naturales imcompleto');
		  $("#mensaje-error").html('<p class="text-justify">Para completar satisfactoriamente el curso debes desarrollar el 100% de las actividades y evaluaciones disponible.</p>');
		  $("#modal-error").modal('show');
	  <?php   }
			}	  ?>
	});
	
	 /* Pop-up Glosario */
      $("#glosario-1").on("click", function(){
        $("#titulo-video").html('<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;&nbsp;Ley de Gestión de Riesgo de Desastres');
        $("#mensaje-video").html('<p class="text-justify"> Actualmente en discusión en el congreso, esta nueva ley constituirá el nuevo “Sistema Nacional de Gestión de Riesgo y Emergencia”.<br>El sistema estaría compuesto principalmente por 3 nuevas instituciones:<br>-Servicio Nacional de Gestión de Riesgos y Emergencias (Ex-ONEMI).<br>-Comité de Ministros para la Gestión de Riesgos y Emergencias.<br>-Comisión  Consultiva de Gestión de Riesgos y Emergencias.</p>');
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