<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" id="cuerpo">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NetworkConcepts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>
	<script src="js/letra.js"></script>
	<script src="js/sonidos.js"></script>
	
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/carrousell.css" rel="stylesheet" type="text/css">
	
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="css/estiloZoom.css" rel="stylesheet" type="text/css">
	
	
	
	
	<meta name="keywords" content="VideoLightBox, LightBox, Video Gallery, video html, html video player" />
		<meta name="description" content="VideoLightBox Gallery created with VideoLightBox, a free wizard program that helps you easily generate beautiful Lightbox-style web video galleries" />
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- Start VideoLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_videolb/videolightbox.css" type="text/css" />
		
			<link rel="stylesheet" type="text/css" href="index_videolb/overlay-minimal.css"/>
			<script src="index_videolb/jquery.js" type="text/javascript"></script>
			<script src="index_videolb/swfobject.js" type="text/javascript"></script>

	
	<title>NetworkConcepts</title>
	
	<script>
	 function deshabilita(){
		document.getElementById('FechaRegreso').disabled = true;
	}

	function habilita(){
		document.getElementById('FechaRegreso').disabled = false;
	}
	</script>
  

</head>

	<body background="imagenes/net.jpg">
	<div STYLE="position:absolute; top:20px; left:130px; width:1100px;">
	
		<nav  class = "navbar navbar-default navbar-static-top" role="navigation" > 
						<div  class= "container.fixed"> 
							
									<img style=" margin-top: -1px; "
									src="imagenes/bannner.png"  /> 
								<br>	
						</div> 
		</nav>
		
	    
				
				
		<div STYLE="position:relative; top:10px; left:-14px; width:1050px;">
		
		<div class="col-lg-6">
			<a onClick="accesibiliza()" class="btn">Contraste</a>
			<a href="javascript:decreaseFontSize();" class="btn">Disminuir el Tamano A-</a> 
			<a href="javascript:increaseFontSize();" class="btn">Aumentar el Tamano A+</a>
		
		</div>	
		</div>	
		
