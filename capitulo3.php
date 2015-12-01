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
		
	<div class="col-lg-2"> 
		<div class="input-group" STYLE="position:relative; top:10px; left:455px;" >
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right" class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()">
			<button class="btn btn-primary  btn-block" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
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
             				       <li class="active"><small>Capitulo 3</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:415px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b> 3. Protocolos y Funcionalidad de la Capa de Aplicación </b></h3></font>
							 <br>
							 <h4 align="justify"> <font color="#000080" ><b>Modelo OSI y Modelo TCP/IP</b></h4></font>
							<br>
							 El modelo de referencia de interconexión de sistemas abiertos es una representación abstracta en capas, creada como guía para 
							 el diseño del protocolo de red. El modelo OSI divide el proceso de networking en diferentes capas lógicas, cada una de las 
							 cuales tiene una única funcionalidad y a la cual se le asignan protocolos y servicios específicos. 
							<br>
							<br>
							En este modelo, la información se pasa de una capa a otra, comenzando en la capa de Aplicación en el host de transmisión,
							siguiendo por la jerarquía hacia la capa Física, pasando por el canal de comunicaciones al host de destino, donde la 
							información vuelve a la jerarquía y termina en la capa de Aplicación. 
							 <br>
							<br>
							Aunque el grupo de protocolos TCP/IP se desarrolló antes de la definición del modelo OSI, la funcionalidad de los protocolos de
							capa de aplicación de TCP/IP se adaptan aproximadamente a la estructura de las tres capas superiores del modelo OSI: Capas de 
							Aplicación, Presentación y Sesión.
							<br>
							<br>
							 <h4 align="justify"> <font color="#000080" ><b>Definición de la Capa de Aplicación</b></h4></font>
							<br>
							 La capa de Aplicación, Capa siete, es la capa superior de los modelos OSI y TCP/IP. Es la capa que proporciona la interfaz 
							 entre las aplicaciones que utilizamos para comunicarnos y la red subyacente en la cual se transmiten los mensajes. 
							<br>
							<br>
							Los protocolos de capa de aplicación se utilizan para intercambiar los datos entre los programas que se ejecutan en los hosts 
							de origen y destino. Existen muchos protocolos de capa de aplicación y siempre se desarrollan protocolos nuevos.
							<br>
							<br>
							De acuerdo al modelo TCP/IP la capa de aplicación esta comprendida por las capas de Presentacion y Sesion del modelo OSI, las 
							cuales se explican a continuacion:
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Capa de Presentación</b></h4></font>
							<br>
							La capa de Presentación tiene tres funciones primarias:
							<br>
							<br>
							<ul type="disk">
							<li>Codificación y conversión de datos de la capa de aplicación para garantizar que los datos del dispositivo de origen puedan ser 
							interpretados por la aplicación adecuada en el dispositivo de destino.</li>
							<li>Compresión de los datos de forma que puedan ser descomprimidos por el dispositivo de destino.</li>
							<li>Encriptación de los datos para transmisión y descifre de los datos cuando se reciben en el destino.</li>
							</ul>
							<br>
							Las implementaciones de la capa de presentación generalmente no se vinculan con una stack de protocolos determinada. Los 
							estándares para vídeos y gráficos son algunos ejemplos. Dentro de los estándares más conocidos para vídeo encontramos 
							QuickTime y el Grupo de expertos en películas (MPEG). 
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Capa de Sesión</b></h4></font>
							<br>
							Como lo indica el nombre de la capa de Sesión, las funciones en esta capa crean y mantienen diálogos entre las aplicaciones de 
							origen y destino. La capa de sesión maneja el intercambio de información para iniciar los diálogos y mantenerlos activos, y 
							para reiniciar sesiones que se interrumpieron o desactivaron durante un periodo de tiempo prolongado. 
							<br>
							<br>
							La mayoría de las aplicaciones, como los exploradores Web o los clientes de correo electrónico, incorporan la funcionalidad de 
							las capas 5, 6 y 7 del modelo OSI.
							<br>
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Protocolos de la Capa de Aplicación</b></h4></font> 
							<br>
							Los protocolos de capa de aplicación de TCP/IP más conocidos son aquellos que proporcionan intercambio de la información del 
							usuario. Estos protocolos especifican la información de control y formato necesaria para muchas de las funciones de comunicación 
							de Internet más comunes. Algunos de los protocolos TCP/IP son:
							<br>
							<br>
						<ul type="disk">
						<li> El protocolo Servicio de nombres de dominio (DNS, Domain Name Service) se utiliza para resolver nombres de Internet en 
							 direcciones IP.</li>
						<li> El protocolo de transferencia de hipertexto (HTTP, Hypertext Transfer Protocol) se utiliza para transferir archivos que 
							 forman las páginas Web de la World Wide Web.</li>
						<li>El Protocolo simple de transferencia de correo (SMTP) se utiliza para la transferencia de mensajes de correo y adjuntos.
							Telnet, un protocolo de emulación de terminal, se utiliza para proporcionar acceso remoto a servidores y a dispositivos 
							de red.</li>
						<li>El Protocolo de transferencia de archivos (FTP, File Transfer Protocol) se utiliza para la tansferencia interactiva de 
							archivos entre sistemas.</li>
						</ul>
						

							
							
							
											
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/A1.jpg" data-lightbox="galeria" data-title="Modelo OSI y TCP/IP"><img src="imagenes/A1.jpg" title="Modelo OSI y TCP/IP" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/A2.jpg" data-lightbox="galeria" data-title="Protocolos de la Capa de Aplicación"><img src="imagenes/A2.jpg" title="Protocolos de la Capa de Aplicación" class="img-thumbnail"   /></a>												
					</div>	
					
					
				</div>
				<br>
				<div class="col-sm-6" style=" left:-32px; top:-18px;">
				<div class="videogallery"  >
								<a  class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/video_1448847677.mp4" title="Video: Funcionamiento de la Capa de Aplicacion"><img src="index_videolb/thumbnails/video_1448847677.png" alt="capa_de_transporte" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">html video</a> by VideoLightBox.com v3.1</span>
							</div>
			</div>
			
			<div class="col-lg-12" style="top:-10px; width:528px; left:-30px;" >
								 <div class="panel panel-info" style="text-align: justify; "    >
									<small><b>Descripción del Video:</b> este video expone la funcionalidad de la capa de Aplicación a traves de la red subyacente. </small> 
								 </div>
						    </div>	
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-60px;  margin-bottom: -100px;" >	
	
		<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo2.3.3.php"><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo4.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="diccionario.pdf"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="https://www.dropbox.com/s/9xwutltvzsifyb6/LaboratorioC3-Uso%20de%20los%20Protocolos%20TCP-IP.pka?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" > Laboratorio</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
	<script src="js/lightbox.js"></script>	
	<!-- End VideoLightBox.com BODY section -->
	</body>
</html>