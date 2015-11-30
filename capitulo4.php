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
		<div class="input-group" STYLE="position:relative; top:10px; left:315px;" >
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right">
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
             				       <li class="active"><small>Capitulo 4</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:350px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b> 4. Capa de Transporte del Modelo OSI  </b></h3></font>
							 <br>
							  <h3 align="justify"> <font color="#000080" ><b>Definición</b></h3></font>
							  <br>
								La capa de Transporte es aquella que permite la segmentación de datos y brinda el control necesario para reensamblar las partes dentro 
								de los distintos streams de comunicación. 
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Funciones</b></h3></font>
							<br>	
							    Las responsabilidades principales que debe cumplir son:
							<br>
							<br>
							<ul type="disk">
								<li> Seguimiento de la comunicación individual entre aplicaciones en los hosts origen y destino,</li>
								<li> Segmentación de datos y gestión de cada porción,</li>
								<li> Reensamble de segmentos en flujos de datos de aplicación, e</li>
								<li> Identificación de las diferentes aplicaciones.</li>
							</ul>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Seguimiento de Conversaciones Individuales</b></h3></font>
							<br>
							Cualquier host puede tener múltiples aplicaciones que se están comunicando a través de la red. Cada una de 
							estas aplicaciones se comunicará con una o más aplicaciones en hosts remotos. Es responsabilidad de la capa
							de Transporte mantener los diversos streams de comunicación entre estas aplicaciones.   
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Segmentación de Datos</b></h3></font>
							<br>
							Debido a que cada aplicación genera un stream de datos para enviar a una aplicación remota, estos datos deben 
							prepararse para ser enviados por los medios en partes manejables. Los protocolos de la capa de Transporte 
							describen los servicios que segmentan estos datos de la capa de Aplicación. Esto incluye la encapsulación 
							necesaria en cada sección de datos. Cada sección de datos de aplicación requiere que se agreguen encabezados 
							en la capa de Transporte para indicar la comunicación a la cual está asociada. 
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Reensamble de segmentos</b></h3></font>
							<br>
							En el host de recepción, cada sección de datos puede ser direccionada a la aplicación adecuada. Además, estas 
							secciones de datos individuales también deben reconstruirse para generar un stream completo de datos que sea 
							útil para la capa de Aplicación. Los protocolos de la capa de Transporte describen cómo se utiliza la información 
							de encabezado de dicha capa para reensamblar las secciones de datos en streams y enviarlas a la capa de Aplicación.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Identificación de las aplicaciones</b></h3></font>
							<br>
							Para poder transferir los streams de datos a las aplicaciones adecuadas, la capa de Transporte debe identificar la 
							aplicación de destino. Para lograr esto, la capa de Transporte asigna un identificador a la aplicación. Los protocolos 
							TCP/IP denominan a este identificador número de puerto. A todos los procesos de software que requieran acceder a la 
							red se les asigna un número de puerto exclusivo en ese host. Este número de puerto se utiliza en el encabezado de la 
							capa de Transporte para indicar con qué aplicación está asociada esa sección de datos.
							<br>
							<br>
							La capa de Transporte es el enlace entre la capa de Aplicación y las capas inferiores, que son responsables de la 
							transmisión en la red. Esta capa acepta datos de distintas conversaciones y los transfiere a las capas inferiores
							como secciones manejables que puedan ser eventualmente multiplexadas a través del medio.
							<br>
							<br>
							Algunos protocolos proporcionan sólo las funciones básicas para la entrega eficiente de las secciones de datos entre 
							las aplicaciones adecuadas. Estos tipos de protocolos son útiles para aquellas aplicaciones cuyos datos son sensibles 
							a las demoras.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Propósito de la Capa de Transporte</b></h3></font>
							<br>
							<b>Proposito:</b> separación de comunicaciones múltiples.
							<br>
							<br>
							La división de los datos en partes pequeñas y el envío de estas partes desde el origen hacia el destino permiten que se
							puedan entrelazar (multiplexar) distintas comunicaciones en la misma red. 
							<br>
							<br>
							La segmentación de los datos, que cumple con los protocolos de la capa de Transporte, proporciona los medios para enviar 
							y recibir datos cuando se ejecutan varias aplicaciones de manera concurrente en una computadora. Sin segmentación, sólo
							una aplicación, la corriente de vídeo por ejemplo, podría recibir datos. No se podrían recibir correos electrónicos, 
							chats ni mensajes instantáneos ni visualizar páginas Web y ver un vídeo al mismo tiempo.
							<br>
							<br>
							En la capa de Transporte, cada conjunto de secciones en particular que fluyen desde una aplicación de origen a una de 
							destino se conoce como conversación.
							<br>
							<br>
							Para identificar todos los segmentos de datos, la capa de Transporte agrega un encabezado a la sección que contiene datos 
							binarios. Este encabezado contiene campos de bits. Son los valores de estos campos los que permiten que los distintos 
							rotocolos de la capa de Transporte lleven a cabo las diversas funciones.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Protocolos </b></h3></font>
							<br>
							Los dos protocolos más comunes de la capa de Transporte del conjunto de protocolos TCP/IP son el Protocolo de control de 
							transmisión (TCP) y el Protocolos de datagramas de usuario (UDP). Ambos protocolos gestionan la comunicación de múltiples 
							aplicaciones. Las diferencias entre ellos son las funciones específicas que cada uno implementa. 
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Protocolo de datagramas de usuario (UDP) </b></h3></font>
							<br>
							UDP es un protocolo simple, sin conexión, descrito en la RFC 768. Cuenta con la ventaja de proveer la entrega de datos sin 
							utilizar muchos recursos. Las porciones de comunicación en UDP se llaman datagramas. Este protocolo de la capa de Transporte 
							envía estos datagramas como "mejor intento". 
							<br>
							<br>
							Entre las aplicaciones que utilizan UDP se incluyen:
							<br>
							<br>
							<ul type="disk">
								<li>Sistema de Nombres de Dominios (DNS),</li>
								<li>Streaming de vídeo, y</li>
								<li>Voz sobre IP (VoIP).</li>
							</ul>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Protocolo de control de transmisión (TCP) </b></h3></font>
							<br>
							TCP es un protocolo orientado a la conexión, descrito en la RFC 793. TCP incurre en el uso adicional de recursos para agregar 
							funciones. Las funciones adicionales especificadas por TCP están en el mismo orden de entrega, son de entrega confiable y de 
							control de flujo. Cada segmento de TCP posee 20 bytes de carga en el encabezado, que encapsulan los datos de la capa de Aplicación,
							mientras que cada segmento UDP sólo posee 8 bytes de carga. Ver la figura para obtener una comparación.
							<br>
							<br>
							Las aplicaciones que utilizan TCP son:
							<br>
							<br>
							<ul type="disk">
								<li>Exploradores Web,</li>
								<li>E-mail, y</li>
								<li>Transferencia de archivos.</li>
							</ul>
							
								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-5" style="width:495px; " >
			
						<div class="row ">
						
							<div class="videogallery" >
								<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/capa_de_transporte.mp4" title="Video: Capa de Transporte"><img src="index_videolb/thumbnails/capa_de_transporte.png" alt="capa_de_transporte" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">html video</a> by VideoLightBox.com v3.1</span>
							</div>
												
						    <div class="col-lg-12" style="top:8px; width:528px; left:-15px;" >
								 <div class="panel panel-info" style="text-align: justify; "    >
									<small><b>Descripción del Video:</b> este video explica la funcionalidad de la capa de transporte. </small> 
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
    <li class="previous"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" href="capitulo3.php"><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" href="capitulo5.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()"><a href="#"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()"><a target="_blank" href="https://www.dropbox.com/s/zrjmlf4fug5xhtv/LaboratorioC4-Examen%20de%20los%20protocolos%20de%20las%20Capas%20de%20transporte%20y%20aplicaci%C3%B3n.pka?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" > Laboratorio</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()"><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()"><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
	<!-- End VideoLightBox.com BODY section -->
	</body>
</html>