<div class="col-lg-3"> 
		<div class="input-group" STYLE="position:relative; top:10px; left:390px;" >
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right" class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()">
			<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
			</form>
		  </span>
		</div><!-- /input-group -->
		</div>
		
		<div class="row">
                 		<section class="posts col-md-12" STYLE=" top:20px; left:1px;">
                 				<ol class="breadcrumb">
                 					<li>
             					       <a href="principal.php"><small>Inicio</small></a> 
             				       </li>
             				       <li class="active"><small>Capitulo 7</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:350px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b> 7. Capa de Enlace de Datos </b></h3></font>
							 <br>
							 <h4 align="justify"> <font color="#000080" ><b>Definición</b></h4></font>
							 <br>
								La capa de enlace de datos es aquella que proporciona un medio para intercambiar datos a través de medios 
								locales comunes. La Capa de enlace de datos prepara un paquete para transportar a través de los medios 
								locales encapsulándolo con un encabezado y un tráiler para crear una trama.
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Funciones</b></h4></font>
							<br>
							    La capa de enlace de datos realiza dos servicios básicos:
							<br>
							<br>
							<ul type="disk">
								<li> Permite a las capas superiores acceder a los medios usando técnicas, como tramas.</li>
								<li> Controla cómo los datos se ubican en los medios y son recibidos desde los medios 
								     usando técnicas como control de acceso a los medios y detección de errores.</li>
							</ul>
							
							<br>
                                Como con cada una de las capas OSI, existen términos específicos para esta capa
							<br>
							<br>
							<b>Trama:</b> el PDU de la capa de enlace de datos, la cual incluye:
							<br>
							<br>
							<ul type="disk">
								<li><b>Datos:</b> El paquete desde la Capa de red.</li>
								<li><b>Encabezado:</b> contiene información de control como direccionamiento y está ubicado al comienzo del PDU.</li>
								<li><b>Tráiler:</b> contiene información de control agregada al final del PDU.</li>
							</ul>
							<br>
								<b>Nodo:</b> la notación de la Capa 2 para dispositivos de red conectados a un medio común.
							<br>
							<br>
								<b>Medios/medio (físico)*:</b> los medios físicos para la transferencia de información entre dos nodos.
							<br>
							<br>
								<b>Red (física)**:</b> dos o más nodos conectados a un medio común.
							<br>
							<br>	
								La capa de enlace de datos es responsable del intercambio de tramas entre nodos a través de los 
								medios de una red física.
							<br>
							<br>
							    *Es importante comprender el significado de las palabras medio y medios en el contexto de este capítulo.
								Aquí, estas palabras se refieren al material que realmente transporta las señales que representan los 
								datos transmitidos. Los medios son el cable de cobre, la fibra óptica físicos o el entorno a través de 
								los cuales la señal viaja. En este capítulo, medios no se refiere a programación de contenido tal como 
								audio, animación, televisión y video, como se utiliza al referirse a contenidos digitales y multimedia.
							<br>
							<br>
							    **Una red física es diferente de una red lógica. Las redes lógicas se definen en la capa de red mediante 
								la configuración del esquema de direccionamiento jerárquico. Las redes físicas representan la 
								interconexión de dispositivos de medios comunes. Algunas veces, una red física también es llamada segmento 
								de red.
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Subcapas de Enlace de Datos</b></h4></font>
							<br>
							
								Para sostener una gran variedad de funciones de red, la capa de enlace de datos a menudo se divide en dos 
								subcapas: una subcapa superior y una subcapa inferior.
							<br>
							<br>
							<ul type="disk">
								<li>La subcapa superior define los procesos de software que proveen servicios a los Protocolos de capa de red.</li> 
								<li>La subcapa inferior define los procesos de acceso a los medios realizados por el hardware.</li> 
							</ul> 
							<br>
							
							Separar la Capa de enlace de datos en subcapas permite a un tipo de trama definida por la capa superior acceder a 
							diferentes tipos de medios definidos por la capa inferior. Tal es el caso en muchas tecnologías LAN, incluida Ethernet.
							Las dos subcapas comunes de LAN son: 
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Control de Enlace Lógico</b></h4></font> 
							<br>
							El control de enlace lógico (LLC) coloca información en la trama que identifica qué protocolo de capa de red está siendo
							utilizado por la trama. Esta información permite que varios protocolos de la Capa 3, tales como IP e IPX, utilicen la 
							misma interfaz de red y los mismos medios. 
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Control de Acceso al Medio</b></h4></font>
							<br>
							El control de acceso al medio (MAC) proporciona a la capa de enlace de datos el direccionamiento y la delimitación de 
							datos de acuerdo con los requisitos de señalización física del medio y al tipo de protocolo de capa de enlace de datos 
							en uso. 
							<br>
							<br>
							En cualquier intercambio de paquetes de capas de red, puede haber muchas transiciones de medios y capa de enlace de datos.
							En cada salto a lo largo de la ruta, un dispositivo intermediario, generalmente un router, acepta las tramas de un medio, 
							desencapsula la trama y luego envía el paquete a una nueva trama apropiada para los medios de tal segmento de la red física. 
							<br>
							<br>
							Observe en el video que cada enlace entre dispositivos utiliza un medio diferente. Entre la PC y el router puede haber un 
							enlace Ethernet. Los routers están conectados a través de un enlace satelital y la computadora portátil está conectada a 
							través de un enlace inalámbrico al último router. En este ejemplo, como un paquete IP viaja desde la PC hasta la computadora 
							portátil, será encapsulado en la trama Ethernet, desencapsulado, procesado y luego encapsulado en una nueva trama de enlace 
							de datos para cruzar el enlace satelital. Para el enlace final, el paquete utilizará una trama de enlace de datos inalámbrica 
							desde el router a la computadora portátil.
							<br>
							<br>
							La capa de enlace de datos aísla de manera efectiva los procesos de comunicación en las capas superiores desde las transiciones
							de medios que pueden producirse de extremo a extremo. Un paquete se recibe de un protocolo de capa superior y se dirige a éste, 
							en este caso IPv4 o IPv6, que no necesita saber qué medio de comunicación utilizará. 
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Estándares</b></h4></font>
							<br>
							A diferencia de los protocolos de las capas superiores del conjunto TCP/IP, los protocolos de capa de enlace de datos 
							generalmente no están definidos por solicitudes de comentarios (RFC). A pesar de que el Grupo de trabajo de ingeniería 
							de Internet (IETF) mantiene los protocolos y servicios funcionales para la suite de protocolos TCP/IP en las capas 
							superiores, la IETF no define las funciones ni la operación de esa capa de acceso a la red del modelo. La capa de acceso 
							de red TCP/IP es el equivalente de las capas de enlace de datos OSI y la física. Estas dos capas se verán en capítulos 
							separados para un análisis más detallado.
							<br>
							<br>
							Los servicios y especificaciones de la capa de enlace de datos se definen mediante varios estándares basados en una variedad 
							de tecnologías y medios a los cuales se aplican los protocolos. Algunos de estos estándares integran los servicios de la Capa
							2 y la Capa 1.
							<br>
							<br>
							Las organizaciones de ingeniería que definen estándares y protocolos abiertos que se aplican a la capa de enlace de datos incluyen:
							<br>
							<br>
						<ul type="disk">
							<li>Organización Internacional para la Estandarización (ISO).</li>
							<li>Instituto de Ingenieros Eléctricos y Electrónicos (IEEE).</li>
							<li>Instituto Nacional Estadounidense de Estándares (ANSI).</li>
							<li>Unión Internacional de Telecomunicaciones (ITU).</li>
						</ul>

							
							
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-5" style="width:495px; " >
			
						<div class="row ">
						
							<div class="videogallery" >
								<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/video_1448750478.mp4" title="Video: Capa de Enlace de Datos"><img src="index_videolb/thumbnails/video_1448750478.png" alt="video_1448750478" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">html video</a> by VideoLightBox.com v3.1</span>
							</div>
												
						    <div class="col-lg-12" style="top:8px; width:528px; left:-15px;" >
								 <div class="panel panel-info" style="text-align: justify; "    >
									<small><b>Descripción del Video:</b> este video muestra cómo la Capa de enlace de Datos adecúa un mensaje con respecto a los medios.</small> 
								 </div>
						    </div>		<!-- Start VideoLightBox.com HEAD section 
									<video controls class="img-responsive" style="width:500px; " >
									<source src="video/ahora.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'  >
									
									</video>-->									
			            </div>	
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-40px;  margin-bottom: -100px;" >	
	
		<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous"><a class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo6.php"><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo8.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="diccionario.pdf"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
	<!-- End VideoLightBox.com BODY section -->
	</body>
</html>